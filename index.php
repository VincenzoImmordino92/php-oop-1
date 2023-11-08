<?php

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/traits/PublisherYear.php";
require_once __DIR__ . "/models/Image.php";
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/TvSerie.php";
require_once __DIR__ . "/db/db.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
  <h1 class="text-center my-5">Films & SeriesTV</h1>
  <div class="container my-5">
    <div class="row">

      <?php foreach($productions as $production): ?>
        <div class="col-auto p-3">
          <div class="card h-100 m-auto" style="width: 18rem;">
            <img src="img/<?php echo $production->cover_image->percorsoImmagine ?? 'null.jpg' ?>" class="card-img-top object-fit-cover" style="aspect-ratio: 2/3;" alt="<?php echo $production->cover_image->nomeImmagine ?? '' ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $production->name ?></h5>
              <p class="<?= get_class($production) === 'Movie' ? 'badge text-bg-secondary': 'badge text-bg-dark' ?>"><?= get_class($production) ?></p>
              <p class="card-text"><?php echo implode('-',$production->genre)?></p>
              
              <?php if(isset($production->cast) && (get_class($production) == 'Movie')): ?>
                <p class="card-text"><h6>Cast: <?php echo implode('-',$production->cast)?></h6></p>
                <p class="card-text"><h6>Durata Film: <?php echo $production->running_time ?></h6></p>
                <p class="card-text"><h6>Anno di Pubblicazione: <?php echo $production->getPublisherYear() ?></h6></p>
                
                
              <?php else: ?>
                <p class="card-text"><h6>Anno di produzione: <?php echo $production->aired_from_year ?></h6></p>
                <p class="card-text"><h6>Anno di fine produzine: <?php echo $production->aired_to_year ?></h6></p>
                <p class="card-text"><h6>Numero di Episodi Totali: <?php echo $production->number_of_episodes ?></h6></p>
                <p class="card-text"><h6>Numero di Stagioni: <?php echo $production->number_of_seasons ?></h6></p>
              <?php endif;?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
</body>
</html>