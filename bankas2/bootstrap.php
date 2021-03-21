<?php
session_start();

define('URL','http://localhost/bankas/bankas2/');
define('INSTALL_DIR', '/bankas/bankas2/');
define('DIR', __DIR__.'/');

require DIR. 'vendor/autoload.php';


_d($_SESSION, 'SESIJA<-----');

