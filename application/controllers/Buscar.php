<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Buscar extends CI_Controller {

		public function __construct(){
	        parent::__construct();
	        $this->load->model('m_produto');
	        $this->load->model('m_categoria'); 
	        $this->load->model('m_usuario');
	        $this->load->model('m_produto_imagem');
	    }
		public function index(){
			
			$keyword = urlencode(@$_GET['keyword']);
			$categoria = urlencode(@$_GET['cat']);

			$retorno['produtos'] = $this->m_produto->buscar($keyword, $categoria);
			$retorno['busca'] = $keyword;
			
			for ($i=0; $i < count($retorno['produtos']) ; $i++) { 
				$retorno['produtos'][$i]->imagem = $this->m_produto_imagem->listar_por_id($retorno['produtos'][$i]->PRO_Codigo);
			}

			$retorno['categoria'] = $this->m_categoria->listar_por_produto();
			$this->template->make_site('v_produtos_buscar',$retorno);

		}

	}