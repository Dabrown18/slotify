<?php
ob_start();
session_start();

$timezone = date_default_timezone_set("America/Los_Angeles");

// Database connection
$host     = "localhost";
$username = "root";
$password = "root";
$db       = "slotify";
$socket   = 8889;

$con = mysqli_connect($host, $username, $password, $db, $socket);

if(mysqli_connect_errno()) {
	echo "Failed to connect " . mysqli_connect_errno();
}

?>