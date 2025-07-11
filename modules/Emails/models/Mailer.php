<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
include_once 'vtlib/Vtiger/Mailer.php';
include_once 'include/simplehtmldom/simple_html_dom.php';
include_once 'libraries/InStyle/InStyle.php';
include_once 'libraries/ToAscii/ToAscii.php';
include_once 'include/database/PearDatabase.php';

use \Mailjet\Client;
use \Mailjet\Resources;

#[\AllowDynamicProperties]
class Emails_Mailer_Model extends Vtiger_Mailer {

	private $dom = null;
	public $Signature;

	public static function getInstance() {
		return new self();
	}

	/**
	 * Function returns error from phpmailer
	 * @return <String>
	 */
	function getError() {
		return $this->ErrorInfo;
	}

	/**
	 * Function to replace space with %20 to make image url as valid
	 * @param type $htmlContent
	 * @return type
	 */
	public static function makeImageURLValid($htmlContent) {
		$doc = new DOMDocument();
		// set error level
 		$internalErrors = libxml_use_internal_errors(true);
		$imageUrls = array();
		if (!empty($htmlContent)) {
			@$doc->loadHTML($htmlContent);
			$tags = $doc->getElementsByTagName('img');
			libxml_use_internal_errors($internalErrors);
			foreach ($tags as $tag) {
				$imageUrl = $tag->getAttribute('src');
				$imageUrls[$imageUrl] = str_replace(" ", "%20", $imageUrl);
			}
		}
		foreach ($imageUrls as $key => $value) {
			$htmlContent = str_replace($key, $value, $htmlContent);
		}
		return $htmlContent;
	}

	public static function convertCssToInline($content) {
		if (preg_match('/<style[^>]+>(?<css>[^<]+)<\/style>/s', $content)) {
			$instyle = new InStyle();
			$convertedContent = $instyle->convert($content);
			if ($convertedContent) {
				return $convertedContent;
			}
		}

		return $content;
	}

	public static function retrieveMessageIdFromMailroom($crmId) {
		$db = PearDatabase::getInstance();
		$result = $db->pquery('SELECT messageid FROM vtiger_mailscanner_ids WHERE crmid=?', array($crmId));
		return $db->query_result($result, 'messageid', 0);
	}

	/**
	 * Function generates randomId with host details
	 * @return type
	 */
	public static function generateMessageID() {
		$generateId = sprintf("<%s.%s@%s>", base_convert(microtime(), 10, 36), base_convert(bin2hex(openssl_random_pseudo_bytes(8)), 16, 36), gethostname());
		return $generateId;
	}

	/**
	 * Function inserts new message for a crmid which was not present in 
	 * below table
	 * @param type $crmId
	 */
	public static function updateMessageIdByCrmId($messageId, $crmId) {
		$db = PearDatabase::getInstance();
		$existingResult = array();
		//Get existing refids for a given crm id and update new refids to the crmid
		$existingResultObject = $db->pquery("SELECT refids FROM vtiger_mailscanner_ids WHERE crmid=? AND refids != 'null'", array($crmId));
		$num_rows = $db->num_rows($existingResultObject);
		if ($num_rows > 0) {
			$existingResult = json_decode($db->query_result($existingResultObject, 'refids', 0), true);
			// Checking if first parameter is not an array
			if (is_array($existingResult)) {
				$existingResultValue = array_merge($existingResult, array($messageId));
				$refIds = json_encode($existingResultValue);
				$db->pquery("UPDATE vtiger_mailscanner_ids SET refids=? WHERE crmid=? ", array($refIds, $crmId));
			}
		} else {
			$db->pquery("INSERT INTO vtiger_mailscanner_ids (messageid, crmid) VALUES(?,?)", array($messageId, $crmId));
		}
	}

	public function convertToValidURL($htmlContent) {
		if (!$this->dom) {
			$this->dom = new DOMDocument();
			@$this->dom->loadHTML($htmlContent);
		}
		$anchorElements = $this->dom->getElementsByTagName('a');
		$urls = array();
		foreach ($anchorElements as $anchorElement) {
			$url = $anchorElement->getAttribute('href');
			if (!empty($url)) {
				//If url start with mailto:,tel:,#,news: then skip those urls 
				if (!preg_match("~^(?:f|ht)tps?://~i", $url) && (strpos('$', $url[0]) !== 0) && (strpos($url, 'mailto:') !== 0 ) && (strpos($url, 'tel:') !== 0 ) && $url[0] !== '#' && !preg_match("/news:\/\//i", $url)) {
					$url = "http://" . $url;
					$urls[$anchorElement->getAttribute('href')] = $url;
					$htmlContent = $this->replaceURLWithValidURLInContent($htmlContent, $anchorElement->getAttribute('href'), $url);
				}
			}
		}
		return $htmlContent;
	}

	public function replaceURLWithValidURLInContent($htmlContent, $searchURL, $replaceWithURL) {
		$search = '"' . $searchURL . '"';
		$toReplace = '"' . $replaceWithURL . '"';
		$pos = strpos($htmlContent, $search);
		if ($pos != false) {
			$replacedContent = substr_replace($htmlContent, $toReplace, $pos) . substr($htmlContent, $pos + strlen($search));
			return $replacedContent;
		}
		return $htmlContent;
	}

	public static function getProcessedContent($content) {
		$processedContent = purifyHtmlEventAttributes($content,TRUE);
		return $processedContent;
	}

	/**
	 * Function to Convert an UTF-8 string to Ascii string 
	 * @param <string> $content - string containing utf-8 characters
	 * @param <string> $subst_chr - if the character is not found it replaces with this value
	 * @return <string> Ascii String
	 */
	public static function convertToAscii($content, $subst_chr = '') {
		return ToAscii::convertToAscii($content, $subst_chr);
	}
	
	
	public function SendDirect($mailer,$status, $parent_id=""){
	    var_dump($mailer->body); exit;
	  //  return $this->send_mail($to_email, $from_name, $from_email, $subject, $contents);
	    //return true;
	}
	
	
function send_mail($to_email, $from_name, $from_email, $subject, $contents, $cc = '', $bcc = '', $attachment = '', $emailid = '', $logo = '', $useGivenFromEmailAddress = false, $useSignature = 'Yes', $inReplyToMessageId = '') {
        //return true;
        global $adb, $log;
        global $root_directory;
        global $HELPDESK_SUPPORT_EMAIL_ID, $HELPDESK_SUPPORT_NAME;
    
        $uploaddir = $root_directory . "/test/upload/";
    
        $adb->println("To id => '" . $to_email . "'\nSubject ==>'" . $subject . "'\nContents ==> '" . $contents . "'");
        if ($from_email == '') {
            $from_email = getUserEmailId('user_name', $from_name);
        }
    
        //var_dump($to_email); exit;
        
        // Handle reply-to email address
        $cachedFromEmail = VTCacheUtils::getOutgoingMailFromEmailAddress();
        if ($cachedFromEmail === null) {
            $query = "select from_email_field from vtiger_systems where server_type=?";
            $params = array('email');
            $result = $adb->pquery($query, $params);
            $from_email_field = $adb->query_result($result, 0, 'from_email_field');
            VTCacheUtils::setOutgoingMailFromEmailAddress($from_email_field);
        }
    
       
        
        if (isUserInitiated()) {
            $replyToEmail = $from_email;
        } else {
            $replyToEmail = $from_email_field;
        }
    
        if (isset($from_email_field) && $from_email_field != '' && !$useGivenFromEmailAddress) {
            $from_email = $from_email_field;
        }
        

        if ($useSignature == 'Yes') {
            $contents = addSignature($contents, $from_name, $from_email);
        }
    
        $tos = array();
        foreach($to_email as $ml){
            foreach($ml as $key=>$val){
                $ar = array("Email"=>$val,'Name'=>$val);
                $tos[] = $ar;
            }
        }
        
        $mj = new \Mailjet\Client('6c030f6245529ed5a4de82dad1804019','19ccf157aea4db7b9431ecc51d02dd8f',true,['version' => 'v3.1']);
       
        // Prepare the email data
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => $from_email,
                        'Name' => $from_name
                    ],
                    'To' => $tos,
                    'Subject' => $subject,
                    'TextPart' => strip_tags($contents),
                    'HTMLPart' => $contents,
                    'CustomID' => "AppGettingStartedTest",
                    'CC' => $cc ? [['Email' => $cc]] : [],
                    'BCC' => $bcc ? [['Email' => $bcc]] : [],
                    //'ReplyTo' => $replyToEmail,
                    //'InReplyTo' => $inReplyToMessageId ? $inReplyToMessageId : null,
                ]
            ]
        ];
    
        // Send the email using Mailjet API
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        
        // Check the response
        if ($response->success()) {
            $log->info('Email sent successfully');
            return true; // or any other custom success indicator
        } else {
            
            $mail_error = $response->getData();
            $log->error('Error sending email: ' . json_encode($mail_error));
            return false;
        }
    }

	

}
