<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie zamówienia</title>
</head>
<body>
    <?php
    $paczkow=$_POST['paczkow'];
    $grzebieni=$_POST['grzebieni'];
    $suma=0.99*$paczkow+1.29*$grzebieni;
echo<<<END
        <h2>Podsumowanie zamówienia</h2>
        <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Pączke (0.99 PLN/szt)</td><td>$paczkow</td>
        </tr>
        <tr>
            <td>Grzebień (1.29 PLN/szt</td><td>$grzebieni</td>
        </tr>
        <tr>
            <td>Suma</td><td>$suma PLN</td>
        </tr>
        </table>
        <br><a href="index.php">Powrót do strony głównej</a>
END;
    ?>
</body>
</html>