<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_oferta extends CI_Model{
	public function cadastrar($dados){
		$query = $this->db->insert('oferta',$dados);

    	return $query;
	}

	public function listar($id = NULL){
		
		if ($id) {
			$query = $this->db->from('oferta')
							  ->where('OFER_Codigo',$id)
							  ->get()
							  ->first_row();
		}
		else {
			$query = $this->db->from('oferta')
							  ->get()
							  ->result();
		}

		return $query;
	}

	public function deletar($id){
		$query = $this->db->where('OFER_Codigo',$id)
						  ->delete('oferta');
		return $query;				  
	}

	public  function alterar($dados){
		$query = $this->db->where('OFER_Codigo',$dados['OFER_Codigo'])
						  ->update('oferta',$dados);
		return $query;	
	}
}