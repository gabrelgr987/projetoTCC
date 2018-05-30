<?php
	include('conexao.php');
	session_start();

	//VARIÁVEIS
	$uid = 1019;
	$gid = 1022;
	$shell = '/sbin/nologin';
	$coor = $_POST['coor'];
	$userC = $_POST['userC'];
	if(isset($_POST['curso']))
	{
		$curso = $_POST['curso'];
	}
	$emailC = $_POST['emailC'];
	$per = "a";
	$res = "a";

	//VERIFICAÇÃO DO BANCO
    $query = "select * from ftpuser where userid = '$userC';";
    $query2 = "select * from ftpuser where useremail = '$emailC';";
    $logar = mysqli_query($conexao, $query);
    $logar2 = mysqli_query($conexao, $query2);
    $result = mysqli_fetch_array($logar);
    $result2 = mysqli_fetch_array($logar2);

	//VERIFICAÇÃO DE PASSAGEM DE DADOS
	if(empty($coor))
	{
    	$erroNome = 1;
    	echo "<script>if(confirm('O campo NOME está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
	}
	else
	{
    	$erroNome = 0;
    	if(empty($userC) || count($result) != 0)
		{
			$erroApelido = 1;
			if(count($result3) != 0)
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
	    	if(empty($emailC) || count($result2) != 0)
			{
			   	$erroEmail = 1;
			   	if(empty($emailC))
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
			   	if(empty($curso))
			   	{
			   		$erroCurso = 1;
			   		echo "<script>if(confirm('O campo CURSO está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			   	}
			   	else
			   	{
			   		$erroCurso = 0;
			   	}
			}
		}
	}
	if($erroNome == 0 && $erroApelido == 0 && $erroCurso == 0 && $erroEmail == 0)
	{
		$caminho = "/home/ETEC/" . $curso;
		$query = "INSERT  INTO `ftpuser`(`userid`,`passwd`,`username`,`useremail`,`pergunta`,`resposta`,`uid`,`gid`,`homedir`,`shell`) values('" . $userC . "','" . $userC . "','" . $coor . "','" . $emailC . "','" . $per . "','" . $res . "','" . $uid . "','" . $gid . "','" . $caminho . "','" . $shell . "');";
		$login = mysqli_query($conexao, $query);
		echo "<script>if(confirm('Cadastro Concluído')){document.location.href = '../cadcoor.php';}else{document.location.href = '../index.php';};</script>";
	}
    mysqli_close($conexao);
?>