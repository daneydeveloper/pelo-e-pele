<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_usuario extends CI_Model{
	public function cadastrar($dados){
		$query = $this->db->insert('usuario',$dados);

    	return $query;
	}

	public function listar($id = NULL){
		
		if ($id) {
			$query = $this->db->from('usuario')
							  ->where('USR_Codigo',$id)
							  ->get()
							  ->first_row();
		}
		else {
			$query = $this->db->from('usuario')
							  ->get()
							  ->result();
		}

		return $query;
	}

	public function deletar($id){
		$query = $this->db->where('USR_Codigo',$id)
						  ->delete('usuario');
		return $query;				  
	}

	public  function alterar($dados){
		$query = $this->db->where('USR_Codigo',$dados['USR_Codigo'])
						  ->update('usuario',$dados);
		return $query;	
	}
}