<?php
// Parâmetros de acesso ao servidor
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_silas";

// Acessar a função de conexão ao servidor de BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificando a conexão
mysqli_set_charset($conexao, "utf8");

// Verificando a conexão
if($conexao === false){
    die("Erro: ".mysqli_connect_error());
} else{
    echo "Beleza, segue o Jogo...";
}