<?php
/**
 * Do not edit this file. Edit the config files found in the config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */
define( 'AS3CF_AWS_ACCESS_KEY_ID',     $_ENV['ACCESS_KEY'] );
define( 'AS3CF_AWS_SECRET_ACCESS_KEY', $_ENV['SECRET_KEY'] );
require_once(dirname(__DIR__) . '/vendor/autoload.php');
require_once(dirname(__DIR__) . '/config/application.php');
require_once(ABSPATH . 'wp-settings.php');
