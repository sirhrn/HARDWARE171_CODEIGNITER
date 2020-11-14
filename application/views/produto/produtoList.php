<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
	<?php $this->load->view('components/bootstrap'); ?>
	<title>Listagem de Produtos</title>
	</head>
	<?php $this->load->view('components/nav'); ?><br><br>
	<body>
		<h1 class="text-center">Listagem de Produtos</h1>
		<div class="row justify-content-center">
	    <div class="col-auto">
	      <table class="table table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome do Fornecedor</th>
								<th scope="col">Nome do Produto</th>
								<th scope="col">Preço de Compra</th>
								<th scope="col">Preço de Venda</th>
								<th scope="col">Quantidade</th>
								<th scope="col">Descrição</th>
								<th scope="col">Foto</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($produtofornecedor as $produtofornecedordata): ?>
								<tr>
									<td><?php echo ($produtofornecedordata['id']); ?></td>
									<td><?php echo ($produtofornecedordata['fornecedorNome']); ?></td>
									<td><?php echo ($produtofornecedordata['produtoNome']); ?></td>
									<td><?php echo ($produtofornecedordata['precoCompra']); ?></td>
									<td><?php echo ($produtofornecedordata['precoVenda']); ?></td>
									<td><?php echo ($produtofornecedordata['quantidade']); ?></td>
									<td><?php echo ($produtofornecedordata['descricao']); ?></td>
									<td><img src="../assets/produto/<?php echo ($produtofornecedordata['foto']); ?>"
										 alt="<?php echo ($produtofornecedordata['produtoNome']);?>" width="180px" height="90px"></td>
									<td><a href="/HARDWARE171_CODEIGNITER/produto/confirmDelete/<?php echo ($produtofornecedordata['id']); ?>">
									<button class="btn btn-danger">Excluir</button></a></td>
									<td><a href="/HARDWARE171_CODEIGNITER/produto/edit/<?php echo ($produtofornecedordata['id']); ?>">
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
