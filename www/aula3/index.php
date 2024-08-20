<?php

class Usuario {
    public int $id;

    public string $email;

    public string $cpf;

    public string $nome;

    public string $senha;

    public function __construct(int $id, string $email, string $cpf, string $nome, string $senha){
        $this->id = $id;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->senha = $senha;
    }
}

$usuario = new Usuario(1, 
$_POST['email'],
$_POST['cpf'],
$_POST['nome'],
$_POST['senha']);
echo "<pre>";

var_dump($usuario);


class Produto{
    public int $id;
    public string $produto;
    public string $estoque;
    public float $preco;
    public string $codBarras;
}

class Pedido{

    public int $id;

    public float $total;

    public \DateTime $data;
}

class ProdutoPedido{

    public int $quantidade;

    public Produto $produto;

    public Pedido $pedido;

}