<?php
#1.0.0-SNAPSHOT

include 'php/utils/config.php';
include 'php/switch/auth.php';
include 'php/switch/not_auth.php';
include 'php/utils/parser.php';

$headers = getallheaders();
foreach ($headers as $key => $value)
    if($key=="X-Token")
        $token = $value;

if($token == '')
    notAuthCall($db);
else
    authCall($db, $token);

