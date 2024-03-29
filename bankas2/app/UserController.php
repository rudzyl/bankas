<?php
namespace App;
use App\Json;
use App\User;

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
        $user->asmensKodas = $this->tikrintiId ((string) ($_POST['asmensKodas'] ?? ''));
        $user->asmeninisId = UserController::saskaitosNumeris();
        $user->likutis = (int) ($_POST['pridetiPinigus'] ?? 0);

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
    public function add(int $id) {
    
        $users = Json::getDB()->readData();
        $user = Json::getDB()->getUser($id);
        require DIR.'views./pridetiLesas.php';
        }
    
        public function pridetiPinigus(int $id) {
    
        $user = Json::getDB()->getUser($id);
        $pridetiLesas =(float) ($_POST['pridetiPinigus'] ?? 0);
         $suapvalinti = round($pridetiLesas, 2);
         if($suapvalinti <= 0) {
             return;
         }
        $user->likutis += $suapvalinti;
        Json::getDB()->update($user);
        header('Location: '.URL);
        die;
        }
        public function withdraw(int $id)
    {
        $users = Json::getDB()->readData();
        $user = Json::getDB()->getUser($id);
        require DIR.'views/withdraw.php';
    }

    public function nuskaiciuotiPinigus(int $id) : void {
    
        $user = Json::getDB()->getUser($id);
        $withdraw = (float) ($_POST['nuskaiciuotiPinigus'] ?? 0);
        $withdrawRound = round($withdraw, 2);
        if($withdraw <= 0) {
            return;
        }
        $likutis = $user->likutis;
        $afterWithdraw = $likutis - $withdrawRound;
        $afterWithdrawRound = round($afterWithdraw, 2);
         if($afterWithdraw >= 0) {
             $user->likutis = $afterWithdrawRound;
             Json::getDB()->update($user);
         }  else {
             return;
         }
        header('Location: '.URL);
        die;
    }
    public static function saskaitosNumeris() : string {
    
        $numeris = '01';
        $bankoKodas = '88000';
        $betkoksSkaicius = '';
        for($i = 0; $i <= 10; $i++) {
            $rand = (string) rand(0, 9);
            $betkoksSkaicius .= $rand;
        }
        $saskaitosNumeris = 'LT' . $numeris . $bankoKodas . $betkoksSkaicius;
        $saskaitosNumeris = (string) $saskaitosNumeris;
        return $saskaitosNumeris;
    }
    private function tikrintiId(string $zmogausId) {

        $users = Json::getDB()->readData();
        foreach($users as $user) {
            if($user->zmogausId == $zmogausId || strlen($zmogausId) < 11) {
                header('Location: '.URL);
                die;
                return;
            } else {
                return $zmogausId;
            }
        }
    }
}