<?php 
ini_set('display_errors', 1);
include 'vendor/autoload.php';
use Classes\Config\Usuario as UsuarioConfig;
$us1 = new Classes\Usuario();
$us2 = new UsuarioConfig();
var_dump($us1);
var_dump($us2);