<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_colaboradores extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->tabela = 'colaboradores';
	}

	public function listar_por_uf($uf){
    	$query = $this->db->from($this->tabela)
    					  ->where('SPLIT_STR(REPRE_Cidade, "/", 2) = "'.$uf.'"', NULL, FALSE)
    					  ->get()
    				      ->result();

    	return $query;
	}

	public function listar_uf(){
		$query = $this->db->select('SPLIT_STR(REPRE_Cidade, "/", 2) AS REPRE_Cidade')
						  ->from($this->tabela)
						  ->group_by('SPLIT_STR(REPRE_Cidade, "/", 2)')
						  ->get()
						  ->result();

		return $query;


	}

}