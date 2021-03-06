<?php
// global path constants.
define('PATH_ABSOLUTE', dirname(__FILE__) . '/../');
define('PATH_INCLUDES', PATH_ABSOLUTE . 'includes/');

// require the website class.
require_once(PATH_INCLUDES . 'website.class.php');

// global website variables.
$website['discord_client'] = 'client_id';
$website['discord_secret'] = 'secret_token';
$website['discord_scopes'] = 'identify';
$website['name']           = 'Website Name';
$website['url']            = website::website_url();
$website['current_url']    = website::current_url();

// start a session.
session_start();
?>
