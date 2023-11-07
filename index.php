<?php

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Image.php";
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/TvSerie.php";
require_once __DIR__ . "/db/db.php";

var_dump($productions);

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
  <div class="container d-flex my-5">
    
  <?php foreach($movies as $movie): ?>

    <div class="card m-5" style="width: 18rem;">
      <img src="img/<?php echo $movie->immagineCopertina->percorsoImmagine ?? 'null.jpg' ?>" class="card-img-top" alt="<?php echo $movie->immagineCopertina->nomeImmagine ?? '' ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie->nome ?></h5>
        <p class="card-text"><?php echo implode('-',$movie->genere)?></p>
        <p class="card-text"><?php echo implode('-',$movie->attori)?></p>
        <p class="card-text"><?php echo $movie->durata ?></p>
      </div>
    </div>
<?php endforeach; ?>
  </div>
  
</body>
</html>