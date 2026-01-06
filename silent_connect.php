
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

require_once 'config.inc.php';
require_once 'include/utils/utils.php';
require_once 'vtlib/Vtiger/Module.php';
require_once 'modules/PhoneExtensions/PhoneExtensions.php';
require_once "config.php";

session_start();
global $adb;
global $log;
/*

*/
$api_url = "http://192.168.100.226/api/v1.1.0";

// Replace with your actual credentials

function login($api_url){
$login_payload = json_encode([
	"username"=>"api",
    "password"=> "7b72a5712e3ae5877b2920e344172cf6",
    "port"=> "8088",
    "urltag"=> "1"
]);

$ch = curl_init($api_url."/login");
curl_setopt($ch, CURLOPT_POSTFIELDS, $login_payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

$session = json_decode($response, true);
$_SESSION['TOKEN'] = $session['token'];
}

function get_extensions($api_url){

$ch = curl_init($api_url);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $login_payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
return $response;

}

function get_detail($api_url,$id){

$payload = json_encode([
    "extid"=> $id
]);

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);

return $response;

}

function make_call($api_url){

$payload = json_encode([
	"caller"=> "2009",
    "callee"=>"2009",
    "autoanswer"=> "no"
]);

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);

return $response;

}

function download_cdr($api_url){

$payload = json_encode([
	"extid"=> "all",
    "starttime"=> "2018-11-07 00:00:00",
    "endtime"=> "2025-07-19 23:59:59"
]);

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);

return $response;

}


// Function to save extension to Vtiger
function saveToVtiger($extension_data,$url,$adb) {
    $moduleName = 'PhoneExtensions';
    $module = Vtiger_Module::getInstance($moduleName);
    if (!$module) {
        echo "Module $moduleName not found.\n";
        return false;
    }
    
    foreach ($extension_data as $ext) {
        // Check if extension already exists
        $query = "SELECT extensionid FROM vtiger_extensions WHERE extensionlabel = ?";
        $result = $adb->pquery($query, array($ext['extnumber']));
        
        if ($adb->num_rows($result) > 0) {
            echo "Extension {$ext['extnumber']} already exists, skipping.\n";
            continue;
        }
        
        $record = Vtiger_Record_Model::getCleanInstance($moduleName);
        $record->set('extensionlabel', $ext['extnumber']);
        $record->set('name', $ext['username'] ?? '');
        //$record->set('extensionid', $ext['id'] ?? 'EXT' . $ext['extnumber']); // Fallback if id not provided
        //$record->set('staff_id', $ext['staff_id'] ?? '');
        //$record->set('assigned_user_id', '1'); // Default to admin user (ID 1)
        //$record->set('mode', 'create');
        
		$url2 = $url."/extension/query?token=".$_SESSION['TOKEN'];
	
		$detail = get_detail($url2,$ext['extnumber']);
		if($detail){
			 $query = "SELECT id FROM vtiger_users WHERE email1 = ?";
			 $result = $adb->pquery($query, array($detail["extinfos"][0]['email']));
			 //var_dump($result); exit;
			 
			 if($adb->num_rows($result) >= 1){
					while($result_set = $adb->fetch_array($result))
					{			
						$record->set('staff_id',$result_set["id"]);
						$res = $adb->pquery('INSERT INTO vtiger_extensions(extensionid,extensionlabel,name,staff_id) VALUES(?,?,?,?)', array($ext['extnumber'],$ext['extnumber'], $ext['username'], $result_set["id"]));
						
						//var_dump($res); exit;
						
						$res2 =  $adb->pquery('INSERT INTO vtiger_crmentity(crmid,deleted,setype,source,label) VALUES(?,?,?,?,?)', array($ext['extnumber'],0, 'PhoneExtensions','CRM','Record insert'));
						
						//vtiger_crmentity ON vtiger_extensions.extensionid = vtiger_crmentity.crmid  WHERE vtiger_crmentity.deleted=0 AND //vtiger_extensions.extensionid > 0
						if (!$res) {
							echo "Error: " . $adb->database->ErrorMsg();
						} else {
							echo "Saved extension {$ext['extnumber']} to Vtiger.\n";
						}
						 
					}

			}
			 
			 
		}
		//$detail = get_detail($url,$ext['extnumber']);
		//var_dump($detail); exit;
		/*
        try {
            $record->save();
            echo "Saved extension {$ext['extnumber']} to Vtiger.\n";
        } catch (Exception $e) {
            echo "Error saving extension {$ext['extnumber']}: " . $e->getMessage() . "\n";
        }
		*/
    }
}


function get_cdr_recordings(){
	
}

if(!isset($_SESSION['TOKEN'])){
	login($api_url);
}else{
	/*
	$url = $api_url."/extensionlist/query?token=".$_SESSION['TOKEN'];
	$extensions = get_extensions($url);
	
	
	$url_3 = $api_url."/cdr/get_random?token=".$_SESSION['TOKEN'];
	$recordings = download_cdr($url_3);
	//var_dump($url_3); exit;
	//var_dump($recordings); exit;
	
	
	$ur = 'https://192.168.100.226:8088/api/v1.1.0/cdr/download?extid='.$recordings['extid'].'&starttime='.$recordings["starttime"].'&endtime='.$recordings["endtime"].'&token='.$_SESSION['TOKEN'].'&random='.$recordings["random"];
	
	//https://192.168.5.150:8088/api/v1.1.0/cdr/download?extid=all&starttime=2018-11-27 00:00:00&endtime=2025-07-23:59:59&token=48400f35207bb9c330a0bdaf4a5633e2&random=3d50d9fc06cf2db35097832022079095
	//var_dump($ur); exit;
	//var_dump($extensions["extlist"]); exit;
	
	
	if ($extensions && isset($extensions["extlist"])) {
		// Assuming API returns an array of extensions under 'extensions' key
		//saveToVtiger($extensions['extlist'],$api_url,$adb);
	} else {
		echo "No extensions found or API error.\n";
	}
	*/
	$url4 = $api_url."/extension/dial_extension?token=".$_SESSION['TOKEN'];
	var_dump($url4); exit;
	$call = make_call($url4);
	var_dump($call);
	
	//var_dump($extensions);
}

?>
