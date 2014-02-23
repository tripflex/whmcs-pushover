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
 * @version    1.1
 * @link       https://github.com/tripflex/whmcs-pushover
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

add_hook("TicketOpen",1,"pushover_ticket_open");
add_hook("TicketUserReply",1,"pushover_ticket_reply");

function pushover_ticket_open($vars) {
    $notification = new ticketOpen($vars, 'open');
    $notification->push();
}

function pushover_ticket_reply($vars) {
    $notification = new ticketReply($vars);

}

