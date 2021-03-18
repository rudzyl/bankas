<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/menu.php' ?>
<div>
<p>Kliento Vardas: <?= $user->vardas?></p>
<p>Kliento Pavarde: <?= $user->pavarde?></p>
<!-- <p>Kliento Saskaitos Nr.: <?= $user->accountNum?></p> -->
<p>Kliento Saskaitos Likutis: <?= $user->likutis?>Eur</p>

    <form action="<?= URL ?>pridetiLesas/<?= $user->id ?>" method="post">
        <h4>Pridekite pinigus</h4>
        <input type="text" name="pridetiLesas" value="<?= $user->likutis ?>"></input>
        
        <br></br><br>
        <button type="submit">PRIDETI</button>
        </br>
    </form>
</div>
</body>
</html>