<?php
include_once 'vtlib/Vtiger/Module.php';

// Check if module already exists
$module = Vtiger_Module::getInstance('YealinkExtensions');
if ($module) {
    echo "Module YealinkExtensions already exists.";
    exit;
}

// Create new module
$module = new Vtiger_Module();
$module->name = 'YealinkExtensions';
$module->label = 'Yealink Extensions';
$module->parent = 'Tools';
$module->save();

// Initialize module tables
$module->initTables();

// Create block for fields
$block = new Vtiger_Block();
$block->label = 'LBL_YEALINKEXTENSIONS_INFORMATION';
$module->addBlock($block);

// Add extension field
$field1 = new Vtiger_Field();
$field1->name = 'extension';
$field1->label = 'Extension';
$field1->uitype = 1;
$field1->typeofdata = 'V~M';
$field1->columntype = 'VARCHAR(50)';
$field1->displaytype = 1;
$block->addField($field1);

// Add name field
$field2 = new Vtiger_Field();
$field2->name = 'name';
$field2->label = 'Name';
$field2->uitype = 2;
$field2->typeofdata = 'V~O';
$field2->columntype = 'VARCHAR(100)';
$field2->displaytype = 1;
$block->addField($field2);

// Add extensionid field (entity identifier)
$field3 = new Vtiger_Field();
$field3->name = 'extensionid';
$field3->label = 'Extension ID';
$field3->uitype = 4;
$field3->typeofdata = 'V~M';
$field3->columntype = 'VARCHAR(100)';
$field3->displaytype = 1;
$block->addField($field3);
$module->setEntityIdentifier($field3);

// Add staff_id field
$field4 = new Vtiger_Field();
$field4->name = 'staff_id';
$field4->label = 'Staff ID';
$field4->uitype = 1;
$field4->typeofdata = 'V~O';
$field4->columntype = 'VARCHAR(50)';
$field4->displaytype = 1;
$block->addField($field4);

// Set default sharing and enable tools
$module->setDefaultSharing('Private');
$module->enableTools();

// Create language file for English
$languageFilePath = 'modules/YealinkExtensions/language/en_us.YealinkExtensions.php';
$languageContent = '<?php
$languageStrings = array(
    \'LBL_YEALINKEXTENSIONS\' => \'Yealink Extensions\',
    \'SINGLE_YealinkExtensions\' => \'Yealink Extension\',
    \'LBL_YEALINKEXTENSIONS_INFORMATION\' => \'Yealink Extensions Details\',
    \'LBL_EXTENSION\' => \'Extension\',
    \'LBL_NAME\' => \'Name\',
    \'LBL_EXTENSIONID\' => \'Extension ID\',
    \'LBL_STAFF_ID\' => \'Staff ID\',
);
';
$moduleDir = 'modules/YealinkExtensions';
$languageDir = $moduleDir . '/language';
if (!is_dir($moduleDir)) {
    mkdir($moduleDir, 0755, true);
}
if (!is_dir($languageDir)) {
    mkdir($languageDir, 0755, true);
}
file_put_contents($languageFilePath, $languageContent);

// Create module class file
$moduleFilePath = 'modules/YealinkExtensions/YealinkExtensions.php';
$moduleFileContent = '<?php
include_once \'modules/Vtiger/CRMEntity.php\';

class YealinkExtensions extends Vtiger_CRMEntity {
    var $table_name = \'vtiger_yealinkextensions\';
    var $table_index = \'yealinkextensionsid\';
    var $customFieldTable = Array(\'vtiger_yealinkextensionscf\', \'yealinkextensionsid\');

    var $tab_name = Array(\'vtiger_crmentity\', \'vtiger_yealinkextensions\', \'vtiger_yealinkextensionscf\');
    var $tab_name_index = Array(
        \'vtiger_crmentity\' => \'crmid\',
        \'vtiger_yealinkextensions\' => \'yealinkextensionsid\',
        \'vtiger_yealinkextensionscf\' => \'yealinkextensionsid\'
    );

    var $list_fields = Array(
        \'Extension\' => Array(\'yealinkextensions\' => \'extension\'),
        \'Name\' => Array(\'yealinkextensions\' => \'name\'),
        \'Extension ID\' => Array(\'yealinkextensions\' => \'extensionid\'),
        \'Staff ID\' => Array(\'yealinkextensions\' => \'staff_id\')
    );

    var $list_fields_name = Array(
        \'Extension\' => \'extension\',
        \'Name\' => \'name\',
        \'Extension ID\' => \'extensionid\',
        \'Staff ID\' => \'staff_id\'
    );

    var $list_link_field = \'extension\';
    var $search_fields = Array(
        \'Extension\' => Array(\'yealinkextensions\' => \'extension\'),
        \'Name\' => Array(\'yealinkextensions\' => \'name\'),
        \'Extension ID\' => Array(\'yealinkextensions\' => \'extensionid\'),
        \'Staff ID\' => Array(\'yealinkextensions\' => \'staff_id\')
    );

    var $search_fields_name = Array(
        \'Extension\' => \'extension\',
        \'Name\' => \'name\',
        \'Extension ID\' => \'extensionid\',
        \'Staff ID\' => \'staff_id\'
    );

    var $mandatory_fields = Array(\'extension\', \'extensionid\', \'createdtime\', \'modifiedtime\');
    var $default_order_by = \'extension\';
    var $default_sort_order = \'ASC\';
}
';
file_put_contents($moduleFilePath, $moduleFileContent);

echo "YealinkExtensions module created successfully.";
?>