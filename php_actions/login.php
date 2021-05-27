<?php
//CONEXAO 
include_once 'db_connect.php';
if(isset($_POST['btn-entrar'])){
    session_start();
    $login = mysqli_escape_string($con, $_POST['login']);
    $senha = mysqli_escape_string($con, $_POST['senha']);
    if(empty($login) || empty($senha)){
        $_SESSION['mensagem'] = 'Preencha os campos';
        header('Location: ../index.php');
    }else{
       //QUERY QUE VERIFICA SE O USUARIO ESTÁ NA BASE DE DADOS
       $sql = "SELECT login FROM usuarios WHERE login = '$login'";
       $resultado = mysqli_query($con, $sql);
       if(mysqli_num_rows($resultado) > 0){
           //QUERY QUE VERIFICA SE O USUARIO E A PALAVRA PASSE COMBINAM
           $senha = md5($senha);
           $sql = "SELECT login, senha, id FROM usuarios WHERE login ='$login' AND  senha ='$senha'";
           $resultado = mysqli_query($con, $sql);
           if(mysqli_num_rows($resultado) > 0){
               //VARIAVEL QUE ARMAZENA OS DADOS 
               $dados = mysqli_fetch_assoc($resultado);
               $_SESSION['logado'] = true;
               $_SESSION['id_usuario'] = $dados['id'];
               header('Location: ../home.php');
           }else{
               $_SESSION['mensagem'] = ' Login e Senha não conferem';
               header('Location: ../index.php');
           }

       }else{
           $_SESSION['mensagem'] = ' Usuario inexistente';
           header('Location: ../index.php');
       }

    }
}
?>