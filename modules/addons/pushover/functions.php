<?php
/**
 * WHMCS Pushover Notifications Functions
 *
 * Use this addon to use the Pushover (pushover.net) API
 *
 * @package    WHMCS 5.2.1+
 * @author     Myles McNamara (get@smyl.es)
 * @copyright  Copyright (c) Myles McNamara 2013-2014
 * @license    GPL v3+
 * @version    1.0
 * @link       https://github.com/tripflex/whmcs-pushover
 */

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function po_get_ssl_url (){
    $sql = mysql_query("SELECT value FROM tblconfiguration WHERE setting='AdminForceSSL'");
	$result = mysql_fetch_array($sql);
	if($result['value'] === "on"){
	    $sslurlsql = mysql_query("SELECT value FROM tblconfiguration WHERE setting='SystemSSLURL'");
		$sslurlresult = mysql_fetch_array($sslurlsql);
		if (!$sslurlresult['value']) return false;
		return $sslurlresult['value'];
	} else {
		return false;
	}
}
function po_log($description, $request, $response){
	logModuleCall('pushover', $description, $request, $response);
}
function po_debug($debugdata, $debugdata2){
	logModuleCall('pushover','debug', $debugdata, $debugdata2);
}
function po_get_url () {
    $sql = mysql_query("SELECT value FROM tblconfiguration WHERE setting='SystemURL'");
	$result = mysql_fetch_array($sql);
	return $result['value'];
}
function po_get_admin_url(){
	require(dirname(__FILE__)."/../../../configuration.php");
	if (!$customadminpath) $customadminpath = "admin";
	$sslurl = po_get_ssl_url();
	if (!$sslurl){
		$whmcsurl = po_get_url();
	} else {
		$whmcsurl = $sslurl;
	}

	return $whmcsurl."/".$customadminpath;
}
function po_get_admin_ticket_url($ticketid){
	return po_get_admin_url()."/supporttickets.php?action=viewticket&id=".$ticketid;
}
function po_get_userkey(){
    $sql = mysql_query("SELECT value FROM tbladdonmodules WHERE module='pushover' AND setting='userkey'");
	$result = mysql_fetch_array($sql);
	if ($result['value']){
		return $result['value'];
	} else {
		po_log('userkey_error', $sql, $result);
		return false;
	}
}