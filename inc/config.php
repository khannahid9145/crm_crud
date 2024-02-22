<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crn";
$conn = new mysqli($servername, $username, $password, $dbname);
?>