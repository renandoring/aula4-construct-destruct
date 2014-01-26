<?php 
include 'Pessoa.class.php';

$renan = new Pessoa("Renan","Doring",31);
$renan->nome = "Renan";
$renan->sobrenome = "Doring";
$renan->idade = 31;

$renan->correr();
//$renan->__destruct();
?>