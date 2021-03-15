<?php
require __DIR__. '/bootstrap.php';
$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

 _d($uri);

 if ('' == $uri[0]) {
    // naujas objektas ir iskvieciama funkcija index
    (new UserController)->index();
}
elseif ('saskaitosSukurimas' == $uri[0]) {
    (new UserController)->create();
}
elseif ('store' == $uri[0]) {
    (new UserController)->store();
}


echo 'DURYS';

