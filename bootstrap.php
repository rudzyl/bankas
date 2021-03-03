<?php
session_start();

define('URL', 'http://localhost/bankas/');
define('DIR', __DIR__.'/');
require DIR. 'app/functions.php';

_d($_SESSION, 'SESIJA<-----');

?>