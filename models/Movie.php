<?php

require_once __DIR__ . '/../second.php';

class Movie extends Production{
    public $profit;

}

$movies = new Movie('Django','english',8,'Tarantino', '100 milioni');
$movies->SetDuration(150);
$movies ->profit = '100 milioni';


foreach($movies as $movie){
    echo($movie. '<br>');
}