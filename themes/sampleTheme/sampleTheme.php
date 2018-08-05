<?php
/*
File contenente la struttura del template, i nomi delle variabili non sono modificabili
Il modulo svrutta la funzione vsprintf() di PHP che aggiunge le variabili ordinate contenute in 
un array ($items) all'interno di una stringa (la struttura).

$items - In questo aray specificare le variabili ordinate da inserire

$openTag - Variabile contenente i tag di apertura della struttura

$eventTag - Variabile contenente la struttura del singolo evento. Questa struttura viene ripetuta per ogni evento,
    assicurarsi che non ci siano tag non chiusi all'interno della stessa.

$closeTag - contiene i tag di chiusura della struttura principale

Campi disponibili da includere nella struttura:

        formtitle - Mostra "Prossimi eventi" o "Nessun Evento"
        url - Link all'evento sul sito
        title - titolo dell'evento
        category - Categoria dell'evento
    	shortdesc - Descrizione dell'evento
		color - Colore categoria evento
        startdate - Data inizio evento
        enddate - Data fine evento
        day - Giorno inizio evento
        month - Mese inizio evento
        year - Anno inizio evento
		starttime - Ora inizio evento
		endtime - Ora fine evento
        separator - Separatore "-"
        
    Per inserire una variabile, specificarne la posizione con %s e rispettare l'ordine nell'array.
    Includere la variabile nell'array OGNI VOLTA che si ripete.
*/

$items = array("day", "month", "url", "title", "category", "shortdesc");


$openTag = <<<TAG
    <div class="#">
        <h3>%s <!--day--> </h3>
TAG;

$eventTag = <<<TAG
<div class="#">
    <p class="#">
        <span class="#">%s <!--day--> </span>
        <span class="#">%s <!--month--> </span>  	
    </p>
    <div class="#">
        <a href="%s <!--url-->">
        %s <!--title--> - %s <!--category-->
        </a> 		
    </div>
    %s <!--shortdesc--> 
</div>
TAG;

$closeTag = <<<TAG
</div>
TAG;

?>