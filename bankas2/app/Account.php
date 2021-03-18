<?php


class Account {

    public function add(int $id) {
    
    $users = Json::getDB()->readData();
    $user = Json::getDB()->getUser($id);
    require DIR.'views./pridetiLesas.php';
    }

    public function pridetiLesas(int $id) : void {

    $user = Json::getDB()->getUser($id);
    $pridetiLesas = ($_POST['pridetiLesas'] ?? 0);
    $suapvalinti = round($pridetiLesas, 2);
    if($suapvalinti <= 0) {
        return;
    }
    $user->likutis += $suapvalinti;
    Json::getDB()->update($user);
    header('Location: '.URL);
    die;
    }
}