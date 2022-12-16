<?php
class Movie
{
    public $nome;
    public $anno;
    public $regista;
    public $poster;
    public $duratafilm;



    function __construct($nome, $anno, $regista, $poster, $durataFilm)
    {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->poster = $poster;
        $this->duratafilm = $durataFilm;
    }

    public function durata()
    {
        if ($this->duratafilm > 180) {
            return "Il film  $this->nome dura più di 3 ore ";
        } else {
            return "Il film  $this->nome dura meno di 3 ore ";
        }
    }


}

$movie1 = new Movie('The Avengers', '2012', 'Joss Whedon', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfj-Xxr1DlcuFjU4Nj0ZHm2rmEn0e7BBU0xQZzQedaWODnFw7Q', '149');

echo "Nome del film: $movie1->nome - Anno di uscita: $movie1->anno - Regista: $movie1->regista - Durata del film: $movie1->duratafilm min - ";

echo $movie1->durata();

var_dump($movie1);

$movie2 = new Movie('Avengers Endgame', '2019', 'Anthont Russo', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQBdE2nHH1kK6m3ASymvaj4DNtsFBoNO7yXHbO-k9VYlQQLUx38', '178');

echo "Nome del film: $movie2->nome - Anno di uscita: $movie2->anno - Regista: $movie2->regista - Durata del film: $movie2->duratafilm min - ";

echo $movie2->durata();

var_dump($movie2);

$movie3 = new Movie('Avengers Infinity War', '2018', 'Joe Russo', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSggq-fsPNqJq_SQ94aE0L3BvwthYZ0HpyYC7BpEIyqgbkCmjLg', '188');

echo "Nome del film: $movie3->nome - Anno di uscita: $movie3->anno - Regista: $movie3->regista - Durata del film: $movie3->duratafilm min -";

echo $movie3->durata();

var_dump($movie3);

include_once __DIR__ . './stampa_card/index.php';

?>