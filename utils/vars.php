<?php

/**
 * CONFIGURAZIONE DEL DATABASE
 */

$idChatGenerale = '';
$idChatMaster = '';
$idChatGuide = '';
$idChatAdmin = '';

$idBachecaCronache = '';

$idBachecaMissiveGuide = '';
$idBachecaMissiveMaster = '';
$idBachecaMissiveAdmin = '';

$idBachecaMembriGuide = '';
$idBachecaMembriMaster = '';

$db = new mysqli('localhost', $user, '', 'my_'.$user);
if ($db->connect_error) {
    die($db->connect_error);
}
