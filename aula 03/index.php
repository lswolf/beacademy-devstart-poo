<?php
include 'Produto.php';
include 'Categoria.php';
ini_set('display_errors', 1);
$c1 = new Categoria('Roupas','Roupas Unissex');
$c2 = new Categoria ('Roupas de banho', 'Toalhas e roupas de banho em geral');
$c3 = new Categoria ('calçados ', 'calçados em geral');
$p1 = new Produto('tenis para corrida', 200, $c3);
$p2 = new Produto('calça jeans', 100, $c1);
$p3 = new Produto('Toalha de Rosto', 20.8, $c2);
var_dump($p1);
echo '<br>';
var_dump($p2);
echo '<br>';
var_dump($p3);
echo '<br>';
var_dump($c1);
echo '<br>';
var_dump($c2);
echo '<br>';