<?php
	include("conexao.php");
	session_start();

	//VERIFICAÇÃO DE USUÁRIO
	$login = $_POST['login'];
	$senha = $_POST['passwd'];
	$rmuser = $_POST['rm'];
	$novasenha = $_POST['newpasswd'];
	$uidP = 1007;
	$query = "SELECT * FROM ftpuser WHERE userid = '$login' AND passwd = '$senha' AND userrm = '$rmuser' AND gid = '$uidP';";
	$logar = mysqli_query($conexao, $query);
	$campos = mysqli_fetch_array($logar);

	//VARIÁVEIS
	$id = $campos["id"];
	$usuario = $campos["userid"];
	$passwd = $campos["passwd"];
	$RM = $campos["userrm"];
	$gid = $campos["gid"];
	if($login == $usuario && $senha == $passwd && $rmuser == $RM &&  $gid == $uidP)
	{
		$trocar = "UPDATE ftpuser SET passwd = '$novasenha' WHERE id = $id";
		$res = mysqli_query($conexao, $trocar);
		echo "<script>if(confirm('Senha alterada com Sucesso!')){document.location.href = '../professor.php';}else{document.location.href = '../professor.php';};</script>";
	}
	else
	{
		echo "<script>if(confirm('Seu Login não consta com o de um Professor')){document.location.href = '../index.php';}else{document.location.href = '../index.php';};</script>";
	}
    mysqli_close($conexao);
?>