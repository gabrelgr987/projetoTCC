<?php
	include('conexao.php');
	session_start();

	if(isset($_POST['rmP']) && $_POST['rmP'] != '')
	{
		$rm = $_POST['rmP'];
		//VERIFICAÇÃO DO BANCO
	    $query = "select * from ftpuser where userrm = $rm and uid = 1004;";
	    $logar = mysqli_query($conexao, $query);
	    $result = mysqli_fetch_array($logar);
	}
	if(isset($_POST['rmA']) && $_POST['rmA'] != '')
	{
		$rmA = $_POST['rmA'];
		//VERIFICAÇÃO DO BANCO
	    $query = "select * from ftpuser where userrm = $rmA and uid = 1005;";
	    $logar = mysqli_query($conexao, $query);
	    $result = mysqli_fetch_array($logar);
	}

	//VERIFICAÇÃO DE PASSAGEM DE DADOS
    if(isset($_POST['curso']))
	{
		$curso = $_POST['curso'];

		//VERIFICAÇÃO DO CURSO
		if($curso == '3TRT')
		{
			$aux = 13;
		}
		else
		{
			// if($curso == '3TCT')
			// {
			// 	$aux = 23;
			// }
			// else
			// {
			// 	if($curso == '3TLS')
			// 	{
			// 		$aux = 33;
			// 	}
			// }
		}
		//EXCLUSÃO DE CURSO
		if(empty($curso))
		{
			echo "<script>if(confirm('O campo CURSO está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
		}
		else
		{
			$queryCurso = "DELETE FROM ftpuser WHERE curso = $aux;";
			$loginCurso = mysqli_query($conexao, $queryCurso);
			$queryEx = "UPDATE ftpuser SET curso = 13 WHERE curso = 12;";
			$turma = mysqli_query($conexao, $queryEx);
			$queryEx1 = "UPDATE ftpuser SET curso = 12 WHERE curso = 11;";
			$turma1 = mysqli_query($conexao, $queryEx1);
			echo "<script>if(confirm('Registro dos Alunos excluido do sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
		}
	}

	//EXCLUSÃO DE RM DE ALUNO
	if(isset($_POST['rmA']) && $_POST['rmA'] != '')
	{
		if(empty($rmA) || count($result) == 0)
		{
			if(count($result3) == 0)
			{
				echo "<script>if(confirm('Esse RM não consta no sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
			else
			{
				echo "<script>if(confirm('O campo RM está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
		}
		else
		{
	    	$queryRm = "DELETE FROM ftpuser WHERE userrm = $rmA;";
			$loginRm = mysqli_query($conexao, $queryRm);
			echo "<script>if(confirm('Registro do Aluno excluido do sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
		}
	}

	//EXCLUSÃO DE RM DE PROFESSOR
	if(isset($_POST['rmP']) && $_POST['rmP'] != '')
	{
		if(empty($rm) || count($result) == 0)
		{
			if(count($result3) == 0)
			{
				echo "<script>if(confirm('Esse RM não consta no sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
			else
			{
				echo "<script>if(confirm('O campo RM está vazio')){history.back();}else{document.location.href = '../index.php';};</script>";
			}
		}
		else
		{
	    	$queryRm = "DELETE FROM ftpuser WHERE userrm = $rm;";
			$loginRm = mysqli_query($conexao, $queryRm);
			echo "<script>if(confirm('Registro do Professor excluido do sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
		}
	}

	//EXCLUSÃO DE PROFESSORES
	if(isset($_POST['exc']))
	{
		$completo = $_POST['exc'];
		if($completo == 'on')
		{
			$queryTudo = "DELETE FROM ftpuser WHERE uid = 1004 AND gid = 1004;";
			$loginTudo = mysqli_query($conexao, $queryTudo);
			echo "<script>if(confirm('Registros de Professores excluidos do sistema')){history.back();}else{document.location.href = '../index.php';};</script>";
		}
	}
    mysqli_close($conexao);
?>