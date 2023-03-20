<?php

    require_once('../banco/conexao.php');
    require_once('../service/user.service.php');
    require_once('../model/user.model.php');


    @$acao = isset($_GET['acao'])?$_GET['acao']:$acao;
    @$id = isset($_GET['id'])?$_GET['id']:$id;
    

    if($acao=='inserir') {
        $users = new Users();

        $users->__set('nome', $_POST['nome']);
        $users->__set('email', $_POST['email']);
        $users->__set('senha', $_POST['senha']);

        $conexao = new Conexao();

        $userService = new UsersService($users, $conexao);
        $userService->inserirUser();
        header('location: ../index.php');

    } elseif ($acao=='selecionar') {
        $users = new Users();
        $conexao = new Conexao();

        $userService = new UsersService($users, $conexao);
        $users = $userService->selecionar();


    } elseif ($acao=='logar') {
        $users = new Users();
        $conexao = new Conexao();

        $email = $_POST['email'];
		$senha = $_POST['senha'];

        $userService = new UsersService($users, $conexao);
        $users = $userService->selecionarUser($email, $senha);

        foreach($users as $indice => $us)
        {}

        if(isset($us)) {
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $us->id;
            $_SESSION['nome'] = $us->nome;
            $_SESSION['email'] = $us->email;
            $_SESSION['senha'] = $us->senha;

            header("location: ../index.php");
        } else {
            echo '<script>alert("Email ou senha incorretos  ");</script>
                <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../index.php?link=2&acao=selecionar">
            ';
        }



    }

?>