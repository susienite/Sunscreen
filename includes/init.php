<?php
// DO NOT MODIFY THIS FILE!

// check current php version to ensure it meets 2300's requirements
function check_php_version()
{
    if (version_compare(phpversion(), '7.0', '<')) {
        define(VERSION_MESSAGE, "PHP version 7.0 or higher is required for 2300. Make sure you have installed PHP 7 on your computer and have set the correct PHP path in VS Code.");
        echo VERSION_MESSAGE;
        throw VERSION_MESSAGE;
    }
}
check_php_version();

// DO NOT MODIFY THIS FILE!

function show_php_errors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
show_php_errors();

// DO NOT MODIFY THIS FILE!
?>
