<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_produto extends CI_Model{
	public function cadastrar($dados){
		$query = $this->db->insert('produtos',$dados);

    	return $query;
	}

	public function listar($id = NULL){
		if ($id) {
			$query = $this->db->from('produtos')
							  ->where('PRO_Codigo',$id)
							  ->get()
							  ->first_row();
		}
		else {
			$query = $this->db->from('produtos')
							  ->join('produtos_categoria','PRO_Codigo_Categoria = PROCAT_Codigo')
							  ->order_by('PRO_Codigo','ASC')
							  ->get()
							  ->result();
		}

		return $query;
	}

    public  function alterar($dados){
		$query = $this->db->where('PRO_Codigo',$dados['PRO_Codigo'])
						  ->update('produtos',$dados);
		return $query;	
	}

	public function deletar($id){
			$checkimg = $this->db->from('produtos_imagens')
								 ->where('PROIMG_Codigo_Produto',$id)
								 ->get()
								 ->first_row();
			if (!$checkimg) {
				$query = $this->db->where('PRO_Codigo',$id)
					  			  ->delete('produtos');
			} 
			else {
				$query = $this->db->where('PROIMG_Codigo_Produto',$id)
								  ->delete('produtos_imagens');
				if ($query) {
					$query_remover_produto = $this->db->where('PRO_Codigo',$id)
													  ->delete('produtos');
				}
			}

		return $query;				  
	}

	public function buscar($keyword, $cat)
	{
		$query = $this->db->from('produtos')
						  ->join('produtos_categoria','PRO_Codigo_Categoria = PROCAT_Codigo');
		if ($keyword != '') {
		 	$query = $query->like('PRO_Nome', urldecode($keyword))
						   ->or_like('PRO_Descricao_Curta', urldecode($keyword));
		}

		else if ($cat != '') {
			$query = $query->where('PROCAT_Nome', urldecode($cat));
						   
		}

		$query = $query->get()
					   ->result();
		return $query;
	}

	public function listar_por_categoria($id)
	{
		$query = $this->db->from('produtos')
						  ->where('PRO_Codigo_Categoria',$id)
						  ->order_by('PRO_Codigo','ASC')
						  ->get()
						  ->result();

		return $query;
	}

}