<?php
    class Prodotto{
        public $titolo;
        public $taglia;
        public $genere;
        public $prezzo;

        public function __construct($_titolo, $_taglia, $_genere, $_prezzo)
        {
            $this->titolo = $_titolo;
            $this->taglia = $_taglia;
            $this->genere = $_genere;
            $this->prezzo = $_prezzo;
        }

        public function getSconto($_premium){
            if($_premium == true)
            {
                return 4;
            }
        }
    }