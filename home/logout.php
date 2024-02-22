<?php
require 'config.php';
session_start();
session_unset();
session_destroy();
header("Location:first.php");
// echo "you are logged out";

?>