 <?php

    require './Create.class.php"';
    
    $nome = $_POST['NomeCompleto'];
    $nascimento = $_POST['DataNascimento'];
    $time = $_POST['Time'];
    $sexo = $_POST['Sexo'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    
    $c = new Create();
    $c->Inserir($nome, $nascimento, $time, $sexo, $email, $senha);    
?>
