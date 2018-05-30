<?php
    include('conexao.php');
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $query = "select * from ftpadm where login = '$login' and passwd = '$senha'";
    $logar = mysqli_query($conexao, $query);
    $res = mysqli_fetch_array($logar);
    $login2 = $res['login'];
    $senha2 = $res['passwd'];
    $linha = mysqli_num_rows($logar);
    if($login == $login2 && $senha == $senha2)
    {
        session_start();
        $_SESSION['logado'] = 1;
        $_SESSION['usuario'] = $login;
        header("location:../cadastrar.php");
    }
    else
    {
        header("location:../index.php");
    }
    mysqli_close($conexao);
?>