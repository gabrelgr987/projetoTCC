<?php
    include('conexao.php');
    session_start();
    
    //VARIÁVEIS
    $senUser = $_POST['senha'];
    $confSen = $_POST['confS'];
    $emailUser = $_POST['email'];
    if(isset($_POST['pergunta']))
    {
        $pergunta = $_POST['pergunta'];
    }
    $resposta = $_POST['resposta'];

    //SESSÃO DO USUÁRIO
    session_start();
    $aluno = $_SESSION['aluno'];
    $rm = $_SESSION['rm'];
    $query = "select * from ftpuser where userid = '$aluno' and userrm = $rm;";
    $logar = mysqli_query($conexao, $query);
    $campos = mysqli_fetch_array($logar);
    $nomeUser = $campos['username'];
    $rmUser = $campos['userrm'];
    $logUser = $campos['userid'];

    //PEGAR DO BANCO
    // $query = "select * from ftpuser where userid = '$logUser';";
    $query2 = "select * from ftpuser where useremail = '$emailUser';";
    $query3 = "select * from ftpuser where userrm = '$rmUser';";
    // $logar = mysqli_query($conexao, $query);
    $logar2 = mysqli_query($conexao, $query2);
    $logar3 = mysqli_query($conexao, $query3);
    // $result = mysqli_fetch_array($logar);
    $result2 = mysqli_fetch_array($logar2);
    $result3 = mysqli_fetch_array($logar3);

    //VERIFICAÇÃO DE PREENCHIMENTO
    if(empty($senUser) || $senUser != $confSen || strlen($senUser) < 8)
    {
        $erroSenha = 1;
        if(empty($senUser))
        {
            echo "<script>if(confirm('O campo SENHA está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
        }
        else
        {
            if(strlen($senUser) < 8)
            {
                echo "<script>if(confirm('SENHA fraca, não pode ter menos do que 8 caracteres')){history.back();}else{document.location.href = '../index.php';};</script>";
            }
            else
            {
                echo "<script>if(confirm('As SENHAS não se correspondem')){history.back();}else{document.location.href = '../index.php';};</script>";
            }
        }
    }
    else
    {
        $erroSenha = 0;
        if(empty($emailUser) || strlen($result2) != 0)
        {
            $erroEmail = 1;
            if(strlen($result2) != 0)
            {
                echo "<script>if(confirm('O EMAIL já está cadastrado')){history.back();}else{document.location.href = '../index.php';};</script>";
            }
            else
            {
                echo "<script>if(confirm('O campo EMAIL está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
            }
        }
        else
        {
            $erroEmail = 0;
            if(empty($pergunta))
            {
                $erroPer = 1;
                echo "<script>if(confirm('O campo PERGUNTA está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
            }
            else
            {
                $erroPer = 0;
                if(empty($resposta))
                {
                    $erroRes = 1;
                    echo "<script>if(confirm('O campo RESPOSTA está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
                }
                else
                {
                    $erroRes = 0;
                }
            }
        }
    }

    //VERIFICAÇÃO DE PREENCHIMENTO TOTAL
    if($erroSenha == 0 && $erroEmail == 0 && $erroPer == 0 && $erroRes == 0)
    {
        //ATUALIZAÇÂO DOS DADOS
        $sql = "update ftpuser set passwd = '$senUser', useremail = '$emailUser', pergunta = '$pergunta', resposta = '$resposta' where userid = '$logUser' and userrm = '$rmUser';";




        // $sql = "INSERT  INTO `ftpuser`(`userid`,`passwd`,`username`,`userrm`,`useremail`,`pergunta`,`resposta`,`uid`,`gid`,`homedir`,`shell`) values('" . $logUser . "','" . $senUser . "','" . $nomeUser . "','" . $rmUser . "','" . $emailUser . "','" . $pergunta . "','" . $resposta . "','" . $uid . "','" . $gid . "','" . $homedir . "','" . $shell . "');";
        $res = mysqli_query($conexao, $sql);

        //VERIFICAÇÃO
        if($res == true)
        {
            echo "<script>if(confirm('Sua conta foi cadastrada com sucesso!')){document.location.href = '../index.php';}else{document.location.href = '../index.php';};</script>";
        }
    }
    mysqli_close($conexao);
?>