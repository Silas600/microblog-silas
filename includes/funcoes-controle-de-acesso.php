<?php // funcoes-controle-de-acesso.php

/* Sessões (SESSIONS) no PHP 
Funcionalidade usuda para o controle de acesso à determinadas
páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/ aluno etc.

Nestas áreas o acesso de dá através de alguma forma de autentificação. Exemplos: login/senha, biometria, facial, 2-fatores etc */


/* Verificando se não existe uma sessão em andamento */
if( !isset($_SESSION)){
        // SE não tiver, então iniciamos uma sessão
        session_start();
}

/* Proteger o acesso ás páginas da áre administrativa */
function verificarAcesso(){

    /* Se NÃO EXISTIR uma variável de sessão chamada "id", então significa que o usuário não está logado. */
    if( !isset($_SESSION['id'])){

        /*  Portanto, destruímos qualquer resquício de sessão*/
        session_destroy();

        /* Fazemos o usuário ir para  */
        header("location:../login.php?acesso_negado");
        die();
    }
}

/* Função que será usada pelo formulário login.php */
function login($id, $nome, $tipo){
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}

function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    die();
}

/* Verificar o nível/privilégio de acesso do usuário
*/

function verificarNivel(){
    if($_SESSION['tipo'] !== 'admin'){
        /* Então, redirecione para a página nao-autorizado.php */
        header("location:nao-autorizado.php");
        die();
    }
}