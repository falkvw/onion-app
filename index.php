<?php
/**
 * Created by PhpStorm.
 * User: falkvonwildenradt
 * Date: 13.08.16
 * Time: 13:22
 */
require_once 'lib/OmegaOnion.php';

$base = basename($_SERVER['PHP_SELF']);

$onion = new ageeweb\php_onion\OmegaOnion( FALSE ); //FALSE is no logging

echo $onion->execCommand( 'ubus list' );