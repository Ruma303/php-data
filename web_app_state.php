<?php
    var_dump($_POST);
    setcookie("nick_name", "Utente 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="name">Inserisci il tuo nickname:</label>
        <input id="name" name="nick_name" type="text">
        <input type="submit">
    </form>
</body>
</html>