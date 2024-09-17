<?php

class Movie {

    public $titolo;
    public $anno;
    public $generi;
    public $durata;

    public function __construct($_titolo,  $_anno, $_durata, ...$_generi) {

        $this->titolo =  $_titolo;
        $this->anno =  $_anno;
        $this->generi = $_generi;
        $this->durata = $_durata;

    }

    public function getMovie() {
        return "<strong>Titolo: </strong>" . $this->titolo . "<hr>" . "<strong>Anno: </strong>" . $this->anno . "<hr>" . "<strong>Durata: </strong>" . $this->durata . "<hr>" . "<strong>Genere: </strong>" . implode(", ", $this->generi);
    }
}

$Kung_Fury = new Movie("Kung Fury", 2015, 31, "Azione", "Commedia", "Fantascienza", "Fantastico");



echo $Kung_Fury->getMovie()
?>
