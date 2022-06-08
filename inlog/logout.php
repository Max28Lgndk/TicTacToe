<?php
// start de sessie
session_start();

// gooi alle sessie variable weg
$_SESSION = array();

// eindig de sessie
session_destroy();

// terug naar homepage
header("location: login.php");
exit;
?>