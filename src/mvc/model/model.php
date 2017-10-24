<?php
namespace app\model;
class Model
{
	private $pilha = '';
	
	public function getPilha()
    {
        return $this->pilha;
    }
	public function setPilha($novo_valor)
    {
        $this->pilha = $novo_valor;
    }
}
?>