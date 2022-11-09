<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekarnia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div id="head">
            <h1>Zamówienie online</h1>
        </div>
    </header>
    <form action="order.php" method="post">
        Ile pączków(0.99 PLN/szt):
        <input type="text" name="paczkow"/>
        <br/><br/>
        Ile grzebieni(1.29 PLN/szt):
        <input type="text" name="grzebieni"/>
        <br/><br/>
        <input type="submit" value="Wyślij zamówienie"/>
    </form>
</body>
</html>