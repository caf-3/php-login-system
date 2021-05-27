<?php
//CONEXAO
include_once './php_actions/db_connect.php';
session_start();
if(!isset($_SESSION['logado'])){
    $_SESSION['mensagem'] = 'Faça login primerio!';
    header('Location: index.php');
}else{
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT login FROM usuarios WHERE id ='$id'";
    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($resultado);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--MATERIALIZE CSS-->

    <link rel="stylesheet" href="css/materialize.min.css">
    <!--MATERIAL ICONS-->

    <link rel="stylesheet" href="css/material-design-icons-3.0.1/iconfont/material-icons.css">

    
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="orange">
    <main class="row">
        <div class="col s12 m6 offset-m3 card">
            <div class="card-content">
                <span class="card-title teal-text center-align">Bem vindo <?php echo $dados['login']?> </span>

                <p>Somente é um simples sistema de login.</p>
                <p class="orange-text">Obrigado por testares</p>
            </div>
            <div class="card-action center-align">
                <a class="modal-trigger" href="#sair"><i class="material-icons ">power_settings_new</i> Sair</a>
            </div>
            
        </div>
    </main>

    <!--MODAL -->
    <div class="modal" id="sair">
        <div class="modal-content">
            <h2 class="orange-text light">Deseja sair ?</h2>
            <div class="modal-footer">
                <a hrerf="#" class="modal-close btn-flat teal-text waves-effect waves-green">Não</a>
                <a href="logout.php" class="modal-close btn-flat red-text waves-effect waves-red">sim</a>
            </div>
        </div>
    </div>
<!--Jquery-->
<script src="js/jquery-3.4.1.min.js"></script>
    <!--MATERIALIZE Js-->
    <script src="js/materialize.min.js"></script>
    <!--Csutom JS-->
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        })
        
</script>
</body>
</html>