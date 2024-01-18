<?php

$host_ip = $_SERVER['HOST_IP'];
$db_user = $_SERVER['DB_USER'];
$db_pass = $_SERVER['DB_PASS'];
$db_name = $_SERVER['DB_NAME'];
$table_name = $_SERVER['TABLE_NAME'];

$con = mysqli_connect($host_ip, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
  echo "Failed to connect to SQL: " . mysqli_connect_error();
}