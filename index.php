<?php

class Production {
    public $title;
    public $language;
    public $rating;
    public $director;
    public $time_film ;

    function __construct($_director){
        $this->director = $_director; 
    }

    function SetTitle($title_film){
        if($title_film === (string)$title_film){
            $this->title = $title_film;
        }elseif ($title_film === (int)$title_film) {
            $this->title = 'il film deve essere composto da lettere ';
        }else{
            'devi digitare un numero come parametro nella funzione ';
        }
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
$films->SetTitle(4);
$films->language = 'english';
$films->SetDuration(150);
$films ->rating= '8';


foreach($films as $film){
    //echo ($film). '<br>';
    var_dump($film);
}

$films2 = new Production ('tarantino');
$films2-> title = 'Django';
$films2->language = 'english';
$films2->SetDuration(165);
$films2 ->rating= '9';



$films3 = new Production ('tarantino');
$films3-> title = 'Grindhouse';
$films3->language = 'english';
$films3->SetDuration(127);
$films3 ->rating= '9';


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


//aggiunta comando private


class Pugile {
    public $name;
    public $surname;
    private $ko;

    public function __construct($_ko){
        $this->ko = $_ko;
    }
    public function get_ko(){
        var_dump('ha fatto'. ' '. $this->ko);
    }
}

$pugile = new Pugile(44);
$pugile->name  = 'mike';
$pugile->surname = 'tyson';
$pugile ->get_ko();



foreach($pugile as $lottatore){
    var_dump($lottatore);
}

?>