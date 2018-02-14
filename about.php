<!DOCTYPE html>
<? $page="about";?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i" rel="stylesheet">
  <link rel="stylesheet" href="src/style.css">
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
</head>

<body id="about-me">
    <?php include("includes/header.php"); ?>

  <section class="Container">
    <h1 class="page-title">About Me</h1>
    <div class="Grid">
        <div class="content">
            <h2>Champion the User.</h2>
            <p>I am a UX Designer/Visual Designer living in Omaha, NE. I work hard to create intuitive and enjoyable digital experiences with the user always at the forefront. I believe it is important to understand business goals and user needs, and find a solution that appeases both. Through research, design and testing we can bring stunning solutions and experiences to users.</p>
        </div>
        <div class="image">
            <img src="images/tyson-reeder.jpg"  />
        </div>
    </div>
  </section>

  <footer>
    <?php include("includes/footer.php"); ?>
  </footer>

  <script>
      <?php include("includes/live-reload.php"); ?>
      <?php include("includes/analytics.php"); ?>
  </script>

</body>

</html>