<?php
/*
QUESTO FILE CONTIENE LE VARIABILI CONTENENTI LA FORMATTAZIONE HTML DEL TEMA.
*/

$items = array("color", "day", "month", "year", "category", "url", "title", "title", "shortdesc");

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
<div class="ic-event ic-clearfix">		
    <div class="ic-box">
        <div class="ic-box-date ic-float-left ic-align-center " style="background:%s;">
            <div class="ic-date">
                <div class="ic-day">%s</div>
                <div class="ic-month">%s</div>
                <div class="ic-year">%s</div>
                <div class="ic-time"></div>
            </div>
        </div>
        <div class="ic-content">
            <div>
                <div class="ic-cat">%s</div>
                <h2>
                    <a href="/index.php/it/tutte/%s" title="%s">
                    %s							
                    </a>
                </h2>
                <div class="ic-descshort">%s</div>
            </div>
        </div>
    </div>
</div>

<div class="share ic-clearfix">
<div class="share ic-share" style="position: fixed;"></div>			
</div>
TAG;

$closeTag = "</form></div></div>";
?>