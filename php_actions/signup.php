<?php
session_start();
//CONEXAO 
include_once 'db_connect.php';
function clear($input){
    global $con;
    //sql
    $var = mysqli_escape_string($con, $input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}
if(isset($_POST['btn-registrar'])){
   //RECCOLHE TODOS OS DADOS DO FORMULARIO
    $login = clear($_POST['login']);
    $email = clear($_POST['email']);
    $genero = clear($_POST['genero']);
    $senha1 = clear($_POST['senha1']);
    $senha2 =clear($_POST['senha2']);
    //CASO ALGUM DOS DADOS ESTEJA EM FALTA
    if((empty($login) || empty($email)) || (empty($genero) || (empty($senha1) || empty($senha2)))){
        $_SESSION['mensagem'] = 'Preencha todos os campos para registrar!';
        header('Location: ../index.php');
    }else{ 
        //VERIFICA SE AS SENHAS SAO DIFERENTES
        if($senha1 !== $senha2){
            $_SESSION['mensagem'] = ' Digitou senhas diferentes';
            header('Location: ../index.php');
           }elseif(strlen($login) < 4){
                $_SESSION['mensagem'] = 'Login deve ter no minimo de 4 caracteres!';
                header('Location: ../index.php');
           }else if(strlen($senha1) < 8){
                $_SESSION['mensagem'] = 'Senha deve ter no minimo de 8 caracteres!';
                header('Location: ../index.php');
           }else{
                $sqlLOGIN ="SELECT login, email FROM usuarios WHERE login = '$login'";
                $sqlEMAIL ="SELECT email FROM usuarios WHERE email = '$email'";
                $resultadoLOGIN = mysqli_query($con, $sqlLOGIN);
                $resultadoEMAIL = mysqli_query($con, $sqlEMAIL);

                //VERIFICA SE O LOGIN JA EXISTE
                if(mysqli_num_rows($resultadoLOGIN) > 0){
                    $_SESSION['mensagem'] = 'Login já foi registrado';
                    header('Location: ../index.php');
                }elseif(mysqli_num_rows($resultadoEMAIL)){
                    $_SESSION['mensagem'] = 'Email já foi registrado';
                    header('Location: ../index.php');
                }else{
                    $senha = md5($senha2);
                    $sql = "INSERT INTO usuarios (login, senha, genero, email) VALUES ('$login', '$senha', '$genero', '$email')";
                if(mysqli_query($con, $sql)){
                    $_SESSION['sucesso'] = 'Conta criada com sucesso!';
                    header('Location: ../index.php');
                }else{
                    $_SESSION['mensagem'] = 'Hove um erro a criar conta! :'. mysqli_error($con);
                    header('Location: ../index.php');
                }
                }

                
                
           }
        
    }
}

?>