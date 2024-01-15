<?php
//, Tipi diversi
// $array = [2, "Ciao", null, true];

//% echo vs var_dump()
// $array = ['a', 'b', 'c'];
//echo $array; // Array
//var_dump($array); // Array
//print_r($array); // Array


//% Tipi di array
//, Array indicizzati

//* Sintassi

/* $array1 = [1,2,3,4]; // Bracket notation
var_dump($array1); */

/* $array2 = array(1,2,3,4); // array()
var_dump($array2); */


//* Accedere agli elementi degli array
// $cities = ["Roma", "Milano", "Genova", "Napoli"];
//echo $cities[2]; // Genova


//* count()
/* $cities  = count($cities);
echo $cities; // 4 */

//* Aggiungere elementi agli array indicizzati
/* $cities[] = "Napoli";
var_dump($cities); */

// ["Roma", "Milano", "Genova", "Napoli"]W
// echo $cities[4];



//, Array associativi
/* $array = [
    "firstName" => "Mario",
    "lastName" => "Rossi",
    "age" => 54,
    "address",
    10 => 20,
    "job",
];
var_dump($array); */
/* $array = array(
    "firstName" => "Mario",
    "lastName" => "Rossi",
    "age" => 54,
    0 => "address",
    10 => 20,
    11 => "job"
); */

//echo $array[1];
//* Accedere agli array associativi
//echo $array["age"].' '.$array[10]; // 54 20

//* Parsing delle variabili
//echo "$array['age'] $array[10]"; // Parse error
//echo "Score ". $array['age'] . " età {$array[10]}"; // 54 10


//* extract()
/* $firstName = "Giovanni";
echo $firstName;
extract($array);

echo $firstName, $lastName, $age, 0, 10, 11; */



//, Array multidimensionali
/* $people = [
    "persone" => 3,
    [
        'name' => "Paolo",
        2,
        "interests" => ["Calcio", "Economia"]
    ],
    "Utente 1" => [
        'name' => "Giovanna",
        5,
        "interests" => ["Aerei", "Viaggi"]
    ],
    "Utente 2" => [
        'name' => "Michele",
        8,
        "interests" => ["Cavalli", "sport" => "Ping Pong"]
    ],
]; */
//var_dump($people);


//* Accedere agli elementi
/* echo $people["persone"]; // 3
var_dump($people[0]); // Primo array
var_dump($people["Utente 1"]); // Secondo array
var_dump($people["Utente 1"]["name"]); // "Giovanna"
var_dump($people["Utente 2"]["interests"]["sport"]); // "Ping Pong" */



//% Array unpacking
/* $array1 = [1, 2, 3];
$array2 = [$array1, 4, 5, 6];
var_dump($array2); */

/* $array1 = [1, 2, 3];
$array2 = [...$array1, 4, 5, 6];
var_dump($array2); */
// [1, 2, 3, 4, 5, 6]

/* $array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [0, ...$array1, ...$array1, 7, 8, 9];
var_dump($array3); */
// [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]


//% Destrutturazione array
/* $array = ['Alice', 'Bob', 'Charlie'];
[$first, $second, $third] = $array;
echo $first; // Alice
echo $second; // Bob
echo $third; // Charlie */


//, Destrutturare solo alcuni valori
/* $array = [1, 2, 3, 4, 5];
[$first, , $third, , $fifth] = $array;
echo $first; // 1
echo $third; // 3
echo $fifth; // 5 */

//, Destrutturare utilizzando array associativi
/* $array = ['name' => 'Alice', 'age' => 25];
['name' => $name, 'age' => $age] = $array;
echo $name; // Alice
echo $age; // 25 */


//, Destrutturare assegnando valori dell'array direttamente alle variabili
/* [$a, $b, $c] = [1, 2, 3];
echo $a . '<br>'; // 1
echo $b . '<br>'; // 2
echo $c . '<br>'; // 3 */



//% Rimappare l'array
/* $array = array('zero', 'uno', 'due', 'tre');
unset($array[1]);
var_dump($array); */

// Array([0] => zero [2] => due [3] => tre)

/* $array = array_values($array); // ri-indicizza l'array
var_dump($array); */
// Array([0] => zero [1] => due [2] => tre)


//% compact()
/* $name = 'Michael';
$email = 'micky@example.com';
$user = compact('name', 'email');
echo '<pre>'; print_r($user); echo '</pre>';
 */

//% Operatori negli array
//, Operatore di unione +
/* $array1 = array("a" => "apple", "b" => "banana");
$array2 = array("a" => "pear", "c" => "cherry");

$result = $array1 + $array2;
print_r($result); */
// Array ( [a] => apple [b] => banana [c] => cherry )


//, Operatori di confronto
/* $array1 = array("a" => "apple", "b" => "5");
$array2 = array("a" => "apple", "b" => 5, "c" => "cherry");
$array3 = array("b" => "5", "a" => "apple");

var_dump($array1 == $array3);  // bool(true)
var_dump($array1 === $array3); // bool(false)
var_dump($array1 <> $array2);  // bool(true)
var_dump($array1 !== $array2); // bool(true) */




//% Metodi degli array
/* $array = [1, 2, 3, 4, 5];
echo in_array("5", $array, true); // false */

/* $array = array('Have', 'a', 'nice', 'day!');
echo implode(" ", $array); */
// Have a nice day!

/* $array = [1, 2];
array_push($array, 3, 4, 5);
print_r($array); // [1,2,3,4,5] */

//$ array = [1, 2, 3, 4, 5];
/* array_pop($array);
print_r($array); */
// [1, 2, 3, 4];

/* array_unshift($array, -1, 0);
print_r($array); */
// [-1, 0, 1, 2, 3, 4];

/* array_shift($array);
print_r($array); */
// [0, 1, 2, 3, 4];

/* array_splice($array, 3, 1);
print_r($array); */
// [0, 1, 2,];