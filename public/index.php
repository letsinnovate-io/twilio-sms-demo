<?php
define('SRC_PATH',dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('VENDOR_PATH', __DIR__ . '/../vendor');

require_once VENDOR_PATH.'/autoload.php';

// Load dotenv?
if (class_exists('Dotenv\Dotenv') && file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} else {
    exit("Either the .env file does not exist, or the Dotenv class file does not exist.  Exiting.");
}

require SRC_PATH . "SmsDemo.php";

SmsDemo::sendText();