<?php
//% String
/* $str1 = 'Ciao, sono una stringa! ';
$str2 = "Anche io sono una stringa!";
echo $str1, $str2; */


//$ Indicizzazione delle stringhe
//$str = "Ciao, mondo!";
//echo $str[11]; // o
//echo $str{3}; // Deprecato

/* $str = "Ciao, mondo!";
$str[3] = 'S';
echo $str; // CiaS, mondo! */


//$ Concatenazione delle stringhe
//echo 'Stringa 1' . ' ' . 'Stringa 2.'; // Stringa 1 + Stringa 2.
/* $str1 = 'Str';
echo $str1;
$str1 .= 'inga';
echo $str1; // Stringa */



//% Differenze tra apici singoli e doppi

//$ Interpolazione
//* Interpolazione ""
/* $nome = "Mario";
$saluto = "Ciao, $nome!";
echo $saluto; // Ciao, Mario! */

//* No interpolazione ''
/* $nome = "Mario";
$saluto = 'Ciao, $nome!';
echo $saluto; // Ciao, $nome! */

//* Interpolazione '' con .
/* $nome = "Mario";
$saluto = 'Ciao, ' . $nome . '!';
echo $saluto; // Ciao, Mario! */

//* Interpolazione tramite il dollaro e le graffe ${}
/* $var = 'pizza';
echo "Il mio cibo preferito è: ${var}."; */


//* Interpolazione tramite le graffe {}
/* $course = 'PHP';
echo "Corso = {$course}"; */
// Corso = PHP


//% Caratteri di escape
//echo "Un'ora";
//echo 'Lui ha detto "Ciao a tutti"';
//echo 'Un\'ora';
//echo "\"Lui ha detto:...\"";//"Lui ha detto:..."
//echo 'C:\\User\\Altre cartelle';
//echo "Prima riga\nSeconda riga\n\tTerza riga"; // Solo terminale
//echo "\&#34;";


//% Heredoc e Nowdoc
//$ Heredoc
/* $nome = "Matteo";
$heredoc = <<<Text
Ciao, il mio nome è $nome " \n
Piacere di conoscerti! ' \t
Text;
echo $heredoc; */
// Ciao, il mio nome è Matteo " Piacere di conoscerti! '

//$ Nowdoc
/* $nome = "Matteo";
$nowdoc = <<<'Text'
Ciao, il mio nome è $nome. " \n
Piacere di conoscerti! ' \t
Text;
echo $nowdoc; */
// Ciao, il mio nome è $nome.


//% Costrutti delle stringhe
?> <!--Occorre uscire da PHP -->
<html>
    <!--echo -->
    <?php /*
        $name = "Matteo";
        $age = 28;
        $city = "Roma";
        echo $name, $age, $city;
        */
    ?>
<!--
    <h2><?= 'Hello World'; ?><h2>
    <?= '<h2>Hello World</h2>'; ?>
 -->

    <!--print -->
    <?php //print $name; ?>
</html>

<?php



//% Metodi delle stringhe

//$ printf()
/* $nome = 'Mario';
$età = 30;
printf("Ciao, mi chiamo %s e ho %d anni.", $nome, $età);
// Ciao, mi chiamo Mario e ho 30 anni. */


//$ sprintf()
/* $numero = 5;
$luogo = 'alberi';
$frase = sprintf("Ci sono %d %s nel parco.", $numero, $luogo);
echo $frase; // Ci sono 5 alberi nel parco. */

//$ sscanf()
/* $input = 'Febbraio 15 2023';
sscanf($input, '%s %d %d', $mese, $giorno, $anno);
echo "\$mese: $mese<br>";  // $mese: Febbraio
echo "\$giorno: $giorno<br>"; // $mese: Febbraio
echo "\$anno: $anno<br>";   // $anno: 2023 */


//$ str_replace()
/* $originale = "Ciao, mondo!";
$sostituita = str_replace("mondo", "PHP", $originale);
echo $originale; // "Ciao, mondo!"
echo $sostituita; // "Ciao, PHP!" */

$str = "Stringa di prova";

//$ strlen()
//echo strlen($str); // 16


//$ substr()
//echo substr($str, 5); // ga di prova
//echo substr($str, 5, 4); // ga d


//$ strpos()
//echo strpos($str, "di"); // 8


//$ strcmp()
/* $str2 = "Ciao";
echo strcmp($str, $str2); // 1 */

//$ explode()
/* $array = explode(" ", $str);
var_dump($array); */


//$ addslashes()
/* $text = "L'apprendimento di 'PHP' è divertente!";
echo addslashes($text); */
// L\'apprendimento di \'PHP\' è divertente!


//$ trim(), ltrim(), rtrim()
/* echo trim("  Ciao, mondo!  ") . '<br>';   // "Ciao, mondo!"
echo ltrim("  Ciao, mondo!  ") . '<br>';  // "Ciao, mondo!  "
echo rtrim("  Ciao, mondo!  ") . '<br>';  // "  Ciao, mondo!" */


//$ lcfirst(), ucfirst(), ucwords()
/* echo lcfirst("Ciao, mondo!") . '<br>'; // "ciao, mondo!"
echo ucfirst("ciao, mondo!") . '<br>'; // "Ciao, mondo!"
echo ucwords("ciao, mondo!") . '<br>'; // "Ciao, Mondo!"
echo ucwords("ciao mondo!", " ") . '<br>'; // "Ciao-Mondo!" */

//$ strtolower(), strtoupper(), mb_strtolower(), mb_strtoupper()
/* echo strtolower("Città") . '<br>';   // "città"
echo strtoupper("città") . '<br>';   // "CITTà"
echo mb_strtolower("CITTÀ") . '<br>'; // "città"
echo mb_strtoupper("città") . '<br>'; // "CITTÀ" */


//% Metodi disponibili dopo PHP 8
//echo str_contains("Ciao, mondo!", "mondo") . '<br>'; // true
//echo str_starts_with("Ciao, mondo!", "Ciao") . '<br>'; // true
//echo str_ends_with("Ciao, mondo!", "mondo!") . '<br>'; // true
//echo get_debug_type("Ciao, mondo!") . '<br>'; // "string"