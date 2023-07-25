<?php
    session_start();
    echo '<h3> Pagina corrente: '. $_SERVER['PHP_SELF'] . '</h3>';
    echo '<h4> Variabile di sessione: '. $_SESSION['username'] . '</h4>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>