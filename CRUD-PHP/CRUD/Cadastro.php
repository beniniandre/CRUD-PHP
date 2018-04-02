<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CRUD PHP - CADASTRO</title>
    </head>
    <body>
        <?php
        require ("../Conexao-e-Configuracao/Config.php");
        ?>
        <form action="Classes/Create.php" method="POST">
            <label>Nome Completo:</label>
            <input type="text" name="NomeCompleto"/>
            <label>Data de Nascimento:</label>
            <input type="date" name="DataNascimento"/>
            <label>Time do Coração:</label>
            <select name="Time">
                <option>--</option>
                <option>Atlético-MG</option>
                <option>Botafogo</option>
                <option>Corinthians</option>
                <option>Cruzeiro</option>
                <option>Flamengo</option>
                <option>Fluminense</option>
                <option>Grêmio</option>
                <option>Internacional</option>
                <option>Palmeiras</option>
                <option>Santos</option>
                <option>São Paulo</option>
                <option>Vasco</option>
                <label>Sexo:</label>
            </select>
            <!--<input type="radio" name="Sexo" value="Masculino" id="masc"/><label>Masculino</label>
            <input type="radio" name="Sexo" value="Feminino" id="fem"/><label>Feminino</label> -->
            <label>Sexo:</label>
            <input type="text" name="Sexo"/>
            <label>E-mail:</label>
            <input type="email" name="Email" id="email"/>
            <label>Senha:</label>
            <input type="password" name="Senha" id="senha"/>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>
