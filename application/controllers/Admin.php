<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct(){
	        parent::__construct();
	        $this->load->model('m_produto');
	        $this->load->model('m_categoria'); 
	        $this->load->model('m_usuario');
	        $this->load->model('m_produto_imagem');
	        $this->load->model('m_oferta');
	    }
		public function index(){
			if ($this->session->usuario) {
				$dados['produtos'] = $this->m_produto->listar();
				$this->template->make_admin('v_home',$dados);
			}
			else {
				redirect('login','refresh');
			}
		}

		public function cadastro_produto(){
			if ($this->session->usuario) {
				$dados['categorias'] = $this->m_categoria->listar();
				$this->template->make_admin('v_cadastro_produto',$dados);
			}
			else {
				redirect('login','refresh');
			}
		}

		public function usuarios(){
			if ($this->session->usuario) {
				$dados['usuarios'] = $this->m_usuario->listar();
				$this->template->make_admin('v_usuarios',$dados);
			}
			else {
				redirect('login','refresh');
			}
		}

		public function cadastro_usuario(){
			if ($this->session->usuario) {
				$this->template->make_admin('v_cadastro_usuario');
			}
			else {
				redirect('login','refresh');
			}
		}

		public function categorias(){
			if ($this->session->usuario) {
				$dados['categorias'] = $this->m_categoria->listar();
				$this->template->make_admin('v_categorias',$dados);
			}
			else {
				redirect('login','refresh');
			}
		}

		public function cadastro_categoria(){
			if ($this->session->usuario) {
				$this->template->make_admin('v_cadastro_categoria');
			}
			else {
				redirect('login','refresh');
			}
		}

		public function arrombado() {
			$query = $this->db->from('produtos_imagens')->get()->result();

			foreach ($query as $key) {
				$tabaco = explode('.', $key->PROIMG_Imagem);
				$arrombado = (similar_text($tabaco[1], 'net-compress-image') >= 18)? true:false;
				if ($arrombado) {
					var_dump($tabaco);
					var_dump($arrombado);

					$img['PROIMG_Imagem'] = $tabaco[0] .'.jpg';

					$query = $this->db->where('PROIMG_Codigo', $key->PROIMG_Codigo)
									  ->update('produtos_imagens', $img);

				}
			}
		}

		// public function ofertas(){
		// 	if ($this->session->usuario) {
		// 		$dados['ofertas'] = $this->m_oferta->listar();
		// 		$this->template->make_admin('v_ofertas',$dados);
		// 	}
		// 	else {
		// 		redirect('login','refresh');
		// 	}
		// }

		// public function cadastro_oferta(){
		// 	if ($this->session->usuario) {
		// 		$this->template->make_admin('v_cadastro_oferta');
		// 	}
		// 	else {
		// 		redirect('login','refresh');
		// 	}
		// }

	}