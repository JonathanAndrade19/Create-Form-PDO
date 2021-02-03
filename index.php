<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body> 
    <div class="container">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="cadastro_msg.php" method="POST">
            <div class="form">
                <label>Nome:</label>
                <input name="nome" type="text" placeholder="Ex: Jonathan Moreira">
                
                <label>E-mail:</label>
                <input name="email" type="email" placeholder="Ex: jonathan@email.com">
                
                <label>Assunto:</label>
                <input name="assunto" type="text" placeholder="Ex: Assunto da Mensagem">
                
                <label>Mensagem:</label>
                <textarea name="mensagem" id="" cols="50" rows="3"></textarea>

                <input name="cadastro" type="submit" value="Cadastrar">
            </div> 
        </form>
    </div> 
</body>
</html>