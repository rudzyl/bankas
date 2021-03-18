<?php
require __DIR__. '/bootstrap.php';
$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

 _d($uri);

 if ('' == $uri[0]) {
    // naujas objektas ir iskvieciama funkcija index
    (new App\UserController)->index();
}
elseif ('saskaitosSukurimas' == $uri[0]) {
    (new App\UserController)->saskaitosSukurimas();
}
elseif ('store' == $uri[0]) {
    (new App\UserController)->store();
}
elseif ('pridetiLesas' == $uri[0]) {
    (new App\UserController)->add((int)$uri[1]);
}
elseif ('pridetiPinigus' == $uri[0]) {
    (new App\UserController)->pridetiPinigus((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new App\UserController)->delete((int)$uri[1]);
}
elseif ('withdraw' == $uri[0]) {
    (new App\UserController)->withdraw((int)$uri[1]);
}
elseif ('nuskaiciuotiPinigus' == $uri[0]) {
    (new App\UserController)->nuskaiciuotiPinigus((int)$uri[1]);
}
