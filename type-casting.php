<?php

//% Coercizioni implicite

//$ Da numeri a stringhe

/* $str = "Stringa e numero: " . 42;
echo $str . "<br>"; // "Stringa e numero: 42"
var_dump($str); // String */

//$ Da stringhe a numeri
/* $str1 = "10";
echo $str1 + 20 . '<br>'; // Stampa "30"

$str2 = "10.5";
echo $str2 + 0.5 . '<br>'; // Stampa "11"

$str3 = "10abc";
echo $str3 + 1 . '<br>'; // Stampa "11"

$str4 = "abc10";
try {
    echo $str4 + 1 . '<br>'; // Questo causerà un TypeError in PHP 8.0+
} catch (TypeError $e) {
    echo "Errore: " . $e->getMessage() . '<br>';
} */


//$ Da numeri a booleani
/* $numero1 = 0;
$numero2 = -5;
if ($numero1) { // false
    echo "Questo non verrà stampato";
}
if ($numero2) { // true
    echo "Questo verrà stampato";
} */


//$ Da stringhe a booleani
/* $stringa1 = "";
$stringa2 = "0";
$stringa3 = "false";
if ($stringa1) { // false
    echo "Questo non verrà stampato";
}
if ($stringa2) { // false
    echo "Questo non verrà stampato";
}
if ($stringa3) { // true
    echo "Questo verrà stampato";
}
 */

//$ Da array a booleani
/* $array_vuoto = [];
$array = [1, 2, 3];
if ($array_vuoto) { // false
    echo "Questo non verrà stampato";
}
if ($array) { // true
    echo "Questo verrà stampato";
} */


//$ Da null a booleani
/* $valore = null;
if ($valore) { // false
    echo "Questo non verrà stampato";
} */


//% Conversioni esplicite

//$ Sintassi
/* $var = 42; // integer
echo gettype($var) . '<br>';
$var = (string) $var; // string
echo gettype($var); */

//* (int) e (integer)
/* $float = 3.14; // float
$int = (int) $float; // integer
echo $int; // 3 */


//* (float) o (double)
/* $stringa = "3.14"; // string
$float = (float) $stringa; // float
echo $float; // 3.14 */

//* (string)
/* $numero = "42"; // integer
$stringa = (string) $numero; // string
echo $stringa; // 42 */

//* (bool) o (boolean)
/* $valore = 0; // int
$bool = (bool) $valore; // bool
echo $bool; // (nulla) */

//* (array)
/* $stringa = "Hello, world!"; // string
$array = (array) $stringa; // array
var_dump($array); // [0] => string "Hello, world!" */

//* (object)
/* $numero = 42; // integer
$oggetto = (object) $numero; // object
var_dump($oggetto); */
// object(stdClass)#1 (1) { ["scalar"]=> int(42) }