<?php
function getIdGiocatoreByToken($db, $token){
    return mysqli_fetch_assoc($db->query("SELECT `sistema_token`.`idGiocatore` FROM `sistema_token` WHERE `sistema_token`.`token`='$token'"))["idGiocatore"];
}