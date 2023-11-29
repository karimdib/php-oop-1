<?php

require_once __DIR__ . '/../second.php';

class Movie extends Production{
    public $profit;
}

$movies = new Movie('Django','english',8,'Tarantino');
$movies->SetDuration(150);


foreach($movies as $movie){
    echo($movie. '<br>');
}