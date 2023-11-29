<?php

require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Serie.php';



class Production {
    public $title;
    public $language;
    public $rating;
    public $director;
    public $time_film ;

    function __construct($_title, $_language, $_rating, $_director,){
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
        $this->director = $_director;
    }

    function SetTitle($title_film){
        if($title_film === (string)$title_film){
            $this->title = $title_film;
        }elseif ($title_film === (int)$title_film) {
            $this->title = 'il film deve essere composto da lettere ';
        }else{
            'devi digitare qualcosa come parametro nella funzione ';
        }
    }

    function setLanguage($set_language){
        if($set_language === (string)$set_language){
            $this->language = $set_language;
        }elseif ($set_language === (int)$set_language) {
            $this->language = 'la lingua deve essere composto da lettere ';
        }else{
            'devi digitare qualcosa come parametro nella funzione ';
        }
    }
    function setRating($set_rating){
        if($set_rating === (int)$set_rating){
            $this->rating = $set_rating;
        }elseif ($set_rating === (string)$set_rating) {
            $this->rating = 'il rating deve essere composto da numeri ';
        }else{
            'devi digitare qualcosa come parametro nella funzione ';
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

$films = new Production('pulp','english',8,'tarantino');
$films->SetDuration(150);




foreach($films as $film){
    //echo ($film). '<br>';
    echo($film. '<br>');
}

var_dump($movie);