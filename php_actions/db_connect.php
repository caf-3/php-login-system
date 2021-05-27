<?php
define('SERVERNAME', 'sql310.epizy.com');
define('USERNAME', 'epiz_24701584');
define('PASSWORD','awr2C6Yom04');
define('DBNAME','epiz_24701584_loginsystem');
$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if(!$con){
    die('Houve um erro ao conectar a base de dados '. mysqli_connect_error());
}


?>