<?php

class Production {
    public $title;
    public $language;
    public $rating;
    public $director;
    public $time_film ;
    public $movies;

    function __construct($_director, ){
        $this->director = $_director; 
    }

    function SetDuration($time){
        if($time > 140 && intval($time)){
            $this->time_film = 'il film  dura tanto ';
        }elseif ($time <= 140 && intval($time)) {
            $this->time_film = 'il film  dura poco ';
        }else{
            'devi digitare un numero come parametro nella funzione ';
        }
    }
}

$films = new Production('tarantino');
$films-> title = 'pulp fiction';
$films->language = 'english';
$films->SetDuration(150);
$films ->rating= '8';
$films->movies = [
    'altri film' => [
        'bastardi senza gloria',
        'c era una volta a hoolywood',
        'django',
        'kill bill',
        'the hateful eight',
    ]
];

foreach($films as $film){
    //echo ($film). '<br>';
    var_dump($film);
}

/*
foreach ($tarantin_movie as $movie ){
        var_dump($movie);
    }

    $tarantin_movie = $films->movies;
*/
$films2 = new Production ('tarantino');
$films2-> title = 'Django';
$films2->language = 'english';
$films2->SetDuration(165);
$films2 ->rating= '9';
$films2->movies = [
    'altri film' => [
        'bastardi senza gloria',
        'c era una volta a hoolywood',
        'pulp fiction',
        'kill bill',
        'the hateful eight',
    ]
];
foreach($films2 as $film){
    //echo ($film). '<br>';
    var_dump($film);
}


$films3 = new Production ('tarantino');
$films3-> title = 'Grindhouse';
$films3->language = 'english';
$films3->SetDuration(127);
$films3 ->rating= '9';
$films3->movies = [
    'altri film' => [
        'bastardi senza gloria',
        'c era una volta a hoolywood',
        'pulp fiction',
        'kill bill',
        'the hateful eight',
        'django',
    ]
];
foreach($films3 as $film){
    //echo ($film). '<br>';
    var_dump($film);
}



?>
