<?php
/*
QUESTO FILE CONTIENE LE VARIABILI CONTENENTI LA FORMATTAZIONE HTML DEL TEMA.
*/

$items = array("url", "title", "color", "color", "day", "month", "year", "url", 
                "title", "title", "url", "color", "category", "day", "month", "year", "starttime",
                "separator", "endtime", "shortdesc", "url", "title");


$openTag = <<<TAG
<div id="icagenda" class="ic-list-view">		
    <form id="icagenda-list" name="iclist" action="" method="get">                   
            <div class="ic-clearfix">
                    <div class="ic-header-container">
                            <h2 class="ic-header-title">%s</h2>
                    </div>
            </div>  
            <div class="ic-clearfix"></div>
            <div class="ic-list-events ic-clearfix">
TAG;

$eventTag = <<<TAG
<div class="event ic-event ic-clearfix">           
<a href="/index.php/it/tutte/%s" title=%s">
    <div class="ic-box-date" style="background-color: %s; border-color: %s">
        <div class="ic-date">
            <div class="ic-day">%s</div>
            <div class="ic-month">%s</div>
            <div class="ic-year">%s</div>
            <div class="ic-time"></div>
        </div>
    </div>
</a>  
<div class="ic-content">
    <div class="eventtitle ic-event-title ic-clearfix">
        <div class="title-header ic-title-header ic-float-left">
            <h2>
                <a href="/index.php/it/tutte/%s" title="%s">%s</a>
                <a class="iCtip" href="/index.php/it/tutte/%s">
                    <small>
                        <span class="iCicon-open-details"></span>
                    </small>
                </a>						
            </h2>
        </div>
        <div class="title-cat ic-title-cat ic-float-right " style="color: %s;">%s</div>
    </div>
    <div class="nextdate ic-next-date ic-clearfix">
        <strong>
            <span class="ic-single-startdate">%s&nbsp;%s&nbsp;%s</span>
            <span class="ic-single-starttime">%s</span>
            <span class="ic-datetime-separator"> %s </span>
            <span class="ic-single-endtime">%s</span>
        </strong>
    </div>
    <div class="descshort ic-descshort">%s</div>
    <div class="moreinfos ic-more-info">
        <a href="/index.php/it/tutte/%s" title="%s">+ dettagli</a>
    </div>
</div>
</div>
<div class="share ic-clearfix"></div>
TAG;

$closeTag = "</form></div></div>";
?>