<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
	<?php $this->load->view('components/bootstrap'); ?>
	<title>Listagem de Compra</title>
	</head>
	<?php $this->load->view('components/nav'); ?><br><br>
	<body>
		<h1 class="text-center">Listagem de Compra</h1>
		<div class="row justify-content-center">
	    <div class="col-auto">
	      <table class="table table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome do Fornecedor</th>
								<th scope="col">Nome do Produto</th>
								<th scope="col">Quantidade</th>
								<th scope="col">Data da compra</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($compra as $compradata): ?>
								<tr>
									<td><?php echo ($compradata['compra_id']); ?></td>
									<td><?php echo ($compradata['data_compra']); ?></td>
									<td><?php echo ($compradata['produto_nome']); ?></td>
									<td><?php echo ($compradata['fornecedor_nome']); ?></td>
									<td><?php echo ($compradata['quantidade']); ?></td>
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
