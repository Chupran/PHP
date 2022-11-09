<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma, różnica, iloczyn i iloraz</title>
</head>
<body>
<h1>Zadanie 5</h1>
<p>Napisz program, który oblicza sumę, różnicę, iloczyn i iloraz (całkowity - jak w C++) liczb całkowitych A i B. Eryk Czuchran</p>
<form action="index.php" method="post">
    <label>
        Podaj A:<input type="number" name="A">
    </label>
    <label>
        Podaj B:<input type="number" name="B">
    </label>
    <label>
        <input type="submit" value="Wyślij!">
    </label>
</form>
<?php
if(isset($_POST['B'])){
    $A=(int)$_POST['A'];
    $B=(int)$_POST['B'];
    $suma=$A+$B;
    $roznica=$A-$B;
    $iloczyn=$A*$B;
    if($B==0){
        $iloraz="Pamiętaj cholero, nigdy nie dziel przez 0!";
        $reszta_z_Dzielenia="Pamiętaj cholero, nigdy nie dziel przez 0!";
    }else{
        $iloraz=round($A/$B);
        $reszta_z_Dzielenia=$A%$B;
    }
    echo "Podane liczby to: $A i $B <br>";
    echo "Suma to: $suma <br>";
    echo "Różnica to: $roznica <br>";
    echo "Iloczyn to: $iloczyn <br>";
    echo "Iloraz to: $iloraz <br>";
    echo "Reszta z dzielenia to: $reszta_z_Dzielenia <br>";
}
?>
</body>
</html>
