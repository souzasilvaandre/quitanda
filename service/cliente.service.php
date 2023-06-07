<?php
class ClienteService
{
    private $conexao;
    private $cliente;

    public function __construct(Cliente $cliente, Conexao $conexao)
    {
        $this->cliente = $cliente;
        $this->conexao = $conexao->conectar();
    }

    public function inserir()
    {
        $query = "insert into clientes (nome, cpf, dtNas, email, telefone, cep, endereco, numero, complemento, referencia, senha) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->cliente->__get('nome'));
        $stmt->bindValue(2, $this->cliente->__get('cpf'));
        $stmt->bindValue(3, $this->cliente->__get('dtNas'));
        $stmt->bindValue(4, $this->cliente->__get('email'));
        $stmt->bindValue(5, $this->cliente->__get('telefone'));
        $stmt->bindValue(6, $this->cliente->__get('cep'));
        $stmt->bindValue(7, $this->cliente->__get('endereco'));
        $stmt->bindValue(8, $this->cliente->__get('numero'));
        $stmt->bindValue(9, $this->cliente->__get('complemento'));
        $stmt->bindValue(10, $this->cliente->__get('referencia'));
        $stmt->bindValue(11, $this->cliente->__get('senha'));
        $stmt->execute();
    }
    public function recuperar()
    {
        $query = 'select select nome, cpf, dtNas, email, telefone, cep, endereco, numero, complemento, referencia, senha
        from clientes';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function recuperarCliente($id)
    {
        $query = 'select select nome, cpf, dtNas, email, telefone, cep, endereco, numero, complemento, referencia, senha
        from clientes where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function excluir()
    {
        $query = 'delete from clientes where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$this->cliente->__get('id'));
        $stmt->execute();
       
    }
    public function alterar()
    {
        $query = "update clientes set nome=?,cpf=?,dtNas=?,email=?,telefone=?,cep=?,endereco=?,numero=?,complemento=?,referencia=?,senha=? 
        where id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->cliente->__get('nome'));
        $stmt->bindValue(2, $this->cliente->__get('cpf'));
        $stmt->bindValue(3, $this->cliente->__get('dtNas'));
        $stmt->bindValue(4, $this->cliente->__get('email'));
        $stmt->bindValue(5, $this->cliente->__get('telefone'));
        $stmt->bindValue(6, $this->cliente->__get('cep'));
        $stmt->bindValue(7, $this->cliente->__get('endereco'));
        $stmt->bindValue(8, $this->cliente->__get('numero'));
        $stmt->bindValue(9, $this->cliente->__get('complemento'));
        $stmt->bindValue(10, $this->cliente->__get('referencia'));
        $stmt->bindValue(11, $this->cliente->__get('senha'));
        $stmt->execute();        
    }
    public function recuperarLoginCli($email,$senha){
        $query = 'select nome, cpf, dtNas, email, telefone, cep, endereco, numero, complemento, referencia, senha 
        from clientes where email = ? and senha = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1,$email);
        $stmt->bindValue(2,$senha);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); 
    }
}
?>