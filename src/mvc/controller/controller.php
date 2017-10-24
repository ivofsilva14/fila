<?php
namespace app\controller;

class Controller
{
	private $model;
	private $view;
	
	public function __construct()
    {
		$this->model = new \app\model\Model();
   	   	$this->view = new \app\view\View();
    }
 	public function exibe_pilha($array)
	{
		if(is_array($array))
		{
			$this->model->setPilha(implode(',',$array));
			$this->view->exibe($this->model->getPilha());
		}
	}
	public function inserir_pilha($valor,$pilha)
	{
		 if(is_array($pilha))
		 {
			$pilha[count($pilha)] = $valor;
			$array_pilha = $pilha;
		 }
		 else
		 {
			 $array_pilha[] = $valor;
		 }
		 return $array_pilha;
	}
	public function verifica_pilha($pilha)
	{
		 if(is_array($pilha))
		 {
			if(count($pilha) > 0)
				return true;
			else
				return false;
		 }
		 else
			 return false;
	}
	public function remover_pilha($pilha)
	{
		 if(is_array($pilha))
		 {
			unset($pilha[count($pilha)-1]);
			$array_pilha = $pilha;
		 }
		 else
		 {
			 $array_pilha = 0;
		 }
		 return $array_pilha;
	}
	public function menor_valor($pilha)
	{
		for($i = 0; $i < count($pilha); $i++)
		{
			if($i == 0)
			{
				$menor = $pilha[$i];
			}
			else
			{
				if($pilha[$i] < $menor)
					$menor = $pilha[$i];
			}
		}
		return $menor;
	}
}
?>