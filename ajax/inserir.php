<?php
session_start();
require '../vendor/autoload.php';
$controller = new app\controller\Controller();

$valor = isset($_POST['item'])?$_POST['item']:'';
$pilha = isset($_SESSION['session_pilha'])?$_SESSION['session_pilha']:'';

if(empty($valor))
{
	$dados['sucesso'] = (string) '0';
}
else
{
	$_SESSION['session_pilha'] = $controller->inserir_pilha($valor,$pilha);
	$dados['sucesso'] = (string) '1';
}
echo json_encode($dados);
?>