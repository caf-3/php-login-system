<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <!--MATERIALIZE CSS-->

    <link rel="stylesheet" href="css/materialize.min.css">
    <!--MATERIAL ICONS-->

    <link rel="stylesheet" href="css/material-design-icons-3.0.1/iconfont/material-icons.css">

    
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- FACEBOOK SEO-->
    <meta property="og:url"                content="LINK DA PAGINA" />
<meta property="og:type"               content="file" />
<meta property="og:title"              content="Sistema login" />
<meta property="og:description"        content="Cadastre-se e faça login nesse simples sistema de login" />
<meta property="og:image"              content="img/SEO.jpg" />
    <!--END FACEBOOK SEO-->
</head>
<body>
    <?php
    if(isset($_SESSION['mensagem'])){
        ?>
        <script>
        window.onload = function(){
            M.toast({
        html : "<?php echo  "<i class='material-icons'>block</i> ".$_SESSION['mensagem']; unset($_SESSION['mensagem']) ?>",
        classes : "erro"
    })
        }
        </script>
    <?php
    }elseif(isset($_SESSION['sucesso'])){
        ?>
        
        <script>
        window.onload = function(){
            M.toast({
        html : "<?php echo "<span class='sucesso'><i class='material-icons green-text'>done</i>". $_SESSION['sucesso']. '</span>'; unset($_SESSION['sucesso']) ?>",
        classes : "sucesso"
    })
        }
        </script>
        <?php
    }
    ?>
    <!--#f89302-->
   <main class='row container'>
       <section class='col s12 m10 offset-m1 white-text'>

          <div class="row">

            <ul class="tabs white-text">
                <li class="tab col s12 m5 "><a href="#login" class="active">login</a></li>
                <li class="tab col s12 m5 offset-m2"><a href="#registrar">Registrar</a></li>
            </ul>
            <!-- TAB ENTRAR -->
            <div class="col s12" id="login">

                <div class="row col s12">

                    <section class="col m6 hide-on-small-only imagem">
                        <img src="img/login.png" class="responsive-img">
                    </section>

                    <section class="col s12 m6">
                        <!--formulario-->
                        <form action="php_actions/login.php" method="POST">

                            <div class="row col s12">

                                <div class="input-field">
                                    
                                    <i class="material-icons prefix black-text tiny">perm_identity</i>
                                    <input type="text" id="loginE" name="login">
                                    <label for="loginE">Login</label>

                                </div>
                                <div class="input-field">

                                    <i class="material-icons black-text prefix">vpn_key</i>
                                    <input type="password" id="senha" name="senha">
                                    <label for="senha">Senha</label>
                                </div>

                                <div class="col s6 offset-s3 m4 offset-m4">
                                    <button type="submit" name="btn-entrar" class="btn grey waves-effect waves-teal">Entrar</button>
                                </div>
                            </div>
                        </form>

                    </section>
                </div>
            </div>

            <!--TAB REGISTRAR-->
            <div class="col s12" id="registrar">
                <div class="row col s12">

                    <section class="col m6 hide-on-small-only">
                        <img src="img/registrar.png" class="responsive-img imagem">
                    </section>

                    <section class="col s12 m6">
                        <!--formulario-->
                        <form action="php_actions/signup.php" method="POST">

                            <div class="row col s12 registrar">

                                <div class="input-field">
                                    
                                    <i class="material-icons prefix black-text tiny">perm_identity</i>
                                    <input type="text" id="loginR" name="login" >
                                    <label for="loginR">Login</label>

                                </div>
                                <div class="input-field">

                                    <i class="material-icons black-text prefix">email</i>
                                    <input type="email" id="email" name="email">
                                    <label for="email">Email</label>
                                </div>
                                <p class="grey-text"><i class="material-icons prefix black-text">supervisor_account</i> Genero :</p>
                                <p id="genero">
                                    <label>
                                        <input type="radio" name="genero" class="with-gap" value="masculino">
                                        <span>Masculino</span>
                                    </label>
                                    
                                    <label>
                                        <input type="radio" name="genero" class="with-gap" value="femenino">
                                        <span>femenino</span>
                                    </label>
                                </p>
                                <div class="input-field">

                                    <i class="material-icons black-text prefix">vpn_key</i>
                                    <input type="password" id="senha1" name="senha1">
                                    <label for="senha1">Senha</label>
                                </div>
                                <div class="input-field">

                                    <i class="material-icons black-text prefix">vpn_key</i>
                                    <input type="password" id="senha2" name="senha2">
                                    <label for="senha2">confirmar senha</label>
                                </div>
                                <div class="col  s6 offset-s3 m4 offset-m4">
                                    <button type="submit" name="btn-registrar" class="btn grey waves-effect waves-teal">Registrar</button>
                                </div>
                            </div>
                        </form>

                    </section>
                </div>

            </div>
          </div>
       </section>
   </main>

    <!--Jquery-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!--MATERIALIZE Js-->
    <script src="js/materialize.min.js"></script>
    <!--Csutom JS-->
    <script src="js/script.js"></script>
</body>
</html>