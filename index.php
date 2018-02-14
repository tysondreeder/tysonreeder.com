<!DOCTYPE html>
<? $page="work";?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i" rel="stylesheet">
  <link rel="stylesheet" href="src/style.css">
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
</head>

<body id="my-work">
    <?php include("includes/header.php"); ?>
    <section class="Container">
    <h1 class="page-title">My Work</h1>
    <div class="Grid">
      <div class="Card">
        <div class="content">
          <h2>Mutual of Omaha.com 2017 Redesign</h2>
          <p>The 2017 redesign of Mutual of Omaha.com.</p>
          <div class="cta-container">
            <a href="/work/mutualofomaha.com/" title="Read the Mutual of Omaha.com 2017 Case Study" class="Button">Read the Case Study</a>
          </div>
        </div>
      </div>
      <div class="Card">
        <div class="content">
          <h2>MutualofOmaha.com Sticky Navigation Enhancement</h2>
          <p>Detail about the design decisions that went into the global navigation on Mutualofomaha.com.</p>
          <div class="cta-container">
            <a  href="/work/sticky-navigation/" title="Read the Mutual of Omaha.com Sticky Navigation Case Study" class="Button">Read the Case Study</a>
          </div>
        </div>
      </div>
      <div class="Card">
        <div class="content">
          <h2>Medicare Advice Center</h2>
          <p>The creation of the Medicare Advice Center. A tool that allows anyone to learn more about Medicare and what solutions
            what might be best for them.</p>
          <div class="cta-container">
            <a href="/work/advice-center/" title="Read the Medicare Advice Center Case Study" class="Button">Read the Case Study</a>
          </div>
        </div>
      </div>
      <div class="Card">
        <div class="content">
          <h2>Mutual of Omaha Digital Design System
          </h2>
          <p>A design system to help developers and designers make better design decisions that adhere to the Mutual of Omaha
            brand.</p>
          <div class="cta-container">
            <a href="/work/digital-design-system/" title="Read the Digital Design System Case Study"  class="Button">Read the Case Study</a>
          </div>
        </div>
      </div>
      <div class="Card">
        <div class="content">
          <h2>Sales Reporting Web Application
          </h2>
          <p>A tool that allows sales representatives to access important business metrics while they are on the road.</p>
          <div class="cta-container">
            <a href="/work/sales-reporting-web-application/" title="Read the Sales Reporting Web Application Case Study"  class="Button">Read the Case Study</a>
          </div>
        </div>
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