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



//% Metodi delle stringhe

//$ str_replace()
/* $originale = "Ciao, mondo!";
$sostituita = str_replace("mondo", "PHP", $originale);
echo $originale; // "Ciao, mondo!"
echo $sostituita; // "Ciao, PHP!" */