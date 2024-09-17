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

    public function getMovie() {
        return "<strong>Titolo: </strong>" . $this->titolo . "<hr>" . "<strong>Anno: </strong>" . $this->anno . "<hr>" . "<strong>Genere: </strong>" . $this->genere . "<hr>" . "<strong>Durata: </strong>" . $this->durata . "<hr>" . "<strong>Descrizione: </strong>" . $this->descrizione;
    }
}

$Kung_Fury = new Movie("Kung Fury", 2015, "azione", 31, "Miami, 1985. Un videogioco arcade si trasforma improvvisamente in un robot e semina terrore e distruzione per le strade della città, per affrontarlo viene chiamato l'agente di polizia Kung Fury.

In precedenza perse il suo partner Dragon, che considerava come un padre, mentre inseguivano un ninja vestito di rosso. Dopo che lo ebbero ammanettato, il ninja si liberò e uccise Dragon, tagliandolo in due con una spada. In quel momento Kung Fury venne colpito da un fulmine e morso da un cobra, svenne e durante una visione apprese di un'antica profezia su una forma di kung-fu talmente potente da poter essere padroneggiata solamente da un uomo, il 'prescelto' Kung Fury. Dopo essere rinvenuto, realizzò di aver ottenuto grandissime abilità di arti marziali che gli permisero di sconfiggere il nemico e di vendicare il collega. Da quel momento decise di combattere il crimine usando i suoi poteri.

Una volta sconfitto il videogioco assassino, Kung Fury viene convocato nell'ufficio del capo della polizia, che lo rimprovera per i danni procurati alla città durante lo scontro e gli assegna un nuovo partner, Triceracop (un uomo con la testa di triceratopo). Kung Fury però preferisce lavorare da solo, poiché teme di perdere un altro compagno durante il servizio e si dimette dalla polizia. Nel frattempo, Adolf Hitler, autoproclamatosi 'Kung Führer', viaggia nel tempo e giunge a Miami, dove ruba un telefono cellulare e uccide il capo della polizia, compiendo un assalto al distretto attraverso la cornetta del telefono. Hackerman, un mago dell'informatica, offre il suo aiuto a Kung Fury per rintracciare la telefonata. Una volta scoperto di chi si tratta, Hackerman, con l'ausilio di un Power Glove, costruisce una macchina per viaggiare nel tempo, mandando così Kung Fury nella Germania nazista per uccidere Hitler, il cui obiettivo è uccidere il protagonista per diventare lui stesso Kung Fury. Per via di un errore di Hackerman, Kung Fury viaggia troppo indietro nel tempo e si ritrova nell'epoca vichinga, dove incontra la vichinga Barbarianna, che lo salva da un laser raptor, e Katana. Kung Fury spiega a quest'ultima che deve portare a termine la sua missione e la donna lo porta, a cavallo di un tirannosauro chiamato Asgard, da Thor, il quale aiuta il poliziotto aprendo un portale per la Germania nazista.

Giunto lì, Kung Fury elimina numerosi soldati grazie alla sua destrezza, venendo però colpito da Hitler con una mitragliatrice. Thor, le due vichinghe, Triceracop, Hackerman e il tirannosauro attraversano il tempo e giungono in suo soccorso, affrontando insieme l'esercito nazista e sterminandone tutti i soldati. Hitler, rimasto solo e protetto unicamente da un'enorme aquila metallica, viene colpito da Kung Fury e poi finito da Thor con il suo martello.

L'azione ritorna a Miami: Kung Fury sfreccia in città a bordo della sua Lamborghini Countach, il cui computer di bordo è Hoff 9000. Rivive lo scontro con il videogioco arcade e, dopo averlo annientato, scopre che è di fabbricazione nazista notando una svastica: il futuro è infatti cambiato, in quanto la martellata di Thor ha spedito Hitler e la sua aquila negli anni ottanta.");



echo $Kung_Fury->getMovie()
?>
