<?php 
include dirname(__DIR__).'/vendor/autoload.php';
use  App\Controller\IndexController;
use  App\Controller\ProductController;
//$c = new IndexController();
//$c->indexAction();
//$c->loginAction();
$p = new ProductController();
$p->listAction();