<?php

$Organismes = __DIR__ . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'Organismes.txt';
$resource = fopen($Organismes, 'r');
echo fread($resource, 2);