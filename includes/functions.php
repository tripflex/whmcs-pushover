<?php
/**
 * @author     Myles McNamara (myles@smyl.es)
 * @copyright  Copyright (c) Myles McNamara 2014
 * @license    GPL v3+
 * @version    1.1
 * @link       https://github.com/tripflex/whmcs-pushover
 * @date:   2014-02-22 00:43:17
 * @last modified by:   Myles McNamara
 * @last modified time: 2014-02-22 18:49:12
 */


if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

/**
 * Write to Addon Module Log of WHMCS
 * @param  string $description description of the log entry
 * @param  mixed $request     request data to log
 * @param  mixed $response    response data to log
 * @return null
 */
function log($description, $request, $response){
    logModuleCall('pushover', $description, $request, $response);
}

/**
 * Write to Addon Module Log of WHMCS with Debug as Description
 * @param  mixed $debugdata  debug data output under request section of log
 * @param  mixed $debugdata2 debug data output under response section of log
 * @return null
 */
function debug($debugdata, $debugdata2){
    logModuleCall('pushover','debug', $debugdata, $debugdata2);
}

/**
 * Return Pushover User Key from Database
 * @return string
 */
function get_user_key(){
    $sql = mysql_query("SELECT value FROM tbladdonmodules WHERE module='pushover' AND setting='userkey'");
    $result = mysql_fetch_array($sql);
    if ($result['value']){
        return $result['value'];
    } else {
        log('userkey_error', $sql, $result);
        return false;
    }
}

/**
 * Get Non-SSL WHMCS URL
 * @return string
 */
function get_url () {
    global $CONFIG;
    return $CONFIG['SystemURL'];
}

/**
 * Get WHMCS SSL URL
 * @return string SSL URL
 */
function get_ssl_url(){
    global $CONFIG;
    return $CONFIG['SystemSSLURL'];
}

/**
 * Check for Custom Admin Path
 * @return string
 */
function get_custom_admin_path() {
    return $GLOBALS['customadminpath'];
}

/**
 * Return formatted Admin URL
 * @return string
 */
function get_admin_url(){
    if (!get_ssl_url()){
        $url = get_url();
    } else {
        $url = get_ssl_url();
    }
    if (!get_custom_admin_path()) $customadminpath = "admin";

    return $url."/".$customadminpath;
}

/**
 * Get formatted URL to ticket
 * @param  integer $ticketid
 * @return string
 */
function get_admin_ticket_url($ticketid){
    return get_admin_url()."/supporttickets.php?action=viewticket&id=".$ticketid;
}