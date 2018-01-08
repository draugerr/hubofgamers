<?php

$host="localhost";
$user="root";
$password="";
$dbname="hog_dev";
$port=3306;
$socket="";

$dbConn = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());

//$dbConn->close();


?>