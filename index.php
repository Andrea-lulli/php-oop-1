<?php
class Movie {
    public $nome;
    public $anno;
    public $regista;

    public $poster;

    function __construct($nome, $anno , $regista , $poster){
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->poster = $poster;
    }


}

$movie1 = new Movie('The Avengers' , '2012' , 'Joss Whedon' , 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfj-Xxr1DlcuFjU4Nj0ZHm2rmEn0e7BBU0xQZzQedaWODnFw7Q');

echo $movie1->nome;

var_dump($movie1);

$movie2 = new Movie('Avengers Endgame' , '2019' , 'Anthont Russo' , 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQBdE2nHH1kK6m3ASymvaj4DNtsFBoNO7yXHbO-k9VYlQQLUx38');

echo $movie2->nome;

var_dump($movie2);

$movie3 = new Movie('Avengers Infinity War' , '2018' , 'Joe Russo' , 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSggq-fsPNqJq_SQ94aE0L3BvwthYZ0HpyYC7BpEIyqgbkCmjLg');

echo $movie3->nome;

var_dump($movie3);


?>