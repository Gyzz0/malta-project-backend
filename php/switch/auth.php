<?php

function validateToken($db, $token) {

}

function authCall($db, $token) {
    if(validateToken($db, $token))
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                getAuthSwitch($db, $token);
                break;
            case 'POST':
                postAuthSwitch($db, $token);
                break;
            case 'PUT':
                putAuthSwitch($db, $token);
                break;
            case 'PATCH':
                patchAuthSwitch($db, $token);
                break;
            case 'DELETE':
                deleteAuthSwitch($db, $token);
                break;
            default:
                #TODO aggiungere log "REQUEST_METHOD AUTH non valido"
                break;
        }
    #TODO aggiungere else "token non valido" 
        
}

function getAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL GET AUTH non valido"
            break;
    }
}

function postAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL POST AUTH non valido"
            break;
    }
}

function putAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL PUT AUTH non valido"
            break;
    }
}

function patchAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL PATCH AUTH non valido"
            break;
    }
}

function deleteAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            #TODO aggiungere log "CALL DELETE AUTH non valido"
            break;
    }
}