<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'test';

$connect = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($connect->connect_error) {
    echo 'Errno: ' . $connect->connect_errno;
    echo '<br>';
    echo 'Error: ' . $connect->connect_error;
    exit();
}

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: ' . $connect->host_info;
echo '<br>';
echo 'Protocol version: ' . $connect->protocol_version;
