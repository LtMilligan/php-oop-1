<?php

class Movie {

    public $titolo;
    public $anno;
    public $genere;
    public $durata;
    public $descrizione;

    public function __construct($_titolo,  $_anno, $_genere, $_durata, $_descrizione) {

        $this->titolo =  $_titolo;
        $this->anno =  $_anno;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->descrizione = $_descrizione;

    }
}
?>