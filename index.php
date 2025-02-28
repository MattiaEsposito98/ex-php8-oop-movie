<?php
class Movie
{
  public $title;
  public $year;
  public $vote;
  public $genre;

  function __construct($title, $year, $vote, array|string $genre)
  {
    $this->title = $title;
    $this->year = $year;
    $this->vote = $vote;
    $this->genre = is_array($genre) ? $genre : [$genre];
  }

  public function isGood()
  {
    if (!is_int($this->vote)) {
      throw new Exception("Inserisci un numero per il voto");
    }

    return $this->vote > 3  ? 'è un ottimo film' : 'film mediocre';
  }
}

$avengers = new Movie('Infinite war', 2018, 5, ['fantasy', 'avventura', 'saga']);

$harry_potter = new Movie('I doni della morte', 2010, 4, 'fantasy');
// echo $avengers->isGood();

var_dump($harry_potter);
var_dump($avengers);
