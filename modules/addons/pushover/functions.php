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
 * @version    1.0.1
 * @link       https://github.com/tripflex/whmcs-pushover
 */

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function po_log($description, $request, $response){
	logModuleCall('pushover', $description, $request, $response);
}

function po_debug($debugdata, $debugdata2){
	logModuleCall('pushover','debug', $debugdata, $debugdata2);
}

function po_get_url ( $ssl = true ) {
	global $CONFIG;
	$ssl_url = $CONFIG['SystemURL'];
	$nonssl_url = $CONFIG['SystemSSLURL'];
	if(!$ssl_url){
		return $nonssl_url;
	} else {
		return $ssl_url;
	}

}

function po_get_customadminpath() {
	return $GLOBALS['customadminpath'];
}

function po_get_admin_url(){
	$customadminpath = po_get_customadminpath();
	if (!$customadminpath) $customadminpath = "admin";
	$whmcsurl = po_get_url();

	return $whmcsurl."/".$customadminpath;
}

function po_get_admin_ticket_url($ticketid){
	if(po_get_enable_mobile()){
		$ticket_url = po_get_url() . '/mobile/tickets.php?action=view&id=' . $ticketid;
	} else {
		$ticket_url = po_get_admin_url() . '/supporttickets.php?action=viewticket&id=' . $ticketid;
	}
	return $ticketurl;
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
function po_get_enable_mobile(){
    $sql = mysql_query("SELECT value FROM tbladdonmodules WHERE module='pushover' AND setting='enable_mobile'");
        $result = mysql_fetch_array($sql);
        if ($result['value']){
                return $result['value'];
        } else {
                return false;
        }
}