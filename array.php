<?php
//$ Tipi diversi
//$array = [2, "Ciao", null, true];

//% Tipi di array
//$ Array indicizzati

//* Sintassi

/* $array1 = [1,2,3,4]; // Bracket notation
var_dump($array1); */

/* $array2 = array(1,2,3,4); // array()
var_dump($array1); */

//* Accedere agli elementi degli array
/* $cities = ["Roma", "Milano", "Genova"];
echo $cities[2]; // Genova */

/* $elements = count($cities);
echo $elements; // 3 */

/* $cities[] = "Napoli";
var_dump($cities); */
// ["Roma", "Milano", "Genova", "Napoli"]






//$ Array associativi
$array = [
    "firstName" => "Mario",
    "lastName" => "Rossi",
    "age" => 54,
    "address",
    10 => 20,
    "job",
];
//var_dump($array);
/* array(3) {
    ["firstName"]=> string(5) "Mario"
    ["lastName"]=> string(5) "Rossi"
    ["age"]=> int(54)
    [0]=> string(7) "address"
    [10]=> int(20)
    [11]=> string(3) "job" } */

//* Accedere agli array associativi
//echo $array["age"].' '.$array[10]; // 54 10

//* Parsing delle variabili
//echo "$array['age'] $array[10]"; // Parse error
//echo "{$array['age']} {$array[10]}"; // 54 10

//* extract()
$firstName = "Giovanni";
extract($array);
echo $firstName, $lastName, $age, 0, 10, 11;