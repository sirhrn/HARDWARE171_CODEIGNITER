<?php
	class compraModel extends CI_Model {
		public function __construct()
			 {
							 $this->load->database();
							 $this->load->helper('url');
			 }

		public function setCompra($id_fornecedor)
			 {
		    $data = array(
						'produto_id' => $this->input->post('id_produto'),
						'fornecedor_id' => $id_fornecedor,
						'quantidade' => $this->input->post('quantidade')
		    );

		    return $this->db->insert('compra', $data);
			 }

			public function getCompra()
			 	{
					$this->db->select('compra.id as compra_id,
														compra.data as data_compra,
					 									produto.nome as produto_nome,
														fornecedor.nome as fornecedor_nome,
														compra.quantidade as quantidade
					');
					$this->db->from('compra');
					$this->db->join('produto', 'compra.produto_id = produto.id');
					$this->db->join('fornecedor', 'compra.fornecedor_id = fornecedor.id');
					$this->db->order_by('data_compra', 'asc');
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
