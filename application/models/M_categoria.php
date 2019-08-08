<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_categoria extends CI_Model{

	public function cadastrar($dados)
	{
		$query = $this->db->insert('produtos_categoria',$dados);

    	return $query;
	}

	public function listar($id = NULL)
	{
		if ($id) {
			$query = $this->db->from('produtos_categoria')
							  ->where('PROCAT_Codigo',$id)
							  ->get()
							  ->first_row();
		}
		else {
			$query = $this->db->from('produtos_categoria')
							  ->get()
							  ->result();
		}

		return $query;
	}

	public function listar_por_produto()
	{
		$query = $this->db->from('produtos_categoria')
						  ->join('produtos' ,'PRO_Codigo_Categoria = PROCAT_Codigo')
						  ->group_by('PROCAT_Codigo')
						  ->get()
						  ->result();
		return $query;
	}

	public function checar_produto($id = NULL)
	{
		$query = $this->db->from('produtos')
						  ->where('PRO_Codigo_Categoria',$id)
						  ->get()
						  ->first_row();
		return $query;
	}

	public function listar_por_id($id = NULL)
	{
		$query = $this->db->from('produtos_categoria')
						  ->where('PROCAT_Codigo <>',$id)
						  ->get()
						  ->result();

		return $query;
	}

	public function deletar($id){
		$query = $this->db->where('PROCAT_Codigo',$id)
						  ->delete('produtos_categoria');
		return $query;				  
	}

	public  function alterar($dados)
	{
		$query = $this->db->where('PROCAT_Codigo',$dados['PROCAT_Codigo'])
						  ->update('produtos_categoria',$dados);
		return $query;	
	}

	public  function alterar_por_id($id,$dados)
	{
		$query = $this->db->where('PRO_Codigo_Categoria',$id)
						  ->update('produtos',$dados);
		return $query;	
	}
}