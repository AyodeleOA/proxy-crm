<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ************************************************************************************/

//class PhoneExtensions_Module_Model extends Vtiger_Module_Model {
class PhoneExtensions_Module_Model extends Vtiger_Module_Model {
    public function getQuery() {
        $query = "SELECT vtiger_crmentity.crmid,
                         vtiger_extensions.extensionid,
                         vtiger_extensions.extensionlabel,
                         vtiger_extensions.staff_id
                  FROM vtiger_extensions
                  INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_extensions.extensionid
                  LEFT JOIN vtiger_extensionscf ON vtiger_extensionscf.extensionid = vtiger_extensions.extensionid
                  WHERE vtiger_crmentity.deleted = 0";
        return $query;
    }
}

