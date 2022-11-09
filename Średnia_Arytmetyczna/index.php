<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Średnia arytmetyczna</title>
</head>
<body>
<h1>Zadanie 2</h1>
<p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku. Eryk Czuchran 3pir</p>
<form action="index.php" method="post">
    <labeL>
        <p>Podaj A:</p><input type="number" name="a"> <br>
    </labeL>
    <labeL>
        <p>Podaj B:</p><input type="number" name="b"> <br>
    </labeL>
    <labeL>
        <p>Podaj C:</p><input type="number" name="c"> <br>
    </labeL>
    <labeL>
        <p>Podaj D:</p><input type="number" name="d"> <br><hr>
    </labeL>
    <label>
        <input type="submit" value="Ślij!">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $wynik=($_POST['a']+$_POST['b']+$_POST['c']+$_POST['d'])/4;
    echo "Podane liczby to: $a, $b, $c, $d";
    echo "Średnia tych liczb wynosi: $wynik <br>";
    echo "round($wynik)";
}
?>
</body>
</html>
