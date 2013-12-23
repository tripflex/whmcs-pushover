<?php
/**
 * WHMCS Pushover Notifications Hooks
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

function pushover_ticket_open($vars) {
	$ticketid = $vars['ticketid'];
	$userid = $vars['userid'];
	$deptid = $vars['deptid'];
	$deptname = $vars['deptname'];
	$subject = $vars['subject'];
	$message = $vars['message'];
	$priority = $vars['priority'];
	$userkey = $vars['userkey'];
	$userkey = $vars['systemurl'];

	include('php-pushover.php');

	$push = new Pushover();
	$push->setToken('a7HcPjJeGmAtyG4e6tCYqyXk5wc5Xj');
	$push->setUser($userkey);
	$push->setTitle('[Ticket ID: '.$ticketid.'] New Support Ticket Opened');
	$push->setMessage($subject);

	$push->send();

	logModuleCall('pushover','hook_ticket_open', $arr, $vars);

}

add_hook("TicketOpen",1,"pushover_ticket_open");