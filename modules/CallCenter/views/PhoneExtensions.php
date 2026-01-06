<?php
class CallCenter_PhoneExtensions_View extends Vtiger_Index_View {
	
    public function process(Vtiger_Request $request) {
        global $adb;

        $query = "SELECT userid, asterisk_extension FROM vtiger_asteriskextensions";
        $result = $adb->pquery($query, []);

        $extensions = [];
        while ($row = $adb->fetch_array($result)) {
            $extensions[] = $row;
        }
		
		//var_dump($extensions); exit;
        $viewer = $this->getViewer($request);
        $viewer->assign('EXTENSIONS', $extensions);
        $viewer->view('PhoneExtensions.tpl', 'CallCenter');
    }
}
