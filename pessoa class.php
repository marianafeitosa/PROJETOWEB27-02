<?php

//Classe
public class Pessoa(){
//Atríbutos
private $nome;
private $endereco;
private $bairro;
private $cep;
private $cidade;
private $estado;

//Método GET
public function getNome(){
  return $this->nome;
}

//Método SET
public function setNome($nome){
    $this->nome = $nome;
}

/*
.
.
.
Deve-se colocar todos os métodos GET e SET correspondente a classe Pessoal()
*/
}


?>
