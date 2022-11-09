<?php
//tablica asiosacyjne
$dane = array (
    array("nazwisko" => "Kowalski",
        "imię" => "Jan",
        "wiek" => 27),
    array("nazwisko" => "Czuchran",
        "imię" => "Eyk",
        "wiek" => 17),
    array("nazwisko" => "Grzegorz",
        "imię" => "Grzegżółka",
        "wiek" => 2137),
);
echo $dane[2]["imię"];
echo "<br>";
print_r($dane[0]["wiek"]);
echo "<br>";
var_dump($dane);
//Zmiana typu zmiennej
echo "<br>";
$liczba = 12.456;
$liczba_całkowita=(integer) $liczba;
echo "$liczba_całkowita <br>";