<?php 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('LIVE_URL', $_ENV['LIVE_URL']);
define('TEST_URL', $_ENV['TEST_URL']);
define('TEST_SECRET_KEY', $_ENV['TEST_SECRET_KEY']);