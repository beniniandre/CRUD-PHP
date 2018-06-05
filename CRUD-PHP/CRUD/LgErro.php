<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="../CSS/Visual.css"  rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
        <meta charset="UTF-8">
        <title>CRUD PHP</title>
        <script type="text/javascript">
            function AbrePagina(l) {
                location.href = l;
            }
        </script>
    </head>
    <body>
        <h1 class="titulo">CRUD - PHP</h1>
        <?php
        ?>
        <section class="login">
             <h2 id="errolg"><img id="ime" src="../Imagens/ERRO.png" align="absbottom"/> ATENÇÃO! UM OU MAIS DADOS FICARAM IMCOMPLETOS. PREENCHA TODOS OS DADOS!</h2>
            <form action="Classes/Login.php" method="POST">
                <div class="form-group">
                    <br>
                    <label class="la" id="l2"><b>E-mail:</b></label><br>
                    <input type="email" name="email" id="email" autofocus placeholder="Digite o seu E-mail...">
                    <br><br>
                    <label class="la"><b>Senha:</b></label><br>
                    <input type="password"  name="password" id="pwd" placeholder="Digite a sua Senha...">
                </div>
                <button type="submit"  id="b1" class="button">LOGIN</button>
            </form>   
            <button type="button" id="b2" class="button" onclick="AbrePagina('Cadastro.php')">NÃO É CADASTRADO? CADASTRE-SE AGORA</button>
        </section>
        <footer>Desenvolvido por André Benini - Github :  <img  class="im" src="../Imagens/GH.png" align="absbottom"/> 
            <a class="link1" href="http://www.github.com/beniniandre">beniniandre</a> | Twitter  :  <img class="im" src="../Imagens/TW.png" align="absbottom"/> 
            <a class="link2" href="http://www.twitter.com/beniniandre" >@beniniandre
            </a><br>andreluis_benini@hotmail.com</footer>
    </body>
</html>
