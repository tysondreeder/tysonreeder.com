
<!DOCTYPE html>
<?$page = "work";?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i" rel="stylesheet">
  <link rel="stylesheet" href="/src/style.css">
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
</head>

<body>
  <header>
<?php include ("includes/header.php");?>
  </header>
   <?php if (isset($_GET['story'])) {
     require 'includes/article.php';
   } else {
     require 'includes/home.php';
   } ?>
  </section>

  <footer>
    <p>Designed and built by Tyson Reeder</p>
  </footer>

  <script>
    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
      ':35729/livereload.js?snipver=1"></' + 'script>');
  </script>

</body>

</html>