<?php
include './php/api/giocatore.php';
include './php/api/trattato.php';

function notAuthCall($db)
{
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            getNotAuthSwitch($db);
            break;
        case 'POST':
            postNotAuthSwitch($db, $body);
            break;
        case 'PUT':
            putNotAuthSwitch($db, $body);
            break;
        case 'PATCH':
            patchNotAuthSwitch($db, $body);
            break;
        case 'DELETE':
            deleteNotAuthSwitch($db, $body);
            break;
        default:
            echoMessage("REQUEST_METHOD [NOT_AUTH] non valido, method={$_SERVER['REQUEST_METHOD']}");
            break;
    }
}

function getNotAuthSwitch($db)
{
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("GET CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function postNotAuthSwitch($db, $body)
{
    switch ($_GET['call']) {
        case 'login':
            login($db, $body);
            break;
        case 'signup':
            signup($db, $body);
            break;
        case 'giocatore/existUsername':
            existUsername($db, $body);
            break;
        case 'giocatore/existEmail':
            existEmail($db, $body);
            break;
        case 'trattato/getChapters':
            getCapitoliByTipo($db, $body);
            break;
        case 'trattato/getParagraphs':
            getParagrafiByIdTrattato($db, $body);
            break;
        default:
            echoMessage("POST CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function putNotAuthSwitch($db, $body)
{
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PUT CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function patchNotAuthSwitch($db, $body)
{
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("PATCH CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}

function deleteNotAuthSwitch($db, $body)
{
    switch ($_GET['call']) {
        case 'call':
            # code...
            break;
        default:
            echoMessage("DELETE CALL [NOT_AUTH] non valido, call={$_GET['call']}");
            break;
    }
}
