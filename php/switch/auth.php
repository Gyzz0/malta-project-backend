<?php
include './php/api/sistema_token.php';

function validateToken($db, $token) {
    return validateQuery(
        $db->query("SELECT * FROM `sistema_token` WHERE `sistema_token`.`token`='$token'")
    );
}

function authCall($db, $token) {
    if(validateToken($db, $token)){
        $body = json_decode(file_get_contents("php://input"), true);

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                getAuthSwitch($db, $token);
                break;
            case 'POST':
                postAuthSwitch($db, $token, $body);
                break;
            case 'PUT':
                putAuthSwitch($db, $token, $body);
                break;
            case 'PATCH':
                patchAuthSwitch($db, $token, $body);
                break;
            case 'DELETE':
                deleteAuthSwitch($db, $token, $body);
                break;
            default:
                echoMessage("REQUEST_METHOD [AUTH] non valido, method={$_SERVER['REQUEST_METHOD']}");
                break;
        }
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

function postAuthSwitch($db, $token, $body){
    switch ($_GET['call']) {
        case 'getIdGiocatoreByToken':
            echoMessage(getIdGiocatoreByToken($db, $token));
            break;
        default:
            echoMessage("POST CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function putAuthSwitch($db, $token, $body){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PUT CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function patchAuthSwitch($db, $token, $body){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PATCH CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function deleteAuthSwitch($db, $token, $body){
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("DELETE CALL [AUTH] non valido, call={$_GET['call']}");
            break;
    }
}