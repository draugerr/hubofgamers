<!DOCTYPE html>
<html lang="en">
<?php include_once 'session.php'?>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hub Of Gamers</title>
<style><?php include 'default.css'?></style>
</head>
<body>
  <header>
    <h1><?php include 'header.php'?></h1>
  </header>
  <nav>
    < nav >
    <ul>
      <li>a</li>
      <li>b</li>
      <li>c</li>
    </ul>
  </nav>
  <section>
    <?php translate($lang, ' deneme' . $ifclause)?>
    <?php isLoggedIn()?>
  </section>
  <aside>
    ADVERTISEMENT
  </aside>
  <footer>
    <?php include 'footer.php'?>
  </footer>
</body>
</html>