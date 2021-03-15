<?php
require __DIR__. '/bootstrap.php';
//POST scenarijus
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_GET['id'] ?? 0;
  $id = (int) $id;
  
  $likutis = $_POST['count'] ?? 0;
  $likutis = (int) $likutis;
  add($id, $likutis);
  header('Location: '.URL);
  die;

}
//GET scenarijus
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  $id = $_GET['id'] ?? 0;
  $id = (int) $id;
  $user = getUser($id);
  if(!$user) {
      // reik isvesti klaidos pranesima
      header('Location: '.URL); 
      die;
  }
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
        <a href="<?= URL ?>saskaituSarasas.php">Pagrindinis</a>
        <a href="<?= URL ?>saskaitosSukurimas.php">Sukurti nauja saskaita</a>
        <a href="<?= URL ?>pridetiLesas.php">Prideti lesas</a>
        <a href="<?= URL ?>nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavarde</th>
        <th scope="col">Asmens Kodas</th>
        <th scope="col">likutis</th>
      </tr>
    </thead>
      <tr>
        <th scope="row"><?= $user['id'] ?></th>
        <td><?= $user['vardas'] ?></td>
        <td><?= $user['pavarde'] ?></td>
        <td><?= $user['asmensKodas'] ?></td>
        <td><?= $user['likutis'] ?></td>
        <td>
        <form action="<?= URL ?>pridetiLesas.php?id=<?= $user['id'] ?>" method="post">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <input type="text" value = "<?= $user['likutis'] ?>" name="likutis"></input>
          <button type="submit">prideti lėšų</button>
        </div>
        </td>
      </tr>
    </form>
  </table>
    
</body>
</html>