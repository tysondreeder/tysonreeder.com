<!DOCTYPE html>
<?php $page="about"; ?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i" rel="stylesheet">
  <link rel="stylesheet" href="src/style.css">
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
</head>

<body id="about-me">
  <header>
    <?php include("includes/header.php"); ?>
  </header>

  <section class="Container">
    <h1 class="page-title">About Me</h1>
    <div class="Grid">
        <div class="content">
            <h2>Champion the User.</h2>
            <p>My name is Tyson Reeder. It's a pleasure to meet you!</p>
              <p> I work hard to create intuitive and enjoyable digital experiences with the user always at the forefront. I believe it is import to understand business goals and user needs, and find a solution that appeases both. Through research, design and testing we can bring stunning solutions and experiences to users.</p>
        </div>
        <div class="image">
            <img src="images/tyson-reeder.jpg"  />
        </div>
    </div>
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