<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Średnia geometryczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie 3</h1>
<p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku. Eryk Czuchran</p>
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
        Podaj D:<input type="number" name="D">
    </label>
    <label>
        <input type="submit" value="wyślij">
    </label>
</form>
<span>
    <?php
    if(isset($_POST['A'])){
        $A=$_POST['A'];
        $B=$_POST['B'];
        $C=$_POST['C'];
        $D=$_POST['D'];
        $wynik=pow($A*$B*$C*$D,0.25);
        $wynikZaokrąglony=round($wynik,3);
        echo "Podane liczby to: $A, $B, $C i $D <br>";
        echo "Średnia geometryczna wynosi: $wynik <br>";
        echo "Średnia zaokrąglona wynosi: $wynikZaokrąglony";
    }
    ?>
</span>
</body>
</html>
