<?php

/**
 * CONFIGURAZIONE DEL DATABASE
 */

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
header('Content-Type: application/json');

$user = 'maltachronicles';

$db = new mysqli('localhost', $user, '', 'my_' . $user);
if ($db->connect_error) {
    die($db->connect_error);
}
