 <?php

    require './Create.class.php"';
    
    $nome = $_POST['NomeCompleto'];
    $nascimento = $_POST['DataNascimento'];
    $time = $_POST['Time'];
    $sexo = $_POST['Sexo'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    
    if($nome == null || $nascimento == null || $time == null || $sexo == null || $email == null || $senha == null){
        include ("../Cadastro.php");
    } else {
    $c = new Create();
    $c->Inserir($nome, $nascimento, $time, $sexo, $email, $senha);    
    include("../CadSucesso.php");
    }
?>
