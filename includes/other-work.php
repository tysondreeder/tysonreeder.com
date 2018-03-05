<?php

$articles = $medium->articles();

$path = $_SERVER['REQUEST_URI'];
?>

<h2 class="other-work-title">Other Case Studies</h2>
<div class="Grid">
  <?php foreach ($articles as $key => $value) { 
      if (strstr($path, $value['link']) === false) {
    ?>
    <div class="Card">
      <div class="content">
        <h2><?php echo $value['title']; ?></h2>
        <p><?php echo $value['description']; ?></p>
        <div class="cta-container">
          <a href="/work/<?php echo $value['link']; ?>" title="Read the <?php echo $value['title']; ?> Case Study" class="Button">Read the Case Study</a>
        </div>
      </div>
    </div>
  <?php 
    }
} ?>
</div>