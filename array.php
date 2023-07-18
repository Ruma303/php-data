<?php
//$ Tipi diversi
//$array = [2, "Ciao", null, true];

//% echo vs var_dump()

//$array = ['a', 'b', 'c'];
//echo $array; // Array
//var_dump($array); // Array


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
/* $array = [
    "firstName" => "Mario",
    "lastName" => "Rossi",
    "age" => 54,
    "address",
    10 => 20,
    "job",
]; */
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
/* $firstName = "Giovanni";
extract($array);
echo $firstName, $lastName, $age, 0, 10, 11; */


//$ Array multidimensionali
/* $people = [
    "persone" => 3,
    true,
    ['name' => "Paolo", 2, "interests" => ["Calcio", "Economia"]],
    "Utente 1" => ['name' => "Giovanna", 5, "interests" => ["Aerei", "Viaggi"]],
    "Utente 2" =>['name' => "Michele", 8, "interests" => ["Cavalli", "Ping Pong"]],
]; */
//print_r($people);


//* Accedere agli elementi
//echo $people["persone"]; // 3
//var_dump($people[1]); // Primo array
//var_dump($people["Utente 1"]); // Secondo array
//var_dump($people["Utente 1"]["name"]); // "Giovanna"
//var_dump($people["Utente 2"]["interests"][0]); // "Cavalli"




//% Array unpacking
//$array1 = [1, 2, 3];
//$array2 = [$array1, 4, 5, 6];
//echo $array2;

/* $array2 = [...$array1, 4, 5, 6];
var_dump($array2); */
// [1, 2, 3, 4, 5, 6]



//% Rimappare l'array
/* $array = array('zero', 'uno', 'due', 'tre');
unset($array[1]);
print_r($array);
// Array([0] => zero [2] => due [3] => tre)
$array = array_values($array); // ri-indicizza l'array
print_r($array);
// Array([0] => zero [1] => due [2] => tre) */


//% Metodi degli array
/* $array = [1, 2, 3, 4, 5];
echo in_array("5", $array, true); // false */

/* $array = array('Have', 'a', 'nice', 'day!');
echo implode(" ", $array);
// Have a nice day! */

/* $array = [1, 2];
array_push($array, 3, 4, 5);
print_r($array); // [1,2,3,4,5] */

/* $array = [1, 2, 3, 4, 5];
array_pop($array);
print_r($array);
// [1, 2, 3, 4];

array_unshift($array, -1, 0);
print_r($array);
// [-1, 0, 1, 2, 3, 4];

array_shift($array);
print_r($array);
// [0, 1, 2, 3, 4];

array_splice($array, 3, 2);
print_r($array);
// [0, 1, 2,]; */