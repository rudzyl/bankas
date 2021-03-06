<?php
require __DIR__. '/bootstrap.php';
_d(readData());



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
  <title>Saskaitu Sarasas</title>
</head>
<body>
  <div class="topnav">
      <a href="<?= URL ?>saskaituSarasas.php">Pagrindinis</a>
      <a href="<?= URL ?>saskaitosSukurimas.php">Sukurti nauja saskaita</a>
      <a href="<?= URL ?>pridetiLesas.php">Prideti lesas</a>
      <a href="<?= URL ?>nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
  </div>

  <br></br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavarde</th>
        <th scope="col">Asmens kodas</th>
        <th scope="col">ID</th>
        <th scope="col">Likutis</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
      <?php foreach(readData() as $user) : ?>
          <th scope="row"><?= $user['id'] ?></th>
          <td><?= $user['vardas'] ?></td>
          <td><?= $user['pavarde'] ?></td>
          <td><?= $user['asmensKodas'] ?></td>
          <!-- <td><?= $user[''] ?></td> -->
          <td><?= $user['likutis'] ?></td>
          <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href = "" type="button" name="istrinti">ištrinti</a>
            <a href="<?= URL ?>pridetiLesas.php?id=<?= $user['id'] ?>" type="button" class="pr" name="prideti">prideti lėšų</a>
            <a href="<?= URL ?>nuskaiciuotiLesas.php?id=<?= $user['id'] ?>" type="button" class="nu" name="nuskaiciuoti">nuskaičiuoti lėšas</a>
          </div>
          </td>
        <?php endforeach ?>
      </tr>
    </tbody>
  </table>
  <br></br>
  
</body>
</html>