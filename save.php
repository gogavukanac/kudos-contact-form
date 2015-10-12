<?php

$poruka = $_POST['poruka'];

$file = 'poruke.txt';

$poruka = $poruka . "\n";

file_put_contents($file, $poruka, FILE_APPEND);

