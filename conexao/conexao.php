<?php
class Conexao
{
    private $host = 'localhost';
    private $dbname = 'quitanda';
    private $user = 'root';
    private $pass = '';

    public function conectar()
    {
        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            return $conexao;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        ;
    }
}
?>