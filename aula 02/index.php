<?php
include 'Produto.php';
ini_set('display_errors', 1);
$p1 = new Produto();
$p1->SetNome('tenis para corrida');
$p1->setPreco(200);
$p2 = new Produto();
$p2->SetNome('calça jeans');
$p2->setPreco(100);
echo $p2->getNome();
echo '<br>';
echo $p2->getPreco();