<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Losowanie liczb</title>
</head>
<body>
<h1>Zadanie 32, losowanie liczb</h1>
<p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe. Eryk Czuchran 3pir</p>
<form method="post" action="index.php">
    <label>
        Podaj A:<input type="number" name="A">
    </label>
    <label>
        Podaj B:<input type="number" name="B">
    </label>
    <label>
        <input type="submit" value="Oblicz!">
    </label>
</form>
<?php
if(isset($_POST['B'])){
    $A=$_POST['A'];
    $B=$_POST['B'];
    $wylosowanaLiczba1=rand($A, $B);
    $wylosowanaLiczba2=rand($A, $B);
    if($wylosowanaLiczba1>$wylosowanaLiczba2){
        echo "Wylosowana liczba $wylosowanaLiczba1, jest większa od wylosowanej liczby $wylosowanaLiczba2!";
    }elseif($wylosowanaLiczba1<$wylosowanaLiczba2){
        echo "Wylosowana liczba $wylosowanaLiczba1, jest mniejsza od wylosowanej liczby $wylosowanaLiczba2!";
    }else{
        echo "Wylosowane liczby $wylosowanaLiczba1 i $wylosowanaLiczba2 są równe!";
    }
}
?>
</body>
</html>