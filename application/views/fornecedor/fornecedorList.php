<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
	<?php $this->load->view('components/bootstrap'); ?>
	<title>Listagem de Fornecedores</title>
	</head>
	<?php $this->load->view('components/nav'); ?><br><br>
	<body>
		<h1 class="text-center">Listagem de Fornecedores</h1>
		<div class="row justify-content-center">
	    <div class="col-auto">
	      <table class="table table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Logo</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($fornecedor as $fornecedordata): ?>
								<tr>
									<td><?php echo ($fornecedordata['id']); ?></td>
									<td><?php echo ($fornecedordata['nome']); ?></td>
									<td><img src="../assets/fornecedor/<?php echo ($fornecedordata['logo']); ?>"
										 alt="<?php echo ($fornecedordata['nome']);?>" width="400px" height="100px"></td>
									<td><a href="/HARDWARE171_CODEIGNITER/fornecedor/confirmDelete/<?php echo ($fornecedordata['id']); ?>">
									<button class="btn btn-danger">Excluir</button></a></td>
									<td><a href="/HARDWARE171_CODEIGNITER/fornecedor/edit/<?php echo ($fornecedordata['id']); ?>">
									<button class="btn btn-warning">Editar</button></a></td>
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
