<?php

class Production {
    public $title;
    public $language;
    public $rating;
    public $director;
    public $time_film ;
    public $movies;

    function __construct($_director){
        $this->director = $_director;
    }

    function SetDuration($time){
        if($time > 120 && intval($time)){
            $this->time_film = 'il film  dura tanto ';
        }elseif ($time < 120 && intval($time)) {
            $this->time_film = 'il film  dura poco ';
        }else{
            'devi digitare un numero come parametro nella funzione ';
        }
    }
}

$films = new Production('tarantino');
$films-> title = 'pulp fiction';
$films->language = 'english';
$films->SetDuration(60);
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

foreach($films as $key => $film){
    //echo ($film). '<br>';
    var_dump($film, );
   
}

/*
foreach ($tarantin_movie as $movie ){
        var_dump($movie);
    }

    $tarantin_movie = $films->movies;
*/

?>
