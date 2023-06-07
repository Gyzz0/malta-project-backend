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
            #TODO aggiungere log "REQUEST_METHOD NOT_AUTH non valido"
            break;
    }        
}

function getNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL GET NOT_AUTH non valido"
            break;
    }
}

function postNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL POST NOT_AUTH non valido"
            break;
    }
}

function putNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL PUT NOT_AUTH non valido"
            break;
    }
}

function patchNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL PATCH NOT_AUTH non valido"
            break;
    }
}

function deleteNotAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL DELETE NOT_AUTH non valido"
            break;
    }
}