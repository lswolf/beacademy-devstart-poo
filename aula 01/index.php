<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';

$a1 = new Aluno();
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';


$p1 = new Professor();
$p1->nome = 'bruno';
$p1->cpf = '123.987.123-12';
$p1->salario = '5000.00'; // não sei porque que ta funcionando kkkkkkk

$d1 = new Disciplina();
$d1-> carga_horaria = '300';
$d1->professor = $p1;
$d1-> alunos = $a1;


$c1 = new Curso();
$c1->disciplina = $d1;
$c1-> carga_horaria = '300';
$c1-> custo = '2000.00';


 echo $a1->nome;
 echo '<br>';
 echo $d1->professor->nome;
 echo '<br>';
var_dump($p1);