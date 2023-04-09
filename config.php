<?php

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "itemku";

// create connection
$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

// check connection
if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
}else{
    /*echo "<h1>Connected Successfully</h1>";*/
}


?>