<?php

require 'application/Medium.php';

$medium = new Medium;
$article = $_GET['story'];

$article = $medium->story($article);
?>



<section id="sticky-navigation" class="Container post">
<a href="/" class="back-link-container">
  <span class="arrow">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129">
    <g>
      <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
    </g>
    </svg>
  </span>
  <span class="back-link">Back to All Work</span></a>
<h1 class="page-title"><?php echo $article['title']; ?></h1>
<?php echo $article['article']; ?>
  </section>
  <section class="other-work">
      <?php include("includes/other-work.php"); ?>
  </section>