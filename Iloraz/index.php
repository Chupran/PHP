<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iloraz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie 4</h1>
<p>Napisz program, który oblicza i wyświetla iloraz 2 liczb rzeczywistych z dokładnością do dwóch miejsc po przecinku. Eryk Czuchran</p>
<form action="index.php" method="post">
    <label>
        Podaj A:<input type="text" name="A">
    </label>
    <label>
        Podaj B:<input type="text" name="B">
    </label>
    <label>
        <input type="submit" value="Wyślij!">
    </label>
</form>
<span>
    <?php
    if(isset($_POST['B'])){
        $A=(double)$_POST['A'];
        $B=(double)$_POST['B'];
        if($B==0){
            echo "Pamiętaj cholero, nigdy nie dziel przez 0!";
        }else{
            $wynik=round($A/$B, 2);
            echo "Iloraz tych dwóch liczb z dokładnością do dwóch liczb po przecinku wynosi: $wynik";
        }
    }
    ?>
</span>
</body>
</html>
