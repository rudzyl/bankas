<?php
require __DIR__. '/bootstrap.php';
 $randSaskaita = substr(str_shuffle(str_repeat('0123456789', mt_rand(1,18))), 1, 18);
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vardas = (string) $_POST['vardas'] ?? 'nera';
    $pavarde = (string) $_POST['pavarde'] ?? 'nera';
    $asmensKodas = (string) $_POST['asmensKodas'] ?? '00000000000';
    $likutis = $_POST['likutis'] ?? 0;
    create($vardas, $pavarde, $asmensKodas, $likutis); 
    header('Location: '.URL);
    die;
}

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
        <a href="<?= URL ?>saskaituSarasas.php">Pagrindinis</a>
        <a href="<?= URL ?>saskaitosSukurimas.php">Sukurti nauja saskaita</a>
        <a href="<?= URL ?>pridetiLesas.php">Prideti lesas</a>
        <a href="<?= URL ?>nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
    </div>
    <form action="<?= URL ?>saskaitosSukurimas.php" method="post">
        <h4>Įveskite vardą</h4>
        <input type="text" name="vardas"></input>
        <h4>Įveskite pavardę</h4>
        <input type="text" name="pavarde"></input>
        <h4>Jūsų sąskaitos numeris yra</h4>
        <input type="text" name="saskaitos numeris" value= <?= $randSaskaita ?> readonly></input>
        <h4>Įveskite asmens kodą</h4>
        <input type="text" name="asmensKodas"></input>
        <br></br><br>
        <button type="submit">SUKURTI</button>
        </br>
    </form>
</body>
</html>