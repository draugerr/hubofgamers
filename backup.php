<!DOCTYPE html>
<html>
<head>
<?php include 'session.php'?>
<?php include 'dbcontroller.php'?>
<style>
</style>
</head>

<body>

<?php include 'header.php'?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="lang" value="<?php echo $lang;?>">
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<h2><?php translate($lang, ' deneme' . $ifclause)?></h2>

<?php
?>

</body>
</html>