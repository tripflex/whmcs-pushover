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

class PushoverMessage extends Pushover {

    function __construct($vars){
        $this->ticket_id = $vars['ticketid'];
        $this->user_id = $vars['userid'];
        $this->dept_id = $vars['deptid'];
        $this->dept_name = $vars['deptname'];
        $this->subject = $vars['subject'];
        $this->message = $vars['message'];
        $this->priority = $vars['priority'];

        // Convert HTML entities (single/double quote) back to single or double quotes
        $this->message = htmlspecialchars_decode($this->message, ENT_QUOTES);
        $this->ticket_url = get_admin_ticket_url($this->ticket_id);
    }

    function push (){

    }
}