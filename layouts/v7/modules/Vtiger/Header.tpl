{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{strip}
<!DOCTYPE html>
<html>
	<head>
		<title>{vtranslate($PAGETITLE, $QUALIFIED_MODULE)}</title>
        <link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link type='text/css' rel='stylesheet' href='{vresource_url("libraries/bootstrap-legacy/css/bootstrap-responsive.min.css")}'> {* .row-fluid... *}
		<link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/bootstrap.min.css")}'>
		<link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/docs.min.css")}'>
		<link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/todc/css/todc-bootstrap.min.css")}'>
		<link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/font-awesome/css/font-awesome.min.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/select2/select2.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/select2-bootstrap/select2-bootstrap.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/jquery-ui-1.12.0.custom/jquery-ui.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/vt-icons/style.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/animate/animate.min.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css")}'>
        <link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/jquery/daterangepicker/daterangepicker.css")}'>
		
		
		<!-- Bootstrap 4 or 5 CDN -->

		<!-- New css-->
		{if $MODULE eq 'Users' && $VIEW eq 'Login'}
			<link type='text/css' rel='stylesheet' href='{vresource_url("layouts/v7/lib/newui/css/login.css")}'>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
			
		{else}
			  <link rel="stylesheet" href='{vresource_url("layouts/v7/lib/newui/css/dashboard.css?v=901")}'>
			  <!--
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-xxz7cY3rGt9hrQjM9vb9ADf6D6SH1a8lALo0OyOPJ2WwHgCXLzqkWdKk1q4zKKhWQG+lEOszn8I+Zy4D2fPqCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			  -->
			  
			  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		{/if}
		
		
        
        <input type="hidden" id="inventoryModules" value={ZEND_JSON::encode($INVENTORY_MODULES)}>
        
        {assign var=V7_THEME_PATH value=Vtiger_Theme::getv7AppStylePath($SELECTED_MENU_CATEGORY)}
      
        {if strpos($V7_THEME_PATH,".less")!== false}
            <link type="text/css" rel="stylesheet/less" href="{vresource_url($V7_THEME_PATH)}" media="screen" />
        {else}
            <link type="text/css" rel="stylesheet" href="{vresource_url($V7_THEME_PATH)}" media="screen" />
            <link type="text/css" rel="stylesheet" href="{vresource_url($V7_THEME_PATH)}" media="screen" />
        {/if}
        
        {foreach key=index item=cssModel from=$STYLES}
			<link type="text/css" rel="{$cssModel->getRel()}" href="{vresource_url($cssModel->getHref())}" media="{$cssModel->getMedia()}" />
		{/foreach}

		{* For making pages - print friendly *}
		<style type="text/css">
            @media print {
            .noprint { display:none; }
		}
		
		.dashboardWidget{
			    border: 3px solid #007AFF !important;
				padding: 2px;
				border-radius: 10px;
		}
		
		.dashboardWidgetHeader{
			padding: 10px !important;
			background: #f5f5f5 !important;
		}
		
		.dashBoardWidgetFooter{
			    background-color: #E7E7E7;

				display: flex;
				justify-content: flex-end;
				gap: 8px;
				border-bottom-left-radius: 8px;
				border-bottom-right-radius: 8px;
		}
		
		.dashBoardTabContents ul li {
			border: 3px solid #E2E2E4;
			box-shadow: 1px;
			list-style: none;
			padding: 0px !important; 
			position: absolute;
		}
		
		.dashboardWidgetContent{
		   padding:10px;
		}
		.fa {
			color: black !important;
		}
		
		.ml-5{
			margin-left:15px !important;
		}
		.btn{
			margin-left: 0;
			border: 1px solid #999;
			background: #fff;
		}
		
		.bigger-icon{
			font-size:16px !important;
		}
		
		.sub-menu li {
			font-size: 16px !important;
			padding-bottom:0px !important;
			padding: 7px !important;
			margin-bottom: 0px !important;
		}
		
		[class^="vicon-"], [class*=" vicon-"]{
			font-size: 20px !important; 
		}
		.sub-menu{
			top:-100px !important;
			min-width:220px;
			z-index:9999 !important;
		}
		
		.main-container .module-nav {
			display: inline-block;
			width: 42px;
			z-index: 0 !important;
		}
		
		.default-hr {
			margin: 10px 0;
			margin-bottom: 0px !important;
			width: 100px;
			height: 6px;
			background: linear-gradient(94.05deg, #007AFF 21.4%, #67ADF8 74.2%) !important;
			margin-right: 28px;
			border: none;
		}
		.text-white{
			color:white;
		}
		.long-slash {
			display: inline-block;
			width: 30px;
			height: 1px;
			 margin-top: 20px;
			background-color: white;
			transform: rotate(-77deg) translateY(-4px) translateX(10px);
		}
		
		.main-container .content-area {
			width: 100%;
			/* padding-left:240px !important; */ 
		}
		
		@media (min-width: 992px) {
			.main-container .content-area {
				width: 100%;
				/* padding-left: 240px; */
			}
		}
		
		.main-container .sidebar-essentials {
			left: 0px !important;
			max-width: 240px !important;
		}

				
		.menu1 li {
			padding: 8px 15px !important;
			 margin: 5px 0 !important;
		}
		
		@media (min-width: 1200px) {
			.sidebar {
				width: 20% !important;
			}
		}
		
		.sidebar-essentials, .sidebar-essentials{
			
		}
		
		.module-nav .modules-menu {
			background: #eaeaea !important;
		}
		
		
		
		.sidebar-essentials {
			background:#eee !important;
		}

		.module-nav .modules-menu i{
			color: #999 !important;
		}

		.no-padding{
			padding:0px;
		}
		
		.no-radius{
			/* border-radius:0px; */
		}
		
		.sidebar-menu .sidebar-btn {
			    border: none;
				background: linear-gradient(94.05deg, #007AFF 21.4%, #67ADF8 74.2%);
				color: white;
				border-radius: 50%;
				width: 30px;
				height: 30px;
				cursor: pointer;
		}
		.sidebar-menu .sidebar-btn .fa {
			    color: white !important;

		}
		hr{
			width: 100%;
			height: 3px;
			background: black !important;
			border: none;
		}
		
		.detailViewContainer .recordImage{
			height: 40px !important;
			width: 40px !important;
		}
		
		.record-header {
			min-height: 100% !important;
		}
		.btn-success{
			  background-color: #00d26a !important; /* Bright green */
			  color: #000; /* Black text */
			  font-weight: bold;
			  /* font-size: 16px; */
              /*  padding: 12px 28px; */
			  
			  border: none;
			  border-radius: 5px;
		}
		
		.modal-overlay-footer{
			border-left:0px !important;
		}

		
		.sidebar {
				/*
				overflow-y: scroll;
				*/
		}
		.overflowy{
			overflow-y: scroll;
		}
		.menu-section {
			 margin-top: -10px; 
		}
		.dropdown-menuu{
			display:none;
		}
		.list-none{
			list-style:none;
		}
		
		.app-fixed-navbar{
			background: transparent !important;
		}
		.main-container .module-nav {
			#background-color: #2C3B49;
			background: #ccc !important;
		}
		@media (min-width: 992px) {
			.main-container .sidebar-essentials {
			display: inline-block;
			width: auto !important;
			}
		}
		
		.sidebar-essentialss {
			/* background: #eee !important; */
			background: #FFFFFF;
			border-right: 1px solid #DDDDDD;
			overflow: auto;
			border-width: thin;
		}
		@media (min-width: 0px) and (max-width: 830px) {
			#appnavcontent {
				border: 1px solid #ccc;
				background: #f0f0f0;
				border-width: thin;
				padding: 3px;
			}
		}
		.container-fluid {
			/* background: #f0f0f0; */
		}
		.fs-20{
			font-size:20px;
		}
		.dashBoardWidgetFooter {
			 position: relative !important;
		}

		.dashboardWidgetContent{
			height: 220px !important; 
			overflow: scroll !important;
		}
		.dashboardWidgetHeader{
			height: 75px;
		}
		.mb-4{
			margin-bottom:20px;
		}
		@media (max-width: 767.98px) {
		  .hide-on-mobile {
			display: none !important;
		  }
		}
		.search-link .keyword-input{
			background: transparent;
			width: 80%;
		}
		.header-search {
			background: transparent; 
		}
		.search-link {
		 border-radius: 5px;
		}
		.search-link .fa {
			color: white !important;
		}
		.search-link .keyword-input::placeholder{
		  color: white; 
		  opacity: 1;  
		}
		.textOverflowEllipsis {
			font-size: 14px;
		}
		.mCSB_container {
			font-size: 13px;
		}
		.dashBoardContainer .tabContainer .sortable button {
			margin-top: 10px;
			border-radius: 3px;
		}
		.search-bar input {
			width: 100%;
			padding: 8px 7px 7px 30px;
		}
		.pt-20{
			padding-top:20px;
		}
		</style>
		<script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script>
		<script src="{vresource_url('layouts/v7/lib/jquery/jquery.min.js')}"></script>
		<script src="{vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.4.1.js')}"></script>
		
		<script type="text/javascript">
			var _META = { 'module': "{$MODULE}", view: "{$VIEW}", 'parent': "{$PARENT_MODULE}", 'notifier':"{$NOTIFIER_URL}", 'app':"{if isset($SELECTED_MENU_CATEGORY)} {$SELECTED_MENU_CATEGORY}{/if}" };
            {if $EXTENSION_MODULE}
                var _EXTENSIONMETA = { 'module': "{$EXTENSION_MODULE}", view: "{$EXTENSION_VIEW}"};
            {/if}
            var _USERMETA;
            {if $CURRENT_USER_MODEL}
               _USERMETA =  { 'id' : "{$CURRENT_USER_MODEL->get('id')}", 'menustatus' : "{$CURRENT_USER_MODEL->get('leftpanelhide')}", 
                              'currency' : "{decode_html($USER_CURRENCY_SYMBOL)}", 'currencySymbolPlacement' : "{$CURRENT_USER_MODEL->get('currency_symbol_placement')}",
                          'currencyGroupingPattern' : "{$CURRENT_USER_MODEL->get('currency_grouping_pattern')}", 'truncateTrailingZeros' : "{$CURRENT_USER_MODEL->get('truncate_trailing_zeros')}",'userlabel':"{($CURRENT_USER_MODEL->get('userlabel'))|escape:html}",};
            {/if}
		</script>
	
	</head>
	 {assign var=CURRENT_USER_MODEL value=Users_Record_Model::getCurrentUserModel()}
	 
	<body data-skinpath="{Vtiger_Theme::getBaseThemePath()}" data-language="{$LANGUAGE}" data-user-decimalseparator="{$CURRENT_USER_MODEL->get('currency_decimal_separator')}" data-user-dateformat="{$CURRENT_USER_MODEL->get('date_format')}"
          data-user-groupingseparator="{$CURRENT_USER_MODEL->get('currency_grouping_separator')}" data-user-numberofdecimals="{$CURRENT_USER_MODEL->get('no_of_currency_decimals')}" data-user-hourformat="{$CURRENT_USER_MODEL->get('hour_format')}"
          data-user-calendar-reminder-interval="{$CURRENT_USER_MODEL->getCurrentUserActivityReminderInSeconds()}">
           <input type="hidden" id="start_day" value="{$CURRENT_USER_MODEL->get('dayoftheweek')}" /> 
		 
		 <div class="layout">
			<div class="contain">
		<!-- <div id="page"> -->
            <div id="pjaxContainer" class="hide noprint"></div>
            <div id="messageBar" class="hide"></div>
		
		
		
		
		<!-- begin -->
		
		 

			