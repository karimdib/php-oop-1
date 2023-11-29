<?php

require_once __DIR__ .  '/../second.php';

class Serie extends Production{
}

$series = new Serie('Scrubs','english',8,'Bill Lawrence', 150);
$series->SetDuration(150);

foreach($series as $serie){
    echo($serie. '<br>');
}