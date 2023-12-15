<?php 
	require_once(__DIR__ . '/../templates/myheader.php');
    require_once(__DIR__ . '/../templates/footer.php');
	$header = generateNav('co-op');
    $footer = generateFooter('co-op');
?>

<title>Snake Game</title>

<?php
	echo $header; 
?>

<body class="has-background-primary-light">
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-1">Javacsript Snake game</h1>
        <p class="subtitle is-3">currently WIP.</p>

      </div>
    </div>
  </section>
</body>

<?php
    echo $footer;
?>