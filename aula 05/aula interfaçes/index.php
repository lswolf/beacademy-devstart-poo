<?php
ini_set('display_errors', 1);
include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUSA.php';

$br = new ValidarBR();
$usa = new ValidarUSA();