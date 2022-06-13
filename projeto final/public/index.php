<?php 
include dirname(__DIR__).'/vendor/autoload.php';
use  App\Controller\IndexController;
use  App\Controller\ProductController;
use  App\Controller\CategoryController;
use  App\Controller\ErrorController;
$i = new IndexController();
$p = new ProductController();
$c = new CategoryController();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
echo $url;
switch ($url) {
case  '/':
    $i->indexAction();
    break;
case  '/login':
    $i->loginAction();
    break;
case  '/product':
    $p->listAction();
    break;
case  '/product/add':
    $p->addAction();
    break;
case  '/product/edit':
    $p->editAction();
    break;
case  '/category':
    $c->listAction();
    break;
case  '/category/add':
    $c->addAction();
    break;
case  '/category/edit':
    $c->editAction();
    break;
default:
  (new ErrorController)->notFoundAction();
}

$routes = [
    '/' => [
        'controller' => IndexController::class,
        'method' => 'indexAction'
    ]


];


