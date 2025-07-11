<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

if (!file_exists("vendor/autoload.php")) {
    echo "Please install composer dependencies.";
    exit;
}

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution
include_once 'config.php';
require_once 'vendor/autoload.php';
/*
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';
*/

include 'modules/Emails/mail.php';
//$module, $to_email, $from_name, $from_email, $subject,

send_mail2("Mail", "oaadedayo@gmail.com", "Ayodele", "ayodelea@proxynetgroup.com", "Hello", "Hello O");
var_dump("hello"); exit;