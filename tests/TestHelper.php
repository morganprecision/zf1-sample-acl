<?php
error_reporting( E_ALL | E_STRICT );

// Default time zone
date_default_timezone_set('America/Chicago');

// Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../library'),
    get_include_path(),
)));

define('APPLICATION_ENV', 'testing');

defined('APPLICATION_PATH')
    || define(
        'APPLICATION_PATH',
        realpath(dirname(__FILE__) . '/../application')
    );
