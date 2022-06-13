<?php 
include dirname(__DIR__).'/vendor/autoload.php';
use  App\Controller\IndexController;
$c = new IndexController();
$c->indexAction();
//$c->loginAction();
