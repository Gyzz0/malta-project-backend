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
                echoMessage("REQUEST_METHOD [AUTH] non valido, method={$_SERVER['REQUEST_METHOD']}");
                break;
        }
    else
        echoMessage("TOKEN NON VALIDO");        
}

function getAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("GET CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function postAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("POST CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function putAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PUT CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function patchAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PATCH CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function deleteAuthSwitch($db, $token){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("DELETE CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}