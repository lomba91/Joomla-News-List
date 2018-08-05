<?php
/*
QUESTO FILE CONTIENE LE VARIABILI CONTENENTI LA FORMATTAZIONE HTML DEL TEMA.
*/

$items = array("day", "month", "url", "title", "category", "shortdesc");


$openTag = <<<TAG
    <div class="moduletable_unipieventi">
        <h3>%s</h3>
TAG;

$eventTag = <<<TAG
<div class="event">
    <p class="date">
        <span class="num">%s</span>
        <span class="mese">%s</span>  	
    </p>
    <div class="text">
        <a href="%s">
        %s - %s
        </a> 		
    </div>
    %s 
</div>
TAG;

$closeTag = <<<TAG
</div>
TAG;

?>