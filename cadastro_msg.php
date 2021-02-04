<?php
session_start();
include_once 'conexao.php';

$cadastro = $_POST['cadastro'];
if($cadastro){
    // Recebendo Dados do Formulário.
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Inserindo BD!
    $resultadoConsulta = "INSERT INTO mensagens_contatos (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)";
    
    $insert_msg_cont = $conn->prepare($resultadoConsulta);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':email', $email);
    $insert_msg_cont->bindParam(':assunto', $assunto);
    $insert_msg_cont->bindParam(':mensagem', $mensagem);

    // var_dump();exit;
    if($insert_msg_cont->execute()){
        $_SESSION['msg'] = "<p>Mensagem enviada com sucesso</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = '<p style="color:red;"> Mensagem não foi enviada! </p>';
        header("location: index.php");
    }
}else{
    $_SESSION['msg'] = '<p style="color:red;"> Mensagem não foi enviada! </p>';
    header("location: index.php");
}