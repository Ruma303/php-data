<?php
// Apertura di un file per la lettura
$file_handle = fopen('test.txt', 'r');
// Lettura dei primi 10 byte del file
$first_10_bytes = fread($file_handle, 10);
// Chiusura del file
fclose($file_handle);


