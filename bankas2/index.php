<?php
require __DIR__. '/bootstrap.php';
$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

 _d($uri);

 if ('' == $uri[0]) {
    // naujas objektas ir iskvieciama funkcija index
    (new UserController)->index();
}
elseif ('saskaitosSukurimas' == $uri[0]) {
    (new UserController)->saskaitosSukurimas();
}
elseif ('store' == $uri[0]) {
    (new UserController)->store();
}
elseif ('pridetiLesas' == $uri[0]) {
    (new Account)->add((int)$uri[1]);
}
elseif ('pridetiLesas' == $uri[0]) {
    (new Account)->pridetiLesas((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new UserController)->delete((int)$uri[1]);
}

