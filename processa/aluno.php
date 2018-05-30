<?php
	include("conexao.php");
	session_start();

	//VERIFICA O POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$novasenha = $_POST['novasenha'];
	$pergunta = $_POST['pergunta'];
	$resposta = $_POST['resposta'];

	//ARRAY DO BANCO
	$query = "SELECT * FROM ftpuser WHERE userid = '$login' AND passwd = '$senha';";
	$logar = mysqli_query($conexao, $query);
	$campos = mysqli_fetch_array($logar);
	$id = $campos["id"];
	$userid = $campos["userid"];
	$passwd = $campos["passwd"];
	$per = $campos["pergunta"];
	$res = $campos["resposta"];
	if(empty($novasenha) || strlen($novasenha) < 8)
	{
		if(strlen($novasenha) < 8)
		{
			echo "<script>if(confirm('Sua SENHA deve contar no mínimo 8 caracteres')){history.back();}else{document.location.href = '../altera.php';};</script>";
		}
		else
		{
			echo "<script>if(confirm('A Senha não pode ser alterada')){history.back();}else{document.location.href = '../altera.php';};</script>";
		}
	}
	else
	{
		//VERIFICAÇÃO DOS DADOS
		if($login == $userid && $senha == $passwd  && $resposta == $res)
		{
			$trocar = "UPDATE ftpuser SET passwd = '$novasenha' WHERE id = $id";
			$res = mysqli_query($conexao, $trocar);
			echo "<script>if(confirm('Senha alterada com Sucesso!')){document.location.href = '../index.php';}else{document.location.href = '../index.php';};</script>";
		}
		else
		{
			echo "<script>if(confirm('A Senha não pode ser alterada')){history.back();}else{document.location.href = '../altera.php';};</script>";
		}
	}
    mysqli_close($conexao);
?>