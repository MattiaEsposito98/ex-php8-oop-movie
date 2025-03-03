<?php
require_once('./db.php');
include_once './Traits/traits.php';
class Movie
{
  public $title;
  public $year;
  public $vote;
  public $genre;
  use vietatoAiMinori;

  function __construct($title, $year, $vote, array|string $genre, $pegi)
  {
    $this->title = $title;
    $this->year = $year;
    $this->vote = $vote;
    $this->genre = is_array($genre) ? $genre : [$genre];
    $this->setPegi($pegi);
    $this->pegi = $pegi;
  }

  public function isGood()
  {
    if (!is_int($this->vote)) {
      throw new Exception("Inserisci un numero per il voto");
    }

    return $this->vote > 3  ? 'è un ottimo film' : 'film mediocre';
  }
}


// echo $avengers->isGood();

// var_dump($movies[0]);
// var_dump($movies[1]);
// var_dump($movies[2]);
