<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<?php $this->load->view('components/bootstrap'); ?>
		<title>Listagem de Administradores</title>
	</head>
	<?php $this->load->view('components/nav'); ?><br><br><br>
	<body>
		<h1 class="text-center">Listagem de administradores</h1>
		<div class="row justify-content-center">
	    <div class="col-auto">
	      <table class="table table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Email</th>
								<th scope="col">Excluir</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($admin as $admindata): ?>
								<tr>
									<td><?php echo ($admindata['id']); ?></td>
									<td><?php echo ($admindata['email']); ?></td>
									<td><a href="/HARDWARE171_CODEIGNITER/admin/confirmDelete/<?php echo ($admindata['id']); ?>">
									<button class="btn btn-danger">Excluir</button></a></td>
								</tr>
							<?php endforeach; ?>;
						</tbody>
					</table>
	      </table>
	    </div>
	  </div>
	</body>
	<?php $this->load->view('components/footer'); ?>
</html>
