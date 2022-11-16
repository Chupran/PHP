<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 6</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<h1>Zadanie 6</h1>
<p>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona. Eryk Czuchran 3pir</p>
<form method="post" action="index.php">
    <label>
        Podaj A:<input type="number" name="A">
    </label>
    <label>
        Podaj B:<input type="number" name="B">
    </label>
    <label>
        Podaj C:<input type="number" name="C">
    </label>
    <label>
        <input type="submit" value="Wyślij!">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST") {
    $A = $_POST["A"];
    $B = $_POST["B"];
    $C = $_POST["C"];
    $p=($A+$B+$C)/2;
    if ($A < $B + $C && $B < $A + $C && $C < $A + $B) {
        $suma=$p*($p-$A)*($p-$B)*($p-$C);
        echo "Pole tego trójkąta wynosi ";
        echo sqrt($suma);
    }else{
        echo "Taki trójkąt nie istnieje!";
    }
}
?>
</body>
</html>
