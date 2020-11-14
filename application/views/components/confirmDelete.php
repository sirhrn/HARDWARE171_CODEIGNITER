<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<?php require('bootstrap.php'); ?>
		<title>Delete?</title>
		<style media="screen">
			h1{
				margin-left: 20%;
			}
			button{
				margin-left: 50%;
			}
		</style>
	</head>
	<body><br>
		<h1>Você realmente deseja deletar esse registro?</h1><br><br>
		<a href="/HARDWARE171_CODEIGNITER/<?php echo $modulo; ?>/delete/<?php echo $id; ?>"><button type="button"
		class="btn btn-lg btn-danger">SIM</button></a><br><br>
		<a href="/HARDWARE171_CODEIGNITER/<?php echo $modulo; ?>/list"><button type="button"
		class="btn btn-lg btn-secondary">NÃO</button></a><br><br>
	</body>
</html>
