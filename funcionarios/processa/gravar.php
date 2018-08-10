<?php
	include('conexao.php');
	session_start();

	//VARIÁVEIS
	$uid = 1004;
	$gid = 1004;
	$shell = '/sbin/nologin';
	$nomeProfessor = $_POST['professor'];
	$apelido = $_POST['apelido'];
	if(isset($_POST['selCurso']))
	{
		$curso = $_POST['selCurso'];
	}
	$rmProf = $_POST['rmProf'];
	$emailPro = $_POST['emailPro'];
	$per = "a";
	$res = "a";

	//VERIFICAÇÃO DO BANCO
    $query = "select * from ftpuser where userid = '$apelido';";
    $query2 = "select * from ftpuser where useremail = '$emailPro';";
    $query3 = "select * from ftpuser where userrm = '$rmProf';";
    $logar = mysqli_query($conexao, $query);
    $logar2 = mysqli_query($conexao, $query2);
    $logar3 = mysqli_query($conexao, $query3);
    $result = mysqli_fetch_array($logar);
    $result2 = mysqli_fetch_array($logar2);
    $result3 = mysqli_fetch_array($logar3);

	//VERIFICAÇÃO DE PASSAGEM DE DADOS
	if(empty($nomeProfessor))
	{
    	$erroNome = 1;
    	echo "<script>if(confirm('O campo NOME está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
	}
	else
	{
    	$erroNome = 0;
    	if(empty($apelido) || $result != 0)
		{
			$erroApelido = 1;
			if($result3 != 0)
			{
				echo "<script>if(confirm('O usuário já existe, troque o nome de usuário')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
			else
			{
				echo "<script>if(confirm('O campo USUÁRIO está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
		}
		else
		{
	    	$erroApelido = 0;
	    	if(empty($rmProf) || strlen($rmProf) != 5 || $result3 != 0)
			{
			   	$erroRM = 1;
			   	if(empty($rmProf))
			   	{
			   		echo "<script>if(confirm('O campo RM está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			   	}
			   	else
			   	{
			   		if(strlen($rmProf) != 5)
			   		{
			   			echo "<script>if(confirm('O campo RM não corresponde à um RM verdadeiro')){history.back();}else{document.location.href = '../index.php';};</script>";
			   		}
			   		else
			   		{
			   			echo "<script>if(confirm('O RM já está cadastrado')){history.back();}else{document.location.href = '../index.php';};</script>";
			   		}
			   	}
			}
			else
			{
			   	$erroRM = 0;
			   	if(empty($emailPro) || $result2 != 0)
				{
			    	$erroEmail = 1;
			    	if(empty($emailPro))
			    	{
			    		echo "<script>if(confirm('O campo EMAIL está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			    	}
			    	else
			    	{
			    		echo "<script>if(confirm('O EMAIL já está cadastrado')){history.back();}else{document.location.href = '../index.php';};</script>";
			    	}
				}
				else
				{
			    	$erroEmail = 0;
				}
			}
		}
	}
	
	if($erroNome == 0 && $erroApelido == 0 && $erroCurso == 0 && $erroRM == 0 && $erroEmail == 0)
	{
		$caminho = "/home/ETEC/" . $curso . "/" . $nomeProfessor;
		$query = "INSERT  INTO `ftpuser`(`userid`,`passwd`,`username`,`userrm`,`useremail`,`pergunta`,`resposta`,`uid`,`gid`,`homedir`,`shell`) values('" . $apelido . "','" . $apelido . "','" . $nomeProfessor . "','" . $rmProf . "','" . $emailPro . "','" . $per . "','" . $res . "','" . $uid . "','" . $gid . "','" . $caminho . "','" . $shell . "');";
		$login = mysqli_query($conexao, $query);
		echo "<script>if(confirm('Cadastro Concluído')){document.location.href = '../cadprof.php';}else{document.location.href = '../index.php';};</script>";
	}
    mysqli_close($conexao);
?>