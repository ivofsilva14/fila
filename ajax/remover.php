<?php
session_start();
require '../vendor/autoload.php';
$controller = new app\controller\Controller();

$pilha = isset($_SESSION['session_pilha'])?$_SESSION['session_pilha']:'';


if($controller->verifica_pilha($pilha) == true)
{
	$_SESSION['session_pilha'] = $controller->remover_pilha($pilha);
	$dados['sucesso'] = (string) '1';
}
else
{
	$dados['sucesso'] = (string) '0';
}

echo json_encode($dados);
?>