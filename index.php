<?php
	session_start();

	require_once "classes/Connection.class.php";
	require_once "classes/User.class.php";

	if (isset($_POST['ok'])):

		$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

		$l = new Login;
		$l->setLogin($login);
		$l->setSenha($senha);

		if($l->logar()):
			header("Location: dashboard.php");
		else:
			$erro = "Erro ao logar";
		endif;
	endif;


	if(isset($_SESSION['logado'])):
		header("Location: dashboard.php");
	else:
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<meta name="author" content="Dinicley Alves">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css"> 
	</head>
	<body>

		<div id="login">
			<form action="" method="POST" class="formulario">
				<div class="login">Login</div>
				<input type="text" name="login">
				<div class="senha">Senha</div>
				<input type="password" name="senha">
				<input type="submit" name="ok" value="Logar">
			</form>
			<?php echo isset($erro) ? $erro : ''; ?>
		</div>		

<?php
	endif;
?>

	</body>
</html>
