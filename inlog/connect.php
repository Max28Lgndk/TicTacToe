<?php
/* database opzoeken */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tictactoe');

/* poging to cennect */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connectie
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>