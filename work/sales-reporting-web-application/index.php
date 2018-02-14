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
    <h1 class="page-title">Sales Reporting Web Application</h1>

    <div class="content-container">
      <p>One of my early projects at Mutual of Omaha was working on a web app that allowed our sales professionals outside the office to access data, that was previously unattainable while on the road.</p>

      <p>A proof of concept had been built by our IT department and deployed to the sales distributions with one major problem…No one was using it.</p>
    </div>

    <div class="image-container half-size">
      <img src="/images/sales-reporting-prototype.png" />
      <p>The proof of concept that was released looked like this. It was thought that this would be a site that housed a lot of important sales information.</p>
    </div>

    <div class="content-container">
      <p>Their plan was to revisit the proof of concept and develop a more in-depth reporting tool inside of it.</p>

      <p>When the team came to my team I was presented with these ideas of how the tool could work. They told me that just needed me to make it look nicer and work on the UI.</p>
    </div>

    <div class="image-container no-stretch">
        <img src="/images/is-wireframe.jpeg" />
        <p>A screen of what they thought should be built.</p>
    </div>

    <div class="content-container">
      <p>Once I learned that the real problem was that they had a tool out there that wasn&#039;t being utilized I knew I needed to educate the team on the importance of user interviews and usability testing. The product owner saw the value in this work and how it would help him create a useful tool. I joined the team and played the roles of Visual Designer, Interaction Designer and Front-End Developer.</p>

      <p>We conducted stakeholder and user interviews. From there we developed a persona and scenario to work towards.</p>

      <p>A few key things emerged as very important for both stakeholders and users</p>
      <p>
        <ul>
            <li>The tool had to house up-to-date and reliable information. This was very important because in the past users found it hard to trust the data that was being distributed to them.</li>
            <li>The tool needed to be mobile friendly.</li>
          <li>It needed to help make quick, informed business decisions.</li>
          <li>The tool needed to get them to what they wanted to quick.</li>
        </ul>
      </p>
      <h2>The polished design</h2>
      <p>We tested some rough prototypes with the user which helped polish our design idea. I took this information and designed the interface.</p>

      <p>I wanted to give the user a snapshot of how things were running and let them dive in from there. I hoped to show goals in a very visual way to let them quickly know where they stood. Also I felt it was very important for them to understand the time period of the data.</p>
      </div>

      <div class="image-container  half-size">
        <img src="/images/sales-app-design.png" />
        <p>Exploration for the sticky subnav.</p>
      </div>

      <div class="content-container">
        <p><i>Release 1&ndash;2 happened before I was a part of the project</i></p>

        <h2>Release 2</h2>
        <p>Since I was brought on later rather than earlier, a lot of the database structure had already been built. So I did what I could to implement the initial design in the short time frame.</p>

        <p>The user could pick between a few dashboards to see high level information pertaining to that constraint. From there they could drill down into the hierarchy of information on the right half of the screen.</p>
      </div>

      <div class="image-container">
          <img src="/images/release-2-design.png" />
      </div>
    </div>

    <div class="content-container">
      <h2>Release 2.1</h2>
      <p>Release 2 was a good first stab at getting the users the information they needed, but it was tedious to navigate the data. With Release 2.1 we added the ability to filter the vast amount of data to the things they wanted to see.</p>
    </div>

    <div class="image-container">
          <img src="/images/release-2-1-filter-design.png" />
      </div>
    </div>

    <div class="content-container">
      <p>The user could Filter, Exclude and Compare data on the different reports.</p>
    </div>

    <div class="image-container">
          <img src="/images/release-2-1-breakdown.png" />
      </div>
    </div>

    <div class="content-container">
      <h2>Release 3</h2>
      <p>From testing it became very apparent that the idea of global filters vs section filters was not understood by the users. With this release we removed this confusion and created one filter button, something I had suggested at the beginning of the project. The name &ldquo;compare&rdquo; did not seem to resonate with the users so I renamed it to &ldquo;Breakdown Numbers&rdquo; a phrase that many had said during our testing. I continued to polish the design and test with users. We also broke this functionality out into its own button.</p>
    </div>

    <div class="image-container">
          <img src="/images/release-2-1-global-filter.png" />
      </div>
    </div>

    <div class="content-container">
      <h2>Release 3.1</h2>
      <p>Our next release added the ability to edit reports, add new role reports and restructured the way we display our data.</p>
      <p>I tested the latest release with our users and there was a lot of excitement around it. We learned that, while we gave them tools to do what they needed to in previous releases, they would have to invest some time and play around with which filters to add and how they should manipulate the data. This was something the majority would not do. So we adjusted.</p>
      <p>We talked with some key users to learn what is the data that can help them do their job better. There was a lot of overlap between people and roles so we started building steps to quickly get them to this data.</p>
      <p>We created a set of reports with the focus of seeing how a broker is running with Mutual of Omaha.</p>
      <p>Here is that interaction:</p>
    </div>

    <div class="image-container">
          <img src="/images/broker-overview.jpeg" />
          <p>After selecting the <q>Broker Overview</q> we just need to know the broker they are interested in learning more about</p>
      </div>
    </div>

    <div class="image-container">
          <img src="/images/multiple-filters.jpeg" />
          <p>They are then presented with a screen that gives them a high level understanding of the broker</p>
      </div>
    </div>

    <div class="image-container">
          <img src="/images/filter-expanded.jpeg" />
          <p>From there they can drilldown into the information and we show them what they are looking for at each stage.</p>
      </div>
    </div>

    <div class="content-container">
      <p>By talking with the users we were able to understand what they need when they need it. The broker overview was created because many times they just want to be able to see how a specific broker is running. Instead of making them think of how to filter down to this data we just ask them one question and we handle the rest. These reports along with saving of customized reports are some of the most valuable additions we have made to the application for our users.</p>
      <p>Also, here is a GIF showing how the application is responsive.</p>
    </div>

    <div class="gif-container no-stretch">
          <img src="/images/sales-responsive.gif" />
      </div>
    </div>

    <div class="content-container">
      <h2>My Roles on this project</h2>
      <p>Visual Designer, Interaction Designer, Front-End Developer (HTML, CSS, Angular manipulation in HTML) and Copywriter (for the communication the copy was started by me).</p>

      <p><i>At the beginning of the project I had two different Interaction Designers helping, but they got pulled off the project..</i></p>
    </div>

  </section>
  <section class="other-work">
      <?php include("../../includes/other-work-sales-web-app.php"); ?>
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