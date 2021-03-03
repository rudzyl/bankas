<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $lesos = (float)($_POST['lesos'] ?? 0); //jei x nera defoltine reiksme 0
  $lesuPridejimas = (float)($_POST['lesuPridejimas'] ?? 0);
  $suma = $lesos + $lesuPridejimas;
  $_SESSION['lesos'] = $suma;
  header('Location: http://localhost/bankas/pridetiLesas.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Prideti Lesas</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="saskaituSarasas.php">Pagrindinis</a>
        <a href="saskaitosSukurimas.php">Sukurti nauja saskaita</a>
        <a href="pridetiLesas.php">Prideti lesas</a>
        <a href="nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavarde</th>
        <th scope="col">Saskaitos Likutis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Lina </td>
        <td>Liniene</td>
        <td type="text" name="lesos"><?= $suma ?? '' ?></td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="" method="post">
                <input type="text" name="lesuPridejimas"></input>
                <button type="submit">prideti lėšų</button>
            </form>
        </div>
        </td>
      </tr>
    </tbody>
  </table>
    
</body>
</html>