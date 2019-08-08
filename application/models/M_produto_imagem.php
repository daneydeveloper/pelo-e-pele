<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_produto_imagem extends CI_Model{
	public function cadastrar($dados){
		$query = $this->db->insert('produtos_imagens',$dados);

    	return $query;
	}

	public function listar($id = NULL)
	{
		$query = $this->db->from('produtos_imagens')
						  ->where('PROIMG_Codigo_Produto',$id)
						  ->get()
						  ->result();
		return $query;
	}


	public function remover($id) {
		$query = $this->db->where('PROIMG_Codigo_Produto',$id)
						  ->delete('produtos_imagens');

		return $query;
	}

	public function listar_por_id($id = NULL)
	{
		$query = $this->db->from('produtos_imagens')
						  ->where('PROIMG_Codigo_Produto',$id)
						  ->get()
						  ->first_row();
		return $query;
	}
}