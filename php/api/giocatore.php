<?php

function login($db, $body)
{
    $username = $body["username"];
    $password = $body["password"];

    $result = $db->query("SELECT `giocatore`.`id` FROM `giocatore` WHERE `giocatore`.`username`='$username' AND `giocatore`.`password`='$password'");
    if (validateQuery($result)) {
        $token = md5("$password" . date('Y-m-d H:i:s') . " + '60oS*6a@wK%cYuwuB3Hr'");
        $idGiocatore = mysqli_fetch_assoc($result)["id"];
        $db->query("INSERT INTO `sistema_token` (`idGiocatore`, `token`) VALUES ('$idGiocatore', '$token')");
        echoMessage($token);

        $ip = $_SERVER['HTTP_CLIENT_IP'] ?: ($_SERVER['HTTP_X_FORWARDED_FOR'] ?: $_SERVER['REMOTE_ADDR']);
        $db->query("INSERT INTO `sistema_ip` (`ip`, `username`) VALUES ('$ip', '$username');");
    }
    else
        echoMessage(false);
}
