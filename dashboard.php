<?php
	session_start();

	require_once "classes/Connection.class.php";
	require_once "classes/User.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Dashboard</title> 
		<meta name="author" content="Dinicley Alves">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>

	<nav></nav>

	Bem vindo <?php echo $_SESSION['administrador']; ?><br />
	<a href="dashboard.php?logout=confirmar">Sair</a>




<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"index.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
