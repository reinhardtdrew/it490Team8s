<?php

$results = shell_exec('GET http://api.sportradar.us/nascar-ot3/sc/2015/standings/manufacturers.json?api_key=97434e7a0b50');
$arrayCode = json_decode($results);
var_dump($arrayCode);
?>