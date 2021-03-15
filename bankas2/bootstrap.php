<?php
session_start();

define('URL','http://localhost/bankas/bankas2/');
define('INSTALL_DIR', '/bankas/bankas2/');
define('DIR', __DIR__.'/');

require DIR. 'app/UserController.php';
require DIR. 'app/Json.php';
require DIR. 'app/User.php';

_d($_SESSION, 'SESIJA<-----');

