<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/menu.php' ?>
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
      <?php foreach($users as $user) : ?>
          <th scope="row">1</th> 
          <td><?= $user->vardas ?></td>
          <td><?= $user->pavarde ?></td>
          <td><?= $user->asmensKodas ?></td>
          <td><?= $user->asmeninisId ?></td>
          <td><?= $user->likutis ?></td>
          <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href = "" type="button" name="istrinti">ištrinti</a>
            <a href="<?= URL ?>pridetiLesas/<?= $user->id ?>" type="button" class="pr" name="prideti">prideti lėšų</a>
            <a href="<?= URL ?>nuskaiciuotiLesas/<?= $user->id ?>" type="button" class="nu" name="nuskaiciuoti">nuskaičiuoti lėšas</a>
          </div>
          </td>
        <?php endforeach ?>
      </tr>
    </tbody>
  </table>
  <br></br>
  <?php require DIR.'views/bottom.php' ?>