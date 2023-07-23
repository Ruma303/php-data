<?php


//% Array superglobali

//$ $GLOBALS
/* $course = 'PHP';
$name = 'Eleonora';
echo $GLOBALS['course']; // PHP
function test() {
    echo $GLOBALS['name']; // Eleonora
    global $course;
    echo $course; // PHP
} test(); */


//$ $_GET
//echo "Nome: {$_GET['name']}, Cognome {$_GET['last-name']}.";
// Nome: Matteo, Cognome Russo
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="superglobals-array.php" method="GET">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
        <label for="last_name">Cognome: </label>
        <input type="text" id="last_name" name="last_name" placeholder="Inserire cognome">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    /* if (!empty($_GET)) {
        extract($_GET);
        $response = <<<Text
        <h2>Dati utente</h2>
        <p>
            <h4>Nome: $name</h4>
            <h4>Cognome: $last_name</h4>
        </p>
        Text;
        echo $response;
    } */
    ?>
</body>
</html> -->


<?php
//$ $_POST
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="superglobals-array.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
        <label for="last_name">Cognome: </label>
        <input type="text" id="last_name" name="last_name" placeholder="Inserire cognome">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
    <?php /*
    if (!empty($_POST)) {
        $name_safe = htmlspecialchars($_POST['name']);
        echo $name_safe;
        exit();
        //print_r($_POST);
        extract($_POST);
        $response = <<<Text
        <h2>Dati utente</h2>
        <p>
            <h4>Nome: $name</h4>
            <h4>Cognome: $last_name</h4>
        </p>
        Text;
        echo $response;
    }*/
    ?>
</body>
</html> -->

<?php
//$ $_SERVER
/* echo '<pre>';
print_r($_SERVER);
echo '</pre>'; */



//$ $_FILES
/* echo '<pre>';
print_r($_FILES);
echo '</pre>'; */

if(isset($_POST['file-caricato'])) {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    echo "<h2>{$_POST['file-caricato']}</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="superglobals-array.php" enctype="multipart/form-data">
        <input type="file" name="file1">
        <button type="submit" name="file-caricato" value="File caricato">Carica</button>
    </form>
</body>
</html>







