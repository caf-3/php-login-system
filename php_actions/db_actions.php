<?php

define('SERVERNAME', 'sql310.epizy.com');
define('USERNAME', 'epiz_24701584');
define('PASSWORD','awr2C6Yom04');
define('DBNAME','epiz_24701584_loginsystem');
$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if(!$con){
    die('Houve um erro ao conectar a base de dados '. mysqli_connect_error());
}

/*
$sql = "CREATE DATABASE loginsystem";
if(mysqli_query($con, $sql)){
    echo "Base de dados criada com sucesso!";
}else{
    echo 'Houve um erro ao criar base de dados '. mysqli_error($con);
}

$sql = "CREATE TABLE usuarios(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(30) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    genero ENUM('masculino', 'femenino') NOT NULL,
    email VARCHAR(80) NOT NULL,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($con, $sql)){
    echo 'Tabela criada com sucesso!';
}else{
    echo "Houve um erro ao criar tabela ". mysqli_error($con);
}

$sql = "INSERT INTO usuarios (login, senha, genero, email) VALUES ('admin33', 'matsolo33', 'masculino', 'cafefantasma1@gmail.com')";
if(mysqli_query($con, $sql)){
    echo "Usuario inserido com sucesso!";
}else{
    die("Houve um erro ao inserir usuario". mysqli_error($con));
}
*/
?>