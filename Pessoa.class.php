<?php 
class Pessoa{
	public $nome;
	public $sobrenome;
	public $idade;

	//Dentro dos parametros passamos os vlrs
	function __construct($nome,$sobrenome,$idade){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->idade = $idade;
	}

	public function correr(){
		echo $this->nome. ", esta correndo."."\n";
	}

	//Metodo destrutor
	function __destruct(){
		echo "O objeto ".$this->nome.", foi destruido."."\n";
	}
}
?>