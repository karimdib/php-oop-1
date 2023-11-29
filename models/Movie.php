<?php

require_once __DIR__ . '/../second.php';

class Movie extends Production{
    public $profit= '100 milioni';

    function getProfit(){
        return parent:: $this->profit;
    }

}

$movies = new Movie('Django','english',8,'Tarantino', '100 milioni');
$movies->SetDuration(150);


