<?php
    require_once __DIR__ . './classi/prodotti.php';
    require_once __DIR__ . './classi/utenti.php';

    //utenti
    $alessandro = new Utente("Alessandro", "Rega", "20", "Maschio", true);
    $alessandro->setCredito("1234 1234 1234 1234", "12/24");


    $prodotto = new Prodotto("Polo", "M", "Maschio", 7);

    $alessandro->getProdotto($prodotto);

    var_dump($alessandro);
?>