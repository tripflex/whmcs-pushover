<?php
/**
 * WHMCS Pushover Notifications
 *
 * Send notifications using the Pushover (pushover.net) API
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

class Pushover {
    public $user_key;
    private $app_token = "a7HcPjJeGmAtyG4e6tCYqyXk5wc5Xj";

    /**
     * Constructor
     */
    public function __construct(){
        define( 'PUSHOVER_VERSION', '1.0' );

        include( 'includes/functions.php' );
        include( 'includes/whmcs.php' );
        include( 'classes/ticketOpen.php' );

        $this->user_key = get_user_key();
    }
}

// include_once('debug_console.php');

$GLOBALS['pushover'] = new Pushover();