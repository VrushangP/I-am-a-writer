<?php 
	require_once(__DIR__ . '/../templates/myheader.php');
  require_once(__DIR__ . '/../templates/footer.php');
	$header = generateNav('projects', 'snak');
  $footer = generateFooter('projects');
?>

<title>Snake Game</title>

<?php
	echo $header; 
?>

<body class="has-background-primary-light">
  <section class="hero">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-1">Javacsript Snake game</h1>
        <p class="subtitle is-3">currently WIP.</p>
      </div>
    </div>
    <div class="columns is-mobile hero-body">
      <div class="column is-three-fifths is-offset-one-fifth has-text-centered has-background-primary">
        <button class="button is-primary centered" id='g4snakeman'>Primary Button</button>
        <p id='results'></p>
        <div class="snak-gam">
          <div id="game-board">
          </div>
        </div>

        <!-- <img id="imageElement" src="" alt="Loaded Image"> -->
        <!-- <canvas id="snakemanCanva" width="300" height="200" style="border:1px solid #000000;"></canvas> -->
      </div>
    </div>
  </section>
</body>

<?php
    echo $footer;
?>