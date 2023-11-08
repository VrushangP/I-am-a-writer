<?php 
	require_once(__DIR__ . '/templates/myheader.php');
    require_once(__DIR__ . '/templates/footer.php');
	$header = generateNav('content');
    $footer = generateFooter('content');
?>

<title>About Me</title>

<?php
	echo $header; 
?>

<body class="has-background-light">
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered construction-bg-image">
        <h1 class="title is-1">Page is Under Construction</h1>
        <p class="subtitle is-3">We're working on it and will be back soon.</p>
        <div class='column'>
            <div class="column is-four-fifths is-centered section">
            <div class="box section is-large construction-img ">
            </div>
        </div>
      </div>
    </div>
  </section>
</body>

<?php
    echo $footer;
?>