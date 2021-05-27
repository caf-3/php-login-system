<?php
define('SERVERNAME', '');
define('USERNAME', '');
define('PASSWORD','');
define('DBNAME','');
$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if(!$con){
    die('Houve um erro ao conectar a base de dados '. mysqli_connect_error());
}


?>