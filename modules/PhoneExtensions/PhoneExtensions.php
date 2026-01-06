<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class PhoneExtensions extends CRMEntity {
    var $db, $log; // Used in class functions of CRMEntity

    var $table_name = 'vtiger_extensions';
    var $table_index= 'extensionid';
    var $column_fields = Array();

    /** Indicator if this is a custom module or standard module */
    var $IsCustomModule = true;

    /**
     * Mandatory table for supporting custom fields.
     */
    var $customFieldTable = Array('vtiger_extensionscf', 'extensionid','extensionlabel');

    /**
     * Mandatory for Saving, Include tables related to this module.
     */
    var $tab_name = Array('vtiger_extensions', 'vtiger_crmentity','vtiger_extensionscf');

    /**
     * Mandatory for Saving, Include tablename and tablekey columnname here.
     */
    var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_extensions'   => 'extensionid',
	    'vtiger_extensionscf' => 'extensionid');

    /**
     * Mandatory for Listing (Related listview)
     */

	var $list_fields = Array (
		'ID' => Array('vtiger_extensions', 'extensionid'),
		'Extension'=> Array('vtiger_extensions', 'extensionlabel'),
		'Name'=> Array('vtiger_extensions', 'extensionlabel'),
		'Assigned Staff'=> Array('vtiger_extensions', 'staff_id'),
		
		
	);
	var $list_fields_name = Array(
		'ID' => 'extensionid',
		'Extension'=> 'extensionlabel',
		'Name'=> 'extensionlabel',
		'Assigned Staff'=> 'staff_id',
	);


	// Make the field link to detail view from list view (Fieldname)
	var $list_link_field = 'extensionlabel';

	// For Popup listview and UI type support
	var $search_fields = Array(
	/* Format: Field Label => Array(tablename, columnname) */
	// tablename should not have prefix 'vtiger_'
	'Project Name'=> Array('extensions', 'extensionlabel'),
	//'Start Date'=> Array('project', 'startdate'),
	//'Status'=>Array('project','projectstatus'),
	//'Type'=>Array('project','projecttype'),
	);
	var $search_fields_name = Array(
	/* Format: Field Label => fieldname */
	'Name'=> 'extensionlabel',
	//'Start Date'=> 'startdate',
	//'Status'=>'projectstatus',
	//'Type'=>'projecttype',
	);

	// For Popup window record selection
	var $popup_fields = Array('extensionlabel');

	// Placeholder for sort fields - All the fields will be initialized for Sorting through initSortFields
	var $sortby_fields = Array();

	// For Alphabetical search
	var $def_basicsearch_col = 'extensionlabel';

	// Column value to use on detail view record text display
	var $def_detailview_recname = 'extensionlabel';

	// Required Information for enabling Import feature
	var $required_fields = Array('extensionlabel'=>1);

	// Callback function list during Importing
	var $special_functions = Array('set_import_assigned_user');

	var $default_order_by = 'extensionlabel';
	var $default_sort_order='ASC';
	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var $mandatory_fields = Array('createdtime', 'modifiedtime', 'extensionlabel', 'staff_id');


}
?>
