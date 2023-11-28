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

class Actor {
    public $name;
    public $last_name;
    public $films;
}

$actors = new Actor();
$actors-> name = 'johhny';
$actors-> last_name = 'debb';
$actors-> films = [
    'film_di_johnny:'=> [
        'pirati dei caraibi ',
        'pirati dei caraibi 2 ',
        'pirati dei caraibi 3',
        'pirati dei caraibi 4',
        'pirati dei caraibi 5 '
    ]
];


foreach($actors->films as $key =>  $film){
    echo($key. '<br>');

    foreach($film as $singolo_film){
        $singolo = $singolo_film;
        echo($singolo). '<br>';
        }
}

$actors2 = new Actor();
$actors2->name = 'leonardo ';
$actors2-> last_name = 'dicaprio';
$actors2-> films = ['the departed', 'shuttle island', 'titanic', 'inception'];

foreach ($actors2->films as $value) {
    var_dump($value);
    switch($value){
        case($value === 'the departed');
        var_dump('rating :  8');
    }switch($value){
        case($value === 'titanic');
        var_dump('rating : 6');
    }switch($value){
        case($value === 'inception');
        var_dump('rating : 9');
    }
}

//prova comadndo protected

class Calciatore {
    public $name; 
    public $last_name;
    protected $palla;

    public function __construct($palla){
        $this->palla = $palla;
    }

	public function get_ball(){
       var_dump('il numero dei palloni d oro è di'. ' '. $this->palla);
    }
}

$calciatore = new Calciatore(77);
$calciatore-> name = ' cristiano';
$calciatore->last_name = 'ronaldo ';
$calciatore->get_ball();


foreach($calciatore as $persona){
    var_dump($persona);
}


?>