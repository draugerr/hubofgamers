<?php
include_once 'functions.php';
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
	$lang = $_GET['lang'];
	$ifclause = '';

	// register the session and set the cookie
	$_SESSION['lang'] = $lang;

	setcookie('lang', $lang, time() + (3600 * 24 * 30 * 180));
	
	$ifclause ='_GET';
}
else if(isSet($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
	
	$ifclause ='_SESSION';
}
else if(isSet($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
	
	$ifclause ='_COOKIE';
}
else
{
	$lang = 'en';
	
	$ifclause = '_ELSE';
}

if(isset($_SESSION['gamerId']))
{
	$gamerID = $_SESSION['gamerId'];
}
else if(isset($_SESSION['gamerId']))
{
		
}

?>