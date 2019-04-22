<?php 

class Produto{
	$nome;
	$preco;
	$quantidadeEstoque;
	$marca;

 	

 	public function __contruct($tmpNome) 
 	{
	$this->nome = $tmpNome;
	}

	public function setNome($novoNome){

		$this->nome = $novoNome;
	}
	public function getNome(){

		return $this->nome;
	}
/*
    public function __contruct(dataVenda) 
    {
	
	}
    public function __contruct(produtos) 
    {
	
	}
	public function __contruct(valorPago) 
	{
	
	}
	*/
}

 ?>