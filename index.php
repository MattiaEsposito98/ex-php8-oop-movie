<?php
require_once './db.php';
require_once './Traits/traits.php';
require_once './Models/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center">LISTA FILMS</h1>
  <div class="container">
    <div class="cards-container d-flex flex-column gap-5">
      <?php foreach ($movies as $movie) { ?>
        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Titolo: <?php echo $movie->title; ?></li>
            <li class="list-group-item">Anno: <?php echo $movie->year; ?></li>
            <li class="list-group-item">Voto: <?php echo $movie->vote; ?></li>
            <li class="list-group-item">Genere:
              <?php
              foreach ($movie->genre as $genere) {
                echo $genere . " ";
              }
              ?>
            </li>
            <p class="list-group-item"> <?php echo $movie->isForChild(); ?></p>
          </ul>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>