<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Saskaitos Sumavimas</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="saskaituSarasas.php">Pagrindinis</a>
        <a href="saskaitosSukurimas.php">Sukurti nauja saskaita</a>
        <a href="pridetiLesas.php">Prideti lesas</a>
        <a href="nuskaiciuotiLesas.php">Nuskaiciuoti lesas</a>
    </div>
    <br></br>
    <form action="" method="post">
        <h4>Įveskite vardą</h4>
        <input type="text" name="vardas">
        <h4>Įveskite pavardę</h4>
        <input type="text" name="pavarde">
        <h4>Įveskite sąskaitos numerį</h4>
        <input type="text" name="saskaitos numeris">
        <h4>Įveskite asmens kodą</h4>
        <input type="text" name="asmens kodas">
        <br>
        <button type="submit">SUKURTI</button>
        </br>
        
    </form>
</body>
</html>