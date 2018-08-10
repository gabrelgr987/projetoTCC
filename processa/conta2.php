<?php
    session_start();
    if(isset($_SESSION['loginC']) && isset($_SESSION['rmC']))
    {
        include('conexao.php');
        session_start();
        
        //VARIÁVEIS
        $logUser = $_POST['loginC'];
        $rmUser = $_POST['rmC'];

        //PEGAR DO BANCO
        $query = "select * from ftpuser where userid = '$logUser' and userrm = $rmUser;";
        $logar = mysqli_query($conexao, $query);
        $campos = mysqli_fetch_array($logar);
        $login = $campos['userid'];
        $RM = $campos['userrm'];
        $email = $campos['useremail'];

        //VALIDAÇÃO DOS DADOS
        if(empty($logUser))
        {
            $erroUser = 1;
            echo "<script>if(confirm('O campo USUÁRIO está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
        }
        else
        {
            $erroUser = 0;
            if(empty($rmUser) || strlen($rmUser) != 5 || empty($RM))
            {
                $erroRM = 1;
                if(empty($rmUser))
                {
                    echo "<script>if(confirm('O campo RM está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
                }
                else
                {
                    echo "<script>if(confirm('O campo RM não corresponde à um RM verdadeiro')){history.back();}else{document.location.href = '../index.php';};</script>";
                }
            }
            else
            {
                $erroRM = 0;
                if($email != "a@a")
                {
                    $erroEmail = 1;
                    echo "<script>if(confirm('Sua conta já foi cadastrada')){history.back();}else{document.location.href = '../index.php';};</script>";
                }
                else
                {
                    $erroEmail = 0;
                }
            }
        }

        //VERIFICAÇÃO DE PREENCHIMENTO TOTAL
        if($erroUser == 0 && $erroRM == 0 && $erroEmail == 0)
        {
            $_SESSION['aluno'] = $login;
            $_SESSION['rm'] = $RM;
            header("location: ../confirmar.php");
        }
        mysqli_close($conexao);
    }
    else
    {
        header("location:../index.php");
    }
?>