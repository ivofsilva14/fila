<?php
session_start();
require '../vendor/autoload.php';
$controller = new app\controller\Controller();

$pilha = isset($_SESSION['session_pilha'])?$_SESSION['session_pilha']:'';

if($controller->verifica_pilha($pilha) == true)
{
	$menor = $controller->menor_valor($pilha);
	$dados['sucesso'] = (string) '1';
	$dados['menor'] = (string) $menor;
}
else
{
	$dados['sucesso'] = (string) '0';
}

echo json_encode($dados);

?>