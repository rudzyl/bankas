<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/menu.php' ?>
  <br></br>
    <table class="table">
    
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavarde</th>
        <th scope="col">Asmens kodas</th>
        <th scope="col">ID</th>
        <th scope="col">Likutis</th>
      </tr>
    </table>
    <table class="table"> 
      <?php foreach($users as $user) : ?>
        
          <li scope="row">
            <?= $user->vardas ?>
            <?= $user->pavarde ?>
            <?= $user->asmensKodas ?>
            <?= $user->asmeninisId ?>
            <?= $user->likutis ?>
            <div class="btn" role="group" aria-label="Basic mixed styles example">
            
              <a href="<?= URL ?>pridetiLesas/<?= $user->id ?>" type="button" class="btn btn-success" >prideti lėšų</a>
              <a href="<?= URL ?>withdraw/<?= $user->id ?>" type="button" class="btn btn-warning">nuskaičiuoti lėšas</a>

              <form style="display:inline-block;" action="<?= URL ?>delete/<?= $user->id ?>" method="post">
                <button type="submit" class="btn btn-outline-danger">DELETE</button>
              </form>
            </div>
          </li> 
          
          
        <?php endforeach ?>
      </li>
    </table>
  
  <br></br>
  <?php require DIR.'views/bottom.php' ?>