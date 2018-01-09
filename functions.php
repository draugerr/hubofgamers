<?php

include_once 'dbcontroller.php';

function getDBConnection(){
	$host="localhost";
	$user="root";
	$password="";
	$dbname="hog_dev";
	$port=3306;
	$socket="";
	
	$dbConn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
	
	return $dbConn;
}

function closeDBConnection(){
	mysqli_close($dbConn);
	//$dbConn->close();	
}

function translate($lang, $text_key) {
	echo $text_key;
}

function isLoggedIn(){
	
	
	
	//if(isset($_COOKIE['loggedInToken']))
	//{
		$loggedInToken = 'b5b41fac0361d157d9673ecb926af5ae'; //htmlspecialchars($_COOKIE['loggedInToken']); //token is stored in md5
		$tokenExists = mysqli_query(getDBConnection(), 'SELECT * FROM hog_dev.gamer t WHERE t.loggedin_token = $loggedInToken');
		if($tokenExists)
		{ 
			$row = mysqli_fetch_assoc($tokenExists);
			echo $row['profile_name']; 
			return $loggedin= 'T';
		}
		else
		{
			echo 'FALSE';
			return $loggedin = 'F';
		}
		mysqli_free_result($tokenExists);
		closeDBConnection();
	//}
}

function rememberMeUser(){
	if(isset($_COOKIE['rememberMeUser']))
	{
		$rememberMeUser = htmlspecialchars($_COOKIE['rememberMeUser']);
		if($rememberMeExists)
		{
			return $rememberMeUser;
		}
		else
		{
			return $rememberMeUser = false;
		}
	}
}

function logout(){
	;//ToDo: fill in
}


?>