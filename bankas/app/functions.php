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

function create(string $vardas, string $pavarde, int $asmensKodas) : void {
    $users = readData();
    $id = getNextId();
    $user = ['id' => $id, 'vardas' => $vardas, 'pavarde' => $pavarde, 'asmensKodas' => $asmensKodas, 'likutis' => 0];
    $users[] = $user;
    writeData($users);
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
