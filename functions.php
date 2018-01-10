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

function confirmLogin($email,$password)
{
	$md5pass = md5($password);
	
	$isLoggedIn = mysqli_query(getDBConnection(), 'SELECT * FROM hog_dev.gamer t WHERE t.email = $email and t.password = $password');
	if($isLoggedIn)
	{ 
		$row = mysqli_fetch_assoc($isLoggedIn);
		echo $row['name']; 
		mysqli_free_result($isLoggedIn);
		closeDBConnection();
		return true;
	}
	else
	{
		mysqli_free_result($isLoggedIn);
		closeDBConnection();
		echo 'FALSE';
		return false;
	}
}

function createSessions($username,$password)
{
	//Add additional member to Session array as per requirement
	session_register();

	$_SESSION["hogemail"] = $username;
	$_SESSION["hogpassword"] = md5($password);

	setcookie("hogemail", $_SESSION['hogemail'], time()+60*60*24*100, "/");
	if(isset($_POST['rememberMe']))
	{
		//Add additional member to cookie array as per requirement
		setcookie("hogpassword", $_SESSION['hogpassword'], time()+60*60*24*100, "/");
		return;
	}
}

function clearSessionsCookies()
{
	unset($_SESSION['hogemail']);
	unset($_SESSION['hogpassword']);
	 
	session_unset();
	session_destroy();

	setcookie("hogemail", "",time()-60*60*24*100, "/");
	setcookie("hogpassword", "",time()-60*60*24*100, "/");
}

function checkLoggedIn()
{
	if(isset($_SESSION['hogemail']) AND isset($_SESSION['hogpassword']))
		return true;
		elseif(isset($_COOKIE['hogemail']) && isset($_COOKIE['hogpassword']))
		{
			if(confirmLogin($_COOKIE['hogemail'],$_COOKIE['hogpassword']))
			{
				createsSessions($_COOKIE['hogemail'],$_COOKIE['hogpassword']);
				return true;
			}
			else
			{
				clearSessionsCookies();
				return false;
			}
		}
		else
			return false;
}


?>