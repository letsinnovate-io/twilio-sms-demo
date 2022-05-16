<?php
define('SRC_PATH',dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('VENDOR_PATH', __DIR__ . '/../vendor');

require_once VENDOR_PATH.'/autoload.php';
require SRC_PATH . "SmsDemo.php";

SmsDemo::sendText();