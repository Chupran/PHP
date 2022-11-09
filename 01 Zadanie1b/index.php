<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skrypt PHP</title>
</head>
<body>
<h1>Zadanie 1</h1>
<p>Program wczytuje imię i wyświetla powitanie z tym imieniem, Eryk Czuchran 3pir</p>
<form method="post" action="index.php">
    <label>
        <p>Podaj imię:</p><input type="text" name="imie"><input type="submit" id="przycisk" value="Wyślij!">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['imie']) && $_POST['imie']!=""){
        $imie=$_POST['imie'];
        echo "Witaj, $imie";
    }
}
?>
</body>
</html>
