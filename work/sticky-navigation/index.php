<!DOCTYPE html>
<? $page="work";?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900i" rel="stylesheet">
  <link rel="stylesheet" href="/src/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes" />
</head>

<body id="sticky-navigation" class="post">

    <?php include("../../includes/header.php"); ?>


  <section class="Container">
    <a href="/" class="back-link-container">
      <span class="arrow">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129">
        <g>
          <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
        </g>
        </svg>
      </span>
      <span class="back-link">Back to All Work</a>
    <h1 class="page-title">MutualofOmaha.com Sticky Navigation Enhancement</h1>

    <div class="content-container">
      <p>When the redesigned Mutualofomaha.com was initially launched there were no sticky navigation elements. Below is a GIF that recreates what the site looked like when it was released in May of 2017.</p>
    </div>

    <div class="gif-container">
      <img src="/images/no-sticky-nav.gif" />
    </div>

    <div class="content-container">
      <p>We decided to tackle this problem in phases. First we made the main navigation sticky when the user scrolled.</p>
    </div>

    <div class="gif-container">
        <img src="/images/sticky-global-nav.gif" />
    </div>

    <div class="content-container">
      <p>But I wanted to spend some time on the secondary navigation. I felt we needed to also make the subnav stick to the top of the page to allow the user to quickly navigate between sections of the product. I started working on how we could accomplish this. Some things I had to keep in mind:</p>

      <p>
          <ul>
              <li>The contact information on the right would need to remain prominent and easy to access.</li>
              <li>Sometimes we use this same area to the right to show the agent&#039;s photo and contact information. So the new design would need to support this functionality.</li>
              <li>I wanted to avoid hiding navigation items as much as possible.</li>
          </ul>
      </p>

      <p>Some of my initial ideas:</p>
      </div>

      <div class="image-container">
        <img src="/images/sticky-nav-designs.png" />
        <p>Exploration for the sticky subnav.</p>
      </div>

      <div class="content-container">
        <p>While I liked the idea of keeping the contact buttons exposed on the mobile device I knew we would run into a problem because of state regulation. In some states we are not allowed to call our agents <q>agents</q>. So there was a potential for <q>Contact an Authorized Representative</q> to be the CTA so we would run out of real estate quickly.</p>
        <p>Ultimately I came up with the following design and worked with a developer to get it built.</p>
        <p>You can see the GIF&#039;s below. Or see
          it live on
          <a href="http://www.mutualofomaha.com/life-insurance" target="_blank" title="Visit the Mutual of Omaha.com Life Insurance Page">www.mutualofomaha.com/life-insurance</a>
        </p>
      </div>

      <div class="gif-container no-stretch">
          <img src="/images/sticky-nav-solution-desktop.gif" />
          <p>Desktop</p>
      </div>
  
      <div class="gif-container no-stretch">
          <img src="/images/sticky-nav-solution-tablet.gif" />
          <p>Tablet</p>
      </div>

      <div class="gif-container no-stretch">
          <img src="/images/sticky-nav-solution-phone.gif" />
          <p>Phone</p>
      </div>
    </div>

    <div class="content-container">
    <h2>My Role on this project</h2>
    <p>Visual Designer</p>
  </div>

  </section>
  <section class="other-work">
      <?php include("../../includes/other-work-sticky-nav.php"); ?>
  </section>

  <footer>
    <?php include("../../includes/footer.php"); ?>
  </footer>

  <script>
      <?php include("../../includes/live-reload.php"); ?>
      <?php include("includes/analytics.php"); ?>
  </script>

</body>

</html>