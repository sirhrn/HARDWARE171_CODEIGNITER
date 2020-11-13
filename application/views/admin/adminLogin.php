<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php $this->load->view('components/bootstrap'); ?>
		<title>Login de Administradores</title>
	</head>
	<?php $this->load->view('components/centerFormStyle'); ?>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/HARDWARE171_CODEIGNITER/">HARDWARE 171</a>
	</nav><br><br>
	<body>
		<h1 class="text-center">Login de Administradores</h1><br><br>
		<div class="container center_div">
			<form action="/HARDWARE171_CODEIGNITER/admin/login" method="post" accept-charset="utf-8">
				<label for="email">Digite o Email</label>
				<input type="email" name="email" value=""><br>
				<label for="email">Digite a Senha</label>
				<input type="password" name="senha" value=""><br><br>
				<button class="btn btn-primary btn-lg">Login</button>
			</form>
		</div>
	</body>
</html>
