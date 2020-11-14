<?php
	class fornecedorModel extends CI_Model {
		public function __construct()
			 {
							 $this->load->database();
							 $this->load->helper('url');
			 }

		public function setFornecedor($imageName)
			 {
		    $data = array(
						'nome' => ucwords($this->input->post('nome')),
		        'logo' => str_replace(" ", "_", $imageName)
		    );

		    return $this->db->insert('fornecedor', $data);
			 }

			 public function updateFornecedor($imageName)
	 			 {
					 $data = array(
						 'id' => $this->input->post('id'),
 							'nome' => ucwords($this->input->post('nome')),
 			        'logo' => str_replace(" ", "_", $imageName)
 			    );

					$this->db->where('id', $data['id']);
					$this->db->update('fornecedor', $data);
	 			 }

		public function getFornecedor()
		 	{
		     $query = $this->db->get('fornecedor');
		     return $query->result_array();
		 	}

			public function deleteImage($id)
			{
				$data = $this->fornecedorModel->getSelectedFornecedor($id);
				return $data[0]['logo'];
			}

			public function getSelectedFornecedor($id)
			 	{
					$query = $this->db->get_where('fornecedor', array('id' => $id));
					return $query->result_array();
			 	}

		public function deleteFornecedor($id)
			{
				$this->db->delete('fornecedor', array('id' => $id));
			}
	}
?>
