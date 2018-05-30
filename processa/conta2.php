<?php
    include('conexao.php');
    session_start();
    
    //VARIÁVEIS
    $nomeUser = $_POST['nomeC'];
    $logUser = $_POST['loginC'];
    $senUser = $_POST['senhaC'];
    $confSen = $_POST['senha2C'];
    $emailUser = $_POST['emailC'];
    $rmUser = $_POST['rmC'];
    if(isset($_POST['perguntaC']))
    {
        $pergunta = $_POST['perguntaC'];
    }
    $resposta = $_POST['respostaC'];
    $uid = 1006;
    $gid = 1006;
    $homedir = "/home/ETEC";
    $shell = "/sbin/nologin";

    //PEGAR DO BANCO
    $query = "select * from ftpuser where userid = '$logUser';";
    $query2 = "select * from ftpuser where useremail = '$emailUser';";
    $query3 = "select * from ftpuser where userrm = '$rmUser';";
    $logar = mysqli_query($conexao, $query);
    $logar2 = mysqli_query($conexao, $query2);
    $logar3 = mysqli_query($conexao, $query3);
    $result = mysqli_fetch_array($logar);
    $result2 = mysqli_fetch_array($logar2);
    $result3 = mysqli_fetch_array($logar3);

    //VERIFICAÇÃO DE PREENCHIMENTO
    if(empty($nomeUser))
    {
        $erroNome = 1;
        echo "<script>if(confirm('O campo NOME está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
    }
    else
    {
        $erroNome = 0;
        if(empty($logUser))
        {
            $erroUser = 1;
            echo "<script>if(confirm('O campo USUÁRIO está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
        }
        else
        {
            $erroUser = 0;
            if(empty($senUser) || $senUser != $confSen || strlen($senUser) < 7)
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
                if(empty($emailUser) || $result2 != 0)
                {
                    $erroEmail = 1;
                    if($result2 != 0)
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
                    if(empty($rmUser) || strlen($rmUser) != 5 || $result3 != 0)
                    {
                        $erroRM = 1;
                        if(empty($rmUser))
                        {
                            echo "<script>if(confirm('O campo RM está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
                        }
                        else
                        {
                            if($result3 != 0)
                            {
                                echo "<script>if(confirm('O RM já está cadastrado')){history.back();}else{document.location.href = '../index.php';};</script>";
                            }
                            else
                            {
                                echo "<script>if(confirm('O campo RM não corresponde à um RM verdadeiro')){history.back();}else{document.location.href = '../index.php';};</script>";
                            }
                        }
                    }
                    else
                    {
                        $erroRM = 0;
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
            }
        }
    }

    //VERIFICAÇÃO DE PREENCHIMENTO TOTAL
    if($erroNome == 0 && $erroUser == 0 && $erroSenha == 0 && $erroEmail == 0 && $erroRM == 0 && $erroPer == 0 && $erroRes == 0)
    {
        //VERIFICAÇÂO DE EXISTÊNCIA
        if($result == 0)
        {
            //INSERÇÃO
            $sql = "INSERT  INTO `ftpuser`(`userid`,`passwd`,`username`,`userrm`,`useremail`,`pergunta`,`resposta`,`uid`,`gid`,`homedir`,`shell`) values('" . $logUser . "','" . $senUser . "','" . $nomeUser . "','" . $rmUser . "','" . $emailUser . "','" . $pergunta . "','" . $resposta . "','" . $uid . "','" . $gid . "','" . $homedir . "','" . $shell . "');";
            $res = mysqli_query($conexao, $sql);

            //VERIFICAÇÃO
            if($res == true)
            {
                echo "<script>if(confirm('Sua conta foi cadastrada com sucesso!')){document.location.href = '../index.php';}else{document.location.href = '../index.php';};</script>";
                echo "11";
            }
            echo "12";
        }
        else
        {
            echo "<script>if(confirm('O usuário já existe, troque o nome de usuário')){history.back();}else{document.location.href = '../index.php';};</script>";
        }
    }
    mysqli_close($conexao);
?>