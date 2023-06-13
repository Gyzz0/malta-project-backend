<?php

function getCapitoliByTipo($db, $body){
    $tipo = $body["tipo"];
    echoQuery($db->query("SELECT `trattato`.`id`,`trattato`.`titolo`,`trattato`.`testo` FROM `trattato` WHERE `trattato`.`tipo`='$tipo' AND `trattato`.`idTrattato`='0'"));
}

function getParagrafiByIdTrattato($db, $body){
    $idTrattato = $body["idTrattato"];
    echoQuery($db->query("SELECT `trattato`.`id`,`trattato`.`titolo`,`trattato`.`testo` FROM `trattato` WHERE `trattato`.`idTrattato`='$idTrattato'"));
}