<?php

/**
 * CONVERSIONE RESPONSE IN JSON
 */

function echoQuery($query)
{
    $array = array();
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($query))
            $array[] = $row;
        echo json_encode($array);
    } else
        echo json_encode(array());
}

function echoMessage($message)
{
    echo json_encode($message);
}

function removeAcuteBrackets($testo){
    return str_replace(['<','>'], '', $testo);
}