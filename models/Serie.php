<?php

require_once __DIR__ .  '/../second.php';

class Serie extends Production{
    public $season = '5 stagione';
    function getSeason(){
        return parent:: $this->season;
    }
}


$series = new Serie('Scrubs','english',8,'Bill Lawrence', 150, 8);
$series->SetDuration(150);

