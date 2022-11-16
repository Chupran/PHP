<?php
$imię=$_POST["imię"];
echo "Witaj $imię na mojej stronie!<br>";
$tablica=[4];
$tablica[0]=$_POST["A"];
$tablica[1]=$_POST["B"];
$tablica[2]=$_POST["C"];
$tablica[3]=$_POST["D"];
$licznik=0;
for($i=0; $i<sizeof($tablica); $i++){
    if($tablica[$i]!="" && $tablica[$i]!=0){
        $licznik++;
    }
}
var_dump($tablica);
$suma=(integer)$tablica[0]+(integer)$tablica[1]+(integer)$tablica[2]+(integer)$tablica[3];
echo "<br>Suma podanych liczb wynosi $suma";
$średnia=((integer)$tablica[0]+(integer)$tablica[1]+(integer)$tablica[2]+(integer)$tablica[3])/$licznik;
echo "<br>Średnia tych liczb wynosi $średnia";