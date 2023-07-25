<?php
    //% Cookies


    //$ Cookies in PHP
    //setcookie("nick_name", "Utente 1");
    //var_dump($_COOKIE);

    //$ Parametri dei cookies
    /* $name = "user";
    $value = "Matteo Russo";
    $expire = time() + 10; // 10s
    $path = "/";
    $domain = ".example.com";
    $secure = true;
    $httpOnly = true;
    setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    print_r($_COOKIE); */
?>
<!-- <!DOCTYPE html>
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
</html> -->

<?php
    //% Sessioni

    //$ Iniziare una Sessione in PHP
    //$_SESSION["username"] = "Matteo Russo";
    //print_r($_SESSION);

    session_start();
    echo session_save_path();
    echo session_id();
    if(isset($_POST['nick_name'])) {
        $_SESSION['username'] = $_POST['nick_name'];
        echo '<h3> Pagina corrente: '. $_SERVER['PHP_SELF'] . '</h3>';
        echo '<h4> Variabile di sessione: '. $_SESSION['username'] . '</h4>';
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
    <form method="post">
        <label for="name">Inserisci il tuo nickname:</label>
        <input id="name" name="nick_name" type="text">
        <input type="submit">
    </form>
</body>
</html>