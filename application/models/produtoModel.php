<?php
	class produtoModel extends CI_Model {
		public function __construct()
			 {
							 $this->load->database();
							 $this->load->helper('url');
			 }

		public function setProduto($imageName)
			 {
		    $data = array(
						'fornecedor_id' => $this->input->post('id_fornecedor'),
						'nome' => ucwords($this->input->post('nome')),
						'precoCompra' => $this->input->post('precoCompra'),
						'precoVenda' => $this->input->post('precoVenda'),
						'quantidade' => $this->input->post('quantidade'),
						'descricao' => $this->input->post('descricao'),
		        'foto' => str_replace(" ", "_", $imageName)
		    );

		    return $this->db->insert('produto', $data);
			 }

			 public function updateProduto($imageName)
	 			 {
					 $data = array(
						 'id' => $this->input->post('id'),
						 'fornecedor_id' => $this->input->post('id_fornecedor'),
						 'nome' => ucwords($this->input->post('nome')),
						 'precoCompra' => $this->input->post('precoCompra'),
						 'precoVenda' => $this->input->post('precoVenda'),
						 'quantidade' => $this->input->post('quantidade'),
						 'descricao' => $this->input->post('descricao'),
						 'foto' => str_replace(" ", "_", $imageName)
 			    );

					$this->db->where('id', $data['id']);
					$this->db->update('produto', $data);
	 			 }

		public function getProduto()
		 	{
		     $query = $this->db->get('produto');
		     return $query->result_array();
		 	}

			public function getProdutoFornecedor()
			 	{
					$this->db->select('fornecedor.nome as fornecedorNome,
															fornecedor_id,
															fornecedor.logo,
															produto.id,
															produto.nome as produtoNome,
															precoCompra,
															precoVenda,
															quantidade,
															descricao,
															foto');
					$this->db->from('produto');
					$this->db->join('fornecedor', 'produto.fornecedor_id = fornecedor.id');
					$query = $this->db->get();
			    return $query->result_array();
			 	}

			public function deleteImage($id)
			{
				$data = $this->produtoModel->getSelectedProduto($id);
				return $data[0]['foto'];
			}

			public function getSelectedProduto($id)
			 	{
					$query = $this->db->get_where('produto', array('id' => $id));
					return $query->result_array();
			 	}

		public function deleteProduto($id)
			{
				$this->db->delete('produto', array('id' => $id));
			}
	}
?>
