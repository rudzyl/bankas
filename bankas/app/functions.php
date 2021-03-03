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
function getNextId() : int {
    $asmensKodas = substr(str_shuffle(str_repeat('0123456789', mt_rand(1,18))), 1, 18);
    if(!file_exists(DIR. 'data/indexes.json')) { 
        $index = json_encode(['id' => $asmensKodas]);
        file_put_contents(DIR. 'data/indexes.json', $index);
    }
    $index = file_get_contents(DIR. 'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $asmensKodas;
    $index = json_encode($index);
    file_put_contents(DIR. 'data/indexes.json', $index);
    return $id;
}
