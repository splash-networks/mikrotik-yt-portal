<?php

session_start();

//if (!(isset($_SESSION['mac']) or isset($_POST['mac']))) {
//    exit('This page cannot be accessed directly. It only works when using a hotspot.');
//}

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$business_name = $_SERVER['BUSINESS_NAME'];