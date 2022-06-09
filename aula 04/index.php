<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

ini_set('display_errors', 1);
$c1 = new Cliente ('lucas','lucas@lucas','75767867867','6478978978','25/25/5050');
$gg1 = new GestorGeral('lucas','lucas@lucas','75767867867','6478978978', 6000, 2000);

var_dump($c1);
echo '<br>';
var_dump($gg1);
echo '<br>';