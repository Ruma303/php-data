<?php
//% float
//$ Calcoli su float e problematiche

/* $x = 0.1 + 0.2;
$y = 0.3;
echo $x == $y ? 'True' : 'False';
// False
 */
//$ Soluzione delta
/* $x = 0.1 + 0.2;
$y = 0.3;
$delta = 0.000001;
$differenza = abs($x - $y);
if ($differenza < $delta) {
    echo "Le variabili sono uguali.";
    $x = $y;
    echo $x == $y ? 'True' : 'False';
} else {
    echo "Le variabili sono differenti.";
} */