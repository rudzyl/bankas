<?php
function readData() : array {
    if(!file_exists(DIR. 'data/users.json')) {
        $data = json_encode([]);
        file_put_contents(DIR. 'data/users.json', $data);
    }
    $data = file_get_contents(DIR. 'data/users.json');
    return json_decode($data, 1);
}
function writeData(array $data) : void {
    $data = json_encode($data);
    file_put_contents(DIR. 'data/users.json', $data);
}
function getUser(int $id) : ?array {
    foreach(readData() as $user) {
        if($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}
function create(string $vardas, string $pavarde, int $asmensKodas) : void {
    $users = readData();
    $id = getNextId();
    $user = ['id' => $id, 'vardas' => $vardas, 'pavarde' => $pavarde, 'asmensKodas' => $asmensKodas, 'likutis' => 0];
    $users[] = $user;
    writeData($users);
}
function deleteUser(int $id) : void {
    $users = readData();
    foreach ($users as $key => $user) {
        if($user['id'] == $id) {
            unset($users[$key]);
            // irasoma kad istrinama deze
            writeData($users);
            return;
        }
    }
}

function add(int $id, int $suma) : void {
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    if($suma <= 0) {
        return;
    }
    $user['likutis'] += $suma;
    deleteUser($id);
    $users[] = $user;
    writeData($users);
}

function minus(int $id, int $minus) : void {
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    if($minus <= 0) {
        return;
    }
    $likutis = $user['likutis'];
    $poMinuso = (int) $likutis - (int) $minus;
    $poMinuso = (int) $poMinuso;
    if($poMinuso >= 0) {
        $user['likutis'] = $poMinuso;
        deleteUser($id);
        $users = readData();
        $users[] = $user;
        writeData($users);
    }  else {
        return;
    }
}


function getNextId() : int {
    if(!file_exists(DIR. 'data/indexes.json')) { 
        $index = json_encode(['id' => 1]);
        file_put_contents(DIR. 'data/indexes.json', $index);
    }
    $index = file_get_contents(DIR. 'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR. 'data/indexes.json', $index);
    return $id;
}
