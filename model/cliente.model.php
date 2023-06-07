<?php
class Cliente
{
    private $nome;
    private $cpf;
    private $dtNasc;
    private $email;
    private $telefone;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $referencia;
    private $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
?>