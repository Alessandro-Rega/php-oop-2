<?php
    class Utente extends Prodotto{
        public $nome;
        public $cognome;
        public $eta;
        public $genere;
        private $carta_credito;
        private $carta_scadenza;
        public $premium;

        public function __construct($_nome, $_cognome, $_eta, $_genere, $_premium)
        {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->eta = $_eta;   
            $this->genere = $_genere;
            $this->premium = $_premium;    
        }

        public function setCredito($_numero, $_scadenza){
            $this->carta_credito = $_numero;
            $this->carta_scadenza = $_scadenza;
        }

        public function getProdotto($prod){
            if($this->genere == "Maschio")
            {
                $this->titolo = $prod->titolo;
                $this->taglia = $prod->taglia;
                $this->prezzo = $prod->prezzo - $this->getSconto($this->premium);
            }
        }
    }