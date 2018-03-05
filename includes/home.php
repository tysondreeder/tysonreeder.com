<?php

require __DIR__ . '/../application/Medium.php';

$medium = new Medium();
$articles = $medium->articles();
?>


<section id="my-work" class="Container">
 <h1 class="page-title">My Work</h1>
	<div class="Grid">
	  <?php foreach ($articles as $key => $value) { ?>
		  <div class="Card">
		    <div class="content">
		      <h2><?php echo $value['title']; ?></h2>
		      <p><?php echo $value['description']; ?></p>
		      <div class="cta-container">
		        <a href="/work/<?php echo $value['link']; ?>" title="Read the <?php echo $value['title']; ?> Case Study" class="Button">Read the Case Study</a>
		      </div>
		    </div>
		  </div>
	  <?php } ?>
	</div>
</section>