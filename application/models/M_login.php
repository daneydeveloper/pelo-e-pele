<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_login extends CI_Model{
	public function autenticar($email,$senha){
		$query = $this->db->from('usuario')
						  ->where('USR_Email',$email)
						  ->where('USR_Senha',$senha)
						  ->get()
						  ->first_row();
    	return $query;
	}
}