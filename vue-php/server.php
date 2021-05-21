<?php
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');

    //se il genere esiste dentro get e non è vuoto
    if( isset($_GET['genere']) && $_GET['genere'] != "" ) {

        //mi serve un array per filtrare i dischi
        $databaseFiltrato = [];

        //faccio un ciclo foreach che recupera i dischi che hanno il genere uguale al parametro passato nella select
        foreach($database as $riga) {

            if ( strtolower($riga['genre']) == strtolower($_GET['genere']) ) {

                $databaseFiltrato[] = $riga;

            }
        }

        echo json_encode($databaseFiltrato);

    } else { //se non c'è il parametro passato, ovvero non si vuole filtrare e si vogliono far vedere tutti i dischi
        echo json_encode($database);
    }

?>