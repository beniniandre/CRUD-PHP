<?php

require_once "../../Conexao-e-Configuracao/Conexao.class.php";
class Create extends Conexao  {
   
    private $nome;
    private $nascimento;
    private $time;
    private $sexo;
    private $email;
    private $senha;
       
    public function Inserir($nome, $nascimento, $time, $sexo, $email, $senha){
        $c = parent::getConn();
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->time = $time;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->senha = $senha;
         $sql = "INSERT INTO crud_php (nome,nascimento,time,sexo,email,senha) values(?, ?, ?, ?, ?, ?)";
         $q = $c->prepare($sql);
         $q->execute(array($this->nome, $this->nascimento, $this->time, $this->sexo, $this->email, $this->senha));
    }
}
?>
