<?php
//% String
/* $str1 = 'Ciao, sono una stringa!';
$str2 = "Anche io sono una stringa!";
echo $str1, $str2; */

//$ Indicizzazione delle stringhe
//$str = "Ciao, mondo!";
//echo $str[3]; // o
//echo $str{3}; // Deprecato

/* $str = "Ciao, mondo!";
$str[3] = 'S';
echo $str; // CiaS, mondo! */


//$ Concatenazione delle stringhe
//echo 'Stringa 1' . ' + ' . 'Stringa 2.'; // Stringa 1 + Stringa 2.
/* $str1 = 'Str';
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


//* Interpolazione tramite le graffe ${}
/* $var = 'pizza';
echo "Il mio cibo preferito è: ${pizza}"; */


//% Caratteri di escape
//echo 'Un\'ora';
//echo "Un'ora";
//echo "\"Lui ha detto:...\"";//"Lui ha detto:..."
//echo 'C:\\User\\Altre cartelle';
//echo "Prima riga\nSeconda riga\rTerza riga"; // Solo terminale


//% Heredoc e Nowdoc
//$ Heredoc
/* $nome = "Matteo";
$nowdoc = <<<Text
Ciao, il mio nome è $nome " \n
Piacere di conoscerti! ' \t
Text;
echo $nowdoc; */
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
?> <!-- Occorre uscire da PHP -->
<html>

    <!-- echo -->
  <!--   <?php
        $name = "Matteo";
        $age = 28;
        echo $name, $age;
    ?>
    <h2><?= 'Hello World'; ?><h2>
    <?= '<h2>Hello World</h2>'; ?>
 -->

    <!-- print -->
    <?php //print $name; ?>
</html>

<?php



//% Metodi delle stringhe

/* $originale = "Ciao, mondo!";
$sostituita = str_replace("mondo", "PHP", $originale);
echo $originale; // "Ciao, mondo!"
echo $sostituita; // "Ciao, PHP!" */

$str = "Stringa di prova";

//echo strlen($str); // 16

//echo substr($str, 5); // ga di prova
//echo substr($str, 5, 4); // ga ds

//echo str_replace("Stringa", "Testo", $str);
// Testo di prova

//echo strpos($str, "di"); // 8

/* $str2 = "Ciao";
echo strcmp($str, $str2); // 1 */

/* $array = explode(" ", $str);
var_dump($array); */

/* $text = "L'apprendimento di 'PHP' è divertente!";
echo addslashes($text);
// L\'apprendimento di \'PHP\' è divertente! */

/* echo trim("  Ciao, mondo!  ");   // "Ciao, mondo!"
echo ltrim("  Ciao, mondo!  ");  // "Ciao, mondo!  "
echo rtrim("  Ciao, mondo!  ");  // "  Ciao, mondo!" */

/* echo lcfirst("Ciao, mondo!"); // "ciao, mondo!"
echo ucfirst("ciao, mondo!"); // "Ciao, mondo!"
echo ucwords("ciao, mondo!"); // "Ciao, Mondo!"
echo ucwords("ciao-mondo!", "-"); // "Ciao-Mondo!" */

/* echo strtolower("Città");   // "città"
echo strtoupper("città");   // "CITTà"
echo mb_strtolower("CITTÀ"); // "città"
echo mb_strtoupper("città"); // "CITTÀ" */


//$ Metodi disponibili dopo PHP 8
//echo str_contains("Ciao, mondo!", "mondo"); // true
//echo str_starts_with("Ciao, mondo!", "Ciao"); // true
//echo str_ends_with("Ciao, mondo!", "mondo!"); // true
//echo get_debug_type("Ciao, mondo!"); // "string"