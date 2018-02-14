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
    <h1 class="page-title">Medicare Advice Center</h1>

    <div class="content-container">
      <p>In Q3 I heard about a Senior Health initiative to create an <q>Advice Engine</q> for Medicare. The project was an enterprise initiative to give our customers unbiased information about Medicare and was one of the milestones that needed to be hit for 2017.</p>

      <p>The company had partnered with Primacy, a digital agency, to help with the concept testing and the initial design. Since the tool would ultimately live inside mutualofomaha.com I was put on the project to oversee the work.</p>

      <p>Primacy is excellent to work with. We had working sessions to flush out concepts and they would contact me when needed via Slack. They worked like an extension of our team.</p>

      <p>The design was coming together.</p>
    </div>

    <div class="image-container">
      <img src="/images/advice-center-design.png" />
      <p>Design for the Medicare Advice Center</p>
    </div>

    <div class="content-container">
    <p>As the design was being built we reached out to the Customer Insights group to test some naming concepts with customers. We tested many names, but ultimately the name that matched up the most with what we were trying to build was the <q>Advice Center</q>. So the <q>Medicare Advice Center</q> was born.</p>
    <p>It was also determined that Primacy would develop the <q>Medicare Advice Center</q> and that we would help implement it into mutualofomaha.com. So, a UX Developer on my team joined the project.</p>
    <p>We worked closely with Primacy and integrated their code into our environment piece by piece.</p>
    <p>I helped with content population and any sort of visual polish that was necessary. As well as, helping squash as many bugs as I could.</p>
    <p>I also, took on the task of filing the Advice Center with the states and handled objections as they arose. The goal was to be live in as many states as possible by the end of the year. And honestly, we thought we would be lucky to have 10 states approve. <strong>I am happy to say, we launched the Advice Center in 37 states on December 18th 2017!</strong></p>
    <p>It is out in the wild now and we are planning to do some marketing to help drive more traffic to the tool. Today we are sitting at about 30 users a day without any promotion.</p>
    <p>We will be running usability tests soon on the production site to see what areas are tripping up our customers and what content we are missing. This was just the first phase and it will be exciting to see how the Medicare Advice Center evolves.</p>
    <p><a href="https://www.mutualofomaha.com/advice/advice-center/medicare-questions" target="_blank" title="Visit the Mutual of Omaha Medicare Advice Center">Visit the Medicare Advice Center</a></p>
  </div>

    <div class="content-container">
    <h2>My Roles on this project</h2>
    <p>Visual Designer, Interaction Designer, Front-End Developer (HTML, CSS, JSON).</p>
  </div>

  </section>
  <section class="other-work">
      <?php include("../../includes/other-work-advice-center.php"); ?>
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