<!DOCTYPE html>
<?php $page = 'work'; ?>
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
  <section>
   <?php if (isset($_GET['story'])) {
     require 'includes/article.php';
   } else {
     require 'includes/home.php';
   } ?>
  </section>

  <footer>
    <p>Design and Front-End by Tyson Reeder. Development help from <a href="https://www.linkedin.com/in/michaelbautista" target="_blank" title="Visit Mike Bautista's Website">Mike Bautista</a>.</p>
  </footer>

  <script>
    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
      ':35729/livereload.js?snipver=1"></' + 'script>');
  </script>

</body>

</html>