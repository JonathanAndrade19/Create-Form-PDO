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
    <!-- Bulma Css -->
    <link rel="stylesheet" href="./css/bulma.min.css">
</head>
<body> 
    <div class="container is-max-desktop" id="nav">
        <?php if(isset($_SESSION['msg'])): ?>
            <div class="notification is-success is-light">
                <button class="delete"></button>
                <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                ?>
            </div>
        <?php endif;?>
        <form action="cadastro_msg.php" method="POST">
            <div class="notification is-primary box">
                <div class="field">
                    <label>Nome:</label>
                    <input class="input" name="nome" type="text" placeholder="Ex: Jonathan Moreira">
                </div>
                
                <div class="field">
                    <label>E-mail:</label>
                    <input class="input" name="email" type="email" placeholder="Ex: jonathan@email.com">
                </div>
                
                <div class="field">
                    <label>Assunto:</label>
                    <input class="input" name="assunto" type="text" placeholder="Ex: Assunto da Mensagem">
                </div>
                               
                <div class="field">
                    <label>Mensagem:</label>
                    <textarea class="textarea" name="mensagem" id="" cols="50" rows="3"></textarea>
                </div>

                <div class="field">
                    <input class="button" name="cadastro" type="submit" value="Cadastrar">
                </div>
            </div> 
        </form>
    </div>

    <footer class="footer">
        <div class="content has-text-centered">
            <label class="label">Formulário Criado Com <a href="https://bulma.io/">https://bulma.io/</a></label>
        </div>
    </footer>
    <script src="./js/main.js"></script>
</body>
</html>