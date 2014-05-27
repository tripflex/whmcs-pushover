<?php
/**
 * WHMCS Pushover Notifications
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

define( 'PO_ROOT', dirname( __FILE__ ) );

require_once( PO_ROOT . '/functions.php');
require_once( PO_ROOT . '/inc/whmcse.php' );

function pushover_config() {
    $configarray = array(
    "name" => "Pushover Notifications",
    "description" => "This addon allows you to send notifications via Pushover (pushover.net) API",
    "version" => "1.0.1",
    "author" => "Myles McNamara",
    "language" => "english",
    "fields" => array(
        "enable_mobile" => array ("FriendlyName" => "Use Mobile URL", "Type" => "yesno", "Size" => "25", "Description" => "Enable to use the mobile URL for link to ticket", ),
        "userkey" => array ("FriendlyName" => "User Key", "Type" => "text", "Size" => "75", "Description" => "User Key from <a href=\"http://pushover.net\" target=\"_blank\"> Pushover</a>.", "Default" => "", )
    ));
    return $configarray;
}

function pushover_activate() {

    # Create Custom DB Table
    $query = "CREATE TABLE `mod_pushover` (`id` INT( 1 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`pushover` TEXT NOT NULL )";
    $result = full_query($query);

    # Return Result
    return array('status'=>'success','description'=>'Great, everything is activated.  This is brand new so only new tickets will be sent notifications.');

}

function pushover_deactivate() {

    # Remove Custom DB Table
    $query = "DROP TABLE `mod_pushover`";
    $result = full_query($query);

    # Return Result
    return array('status'=>'success','description'=>'WHMCS Pushover Notifications Deactivated.');

}

function pushover_sidebar($vars) {

    $modulelink = $vars['modulelink'];
    $version = $vars['version'];

    $sidebar = '<span class="header"><img src="images/icons/addonmodules.png" class="absmiddle" width="16" height="16" /> Pushover Notifications</span>
<ul class="menu">
        <li><a href="https://github.com/tripflex/whmcs-pushover">Updates and Releases</a></li>
        <li><a href="#">Version: '.$version.'</a></li>
    </ul>';
    return $sidebar;

}