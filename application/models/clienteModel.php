<?php
	class ClienteModel extends CI_Model {
		public function __construct()
			 {
							 $this->load->database();
							 $this->load->helper('url');
			 }

		public function setCliente()
			 {
		    $data = array(
						'nome' => $this->input->post('nome'),
		        'email' => $this->input->post('email'),
		        'cidade' => $this->input->post('cidade')
		    );

		    return $this->db->insert('cliente', $data);
			 }

			 public function updateCliente()
	 			 {
					 $data = array(
						 'id' => $this->input->post('id'),
 							'nome' => $this->input->post('nome'),
 			        'email' => $this->input->post('email'),
 			        'cidade' => $this->input->post('cidade')
 			    );

					$this->db->where('id', $data['id']);
					$this->db->update('cliente', $data);
	 			 }

		public function getCliente()
		 	{
		     $query = $this->db->get('cliente');
		     return $query->result_array();
		 	}

			public function getSelectedCliente($id)
			 	{
					$query = $this->db->get_where('cliente', array('id' => $id));
					return $query->result_array();
			 	}

		public function deleteCliente($id)
			{
				$this->db->delete('cliente', array('id' => $id));
			}
	}
?>
