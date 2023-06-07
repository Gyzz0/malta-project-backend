<?php

function notAuthCall($db, $token) {
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            getNotAuthSwitch($db, $token);
            break;
        case 'POST':
            postNotAuthSwitch($db, $token);
            break;
        case 'PUT':
            putNotAuthSwitch($db, $token);
            break;
        case 'PATCH':
            patchNotAuthSwitch($db, $token);
            break;
        case 'DELETE':
            deleteNotAuthSwitch($db, $token);
            break;
        default:
            echoMessage("REQUEST_METHOD [NOT_AUTH] non valido, method={$_SERVER['REQUEST_METHOD']}");
            break;
    }        
}

function getNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("GET CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function postNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("POST CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function putNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PUT CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function patchNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PATCH CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function deleteNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("DELETE CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}