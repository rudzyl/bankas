<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/menu.php' ?>

    <form action="<?= URL ?>store" method="post">
        <h4>Įveskite vardą</h4>
        <input type="text" name="vardas"></input>
        <h4>Įveskite pavardę</h4>
        <input type="text" name="pavarde"></input>
        <h4>Jūsų sąskaitos numeris yra</h4>
        <?php $randSaskaita = substr(str_shuffle(str_repeat('0123456789', mt_rand(1,18))), 1, 18); ?>
        <input type="text" name="saskaitos numeris" value= <?= $randSaskaita ?> readonly></input>
        <h4>Įveskite asmens kodą</h4>
        <input type="text" name="asmensKodas"></input>
        <br></br><br>
        <button type="submit">SUKURTI</button>
        </br>
    </form>
</body>
</html>