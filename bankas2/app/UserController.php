<?php

class UserController {

    public function index() {
        
        $users = Json::getDB()->readData();
        require DIR.'views/saskaituSarasas.php';
    }
    public function saskaitosSukurimas() {

        require DIR.'views/saskaitosSukurimas.php';
    }
    public function store() {

        $user = new User;
        $user->vardas = (string) ($_POST['vardas'] ?? '');
        $user->pavarde = (string) ($_POST['pavarde'] ?? '');
        $user->asmensKodas = (string) ($_POST['asmensKodas'] ?? '');
        $user->asmeninisId = (int) ($_POST['asmeninisId'] ?? '');
        $user->likutis = (float) ($_POST['likutis'] ?? '');

        Json::getDB()->store($user); // sukuria 
        header('Location: '.URL); //nukreipiama i index, kuris rodo visa bananu sarasa puslapi
        die;
        
    }
    public function delete(int $id)
    {
        Json::getDB()->delete($id);
        header('Location: '.URL);
        die;
    }


}