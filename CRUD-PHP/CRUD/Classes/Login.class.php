<?php

require_once "../../Conexao-e-Configuracao/Conexao.class.php";

class Login extends Conexao {

    private $email;
    private $senha;

    public function Logar($email, $senha) {
        $c = parent::getConn();
        $this->email = $email;
        $this->senha = $senha;
        $sql = "SELECT * FROM crudphp.crud_php where email = ? and senha = ?";
        $q = $c->prepare($sql);
        $q->execute(array($this->email, $this->senha));
        $res = $q->fetchAll();
        return $res;
    }
}
?>