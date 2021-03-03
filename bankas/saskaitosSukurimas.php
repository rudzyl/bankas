<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Saskaitos Sumavimas</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="saskaituSarasas.php">Pagrindinis</a>
        <a href="saskaitosSukurimas.php">Sukurti nauja saskaita</a>
        <a href="pridetiLesas.php">Prideti lesas</a>
        <a href="nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
    </div>
    <form action="" method="post">
        <h4>Įveskite vardą</h4>
        <input type="text" name="vardas"></input>
        <h4>Įveskite pavardę</h4>
        <input type="text" name="pavarde"></input>
        <h4>Jūsų sąskaitos numeris yra</h4>
        <input type="text" name="saskaitos numeris" value= <?= $randSaskaita ?> readonly></input>
        <h4>Įveskite asmens kodą</h4>
        <input type="text" name="asmens kodas"></input>
        <br></br><br>
        <button type="submit">SUKURTI</button>
        </br>
    </form>
</body>
</html>