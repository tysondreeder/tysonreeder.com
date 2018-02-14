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
    <h1 class="page-title">Mutual of Omaha Digital Design System</h1>

    <div class="content-container">
      <p>Something that my team has maintained as a passion project is a Digital Style Guide which we referred to as the Design Guide.</p>
      <p>As the amount of digital properties expands at Mutual of Omaha it became very apparent that we needed more than just a Bootstrap system. From versions 1-3.1 we had a list of components and code examples, but this left the door too open and we noticed inconsistencies in what was being created using it. We decided we needed something more going forward. We needed a Digital Design System.</p>
      <p>In late 2017 a group was put together to work on building out the Digital Design System. The team consisted of a Product Owner, a lead designer that was also an Interaction Designer, two developers and two visual designers. I was one of the visual designers.</p>
      <p>The main goal of the Digital Design System was to create a tool for developers and designers to be able to reference when designing and building that would help keep things more consistent and match the new design standards set in place with MutualofOmaha.com.</p>
      <p>At this time the Design Guide was in version 3.1.</p>
    </div>

    <div class="gif-container">
      <img src="/images/design-guide-3-1.gif" />
    </div>

    <div class="content-container">
      <p>We had a few goals with the new system:</p>
      <ul>
          <li>More documentation. We wanted to make it easier for developers to make more informed design decisions when a designer couldn&#039;t be dedicated to a project.</li>
          <li>Less layers of navigation to get to what you need. This was something we heard from developers and something we had experienced. It was sometimes hard to find things on the current site.</li>
          <li>Help educate about ADA requirements and provide accessible components to give partners a better start.</li>
          <li>Provide templates to get projects jump started.</li>
      </ul>
      <p>We started by auditing many of our larger projects to see what was out in the wild.</p>
    </div>

    <div class="image-container">
        <img src="/images/button-audit.png" />
        <p>Button UI Audit</p>
    </div>

    <div class="content-container">
      <p>This was a great exercise because it showed us how things were being used and how many variations were out there.</p>
      <p>After we had done the audits we started working our way through the list of items we needed and what we could get done for the MVP.</p>
      <p>Around this time I became very busy with <a href="../advice-center" title="View the Case Study for the Medicare Advice Center">another project</a> and wasn&#039;t able to help much other than answer questions and guide some decisions.</p>
      <p>After my project wrapped up I jumped back on the Digital Design System Team to help them build out the site.</p>
      <p>I worked on the layout of the site and helped get sections built out.</p>
      <p>You can <a href="http://design.mutualofomaha.com" target="_blank" title="Visit the Mutual of Omaha Digital Design System">see the Digital Design System here</a>.</p>
      <p>Thankfully, a team will be dedicated to maintaining and evolving the Digital Design System. So this is only the beginning.</p>

    <div class="content-container">
    <h2>My Roles on this project</h2>
    <p>Visual Designer and pseudo-Copywriter (helped write some of the documentation).</p>
  </div>
  </section>
  <section class="other-work">
      <?php include("../../includes/other-work-dds.php"); ?>
      <?php include("includes/analytics.php"); ?>
  </section>

  <footer>
    <?php include("../../includes/footer.php"); ?>
  </footer>
  
  <script>
      <?php include("../../includes/live-reload.php"); ?>
  </script>

</body>

</html>