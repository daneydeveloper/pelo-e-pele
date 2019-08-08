<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Site extends CI_Controller {

		public function __construct(){
	        parent::__construct();
	        $this->load->model('m_produto');
	        $this->load->model('m_produto_imagem');   
	        $this->load->model('m_categoria'); 
	        $this->load->model('m_colaboradores');
	        $this->load->helper('lucas');    
	    }

		public function index(){
			// $dados['SE0_Titulo'] = 'SE0_Titulo';
			$dados['categoria'] = $this->m_categoria->listar_por_produto();
			$this->template->make_site('v_home',$dados);
		}

		public function sobre_nos(){
			$dados['categoria'] = $this->m_categoria->listar_por_produto();
			$this->template->make_site('v_sobre_nos',$dados);
		}

		public function produtos(){
			// $dados['produtos'] = $this->m_produto->listar();
			$dados['categoria'] = $this->m_categoria->listar();

			for ($i=0; $i < count($dados['categoria']) ; $i++) { 
				$dados['categoria'][$i]->produtos = $this->m_produto->listar_por_categoria($dados['categoria'][$i]->PROCAT_Codigo);

				for ($i2=0; $i2 < count($dados['categoria'][$i]->produtos) ; $i2++) { 
					$dados['categoria'][$i]->produtos[$i2]->imagem = $this->m_produto_imagem->listar_por_id($dados['categoria'][$i]->produtos[$i2]->PRO_Codigo);
				}
			}

			$this->template->make_site('v_produtos',$dados);
		}

		public function produto_detalhe($id){
			$retorno['produto'] = $this->m_produto->listar($id);
			$retorno['categoria'] = $this->m_categoria->listar_por_produto();
			$retorno['produto']->imagens = $this->m_produto_imagem->listar($id);
			$this->template->make_site('v_produto_detalhe',$retorno);
		}

		public function representantes(){
			$dados['categoria'] = $this->m_categoria->listar_por_produto();
			$dados['colaboradores'] = $this->m_colaboradores->listar_uf();
			
			for ($i=0; $i < count($dados['colaboradores']) ; $i++) { 
				$dados['colaboradores'][$i]->colaboradores = $this->m_colaboradores->listar_por_uf($dados['colaboradores'][$i]->REPRE_Cidade);
			}

			$this->template->make_site('v_representantes',$dados);

		}

		public function contato(){
			$dados['categoria'] = $this->m_categoria->listar_por_produto();
			$this->template->make_site('v_contato',$dados);
		}
		
	}