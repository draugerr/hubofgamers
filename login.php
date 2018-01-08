<!DOCTYPE HTML>
<html>
<?php include_once 'session.php'?>
<head>
<style></style>
</head>

<body>

<?php

if (!isLoggedIn()) { //ToDo: correct isLoggedIn and remove ! (not)
	header("Location: index.php");
	exit();
}

if (isSet($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rememberme = $_POST['rememberme'];
	
	if ($email&&$password) {
		;
	}
	
}

?>

<form action="login.php" method="POST">

	<?php translate($lang, 'E-mail')?>:
	<input type="text" name="email" required> <p/>
	
	<?php translate($lang, 'Password')?>:
	<input type="password" name="password" required> <p/>
	
	<input type="checkbox" name="rememberme"><?php translate($lang, 'Remember Me')?><br/>
	
	<input type="submit" name="login" value="<?php translate($lang, 'Login')?>">
	
	<a href="index.php"><?php translate($lang, 'Sign Up!')?></a>  <a href="index.php"><?php translate($lang, 'Forgot password?')?></a> 
	

</form>

</body>
</html>