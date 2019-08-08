<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produto extends CI_Controller {
		public function __construct(){
	        parent::__construct();
	        $this->load->model('m_produto');
	        $this->load->model('m_produto_imagem');   
	        $this->load->model('m_categoria');    
	    }
		public function index(){
			
		}

		public function cadastrar()
		{

			$retorno['categorias'] = $this->m_categoria->listar();
			if ($_POST) {
				$dados = $this->input->post();
				unset($dados['PROIMG_Imagem']);

				$query = $this->db->insert('produtos',$dados);
				if ($query) {
					$id = $this->db->insert_id();

					$upload_path = getcwd() . DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.'admin' .DIRECTORY_SEPARATOR .'img'.DIRECTORY_SEPARATOR . 'produtos';
        			
        			for ($i=0; $i < count($_FILES['PROIMG_Imagem']); $i++) {
	        			if (@$_FILES['PROIMG_Imagem']['size'][$i] > 0) {
		        			$filename = $_FILES['PROIMG_Imagem']["tmp_name"][$i];
				            $fileinfo = pathinfo(@$_FILES['PROIMG_Imagem']["name"][$i]);
				            $_tmp_ext = explode('.', @$_FILES['PROIMG_Imagem']["name"][$i]);
				            $fileext = $_tmp_ext[1];
				            $newfilename = md5_file($filename) . '.' . $fileext;
				            $newfile = $upload_path . "/" . $newfilename;
				            rename($filename,$newfile);
				          	chmod($newfile,0644);
				          	$_img = $newfilename;

				          	$produto_imagem['PROIMG_Imagem'] = $_img;
				          	$produto_imagem['PROIMG_Codigo_Produto'] = $id;

				          	$query_imagem = $this->m_produto_imagem->cadastrar($produto_imagem);
	        			} 
        			}

        			if (@$query_imagem) {
						$retorno['success'] = TRUE;
						$retorno['msg'] = 'Produto cadastrado com sucesso';
					}
					else {
						$retorno['error'] = FALSE;
						$retorno['msg'] = 'Ocorreu um erro ao cadastrar um produto';
					}
				}
				else{
					$retorno['error'] = FALSE;
					$retorno['msg'] = 'Ocorreu um erro ao cadastrar um produto';	
				}
			}
			else{
				$retorno['error'] = FALSE;
				$retorno['msg'] = 'Ocorreu um erro ao cadastrar um produto';
			}
			$this->template->make_admin('v_cadastro_produto',$retorno);
		}

		public function visualizar($id = NULL)
	    {
	    	$retorno['categorias'] = $this->m_categoria->listar();
	    	if ($id) {
	    		$query = $this->m_produto->listar($id);
	    		if ($query) {
	    			$query->PROIMG_Imagem = $this->m_produto_imagem->listar($id);
	    			$retorno['produto'] = $query;
	    		}
	    	} else{

	    		$retorno['error'] = FALSE;
	            $retorno['msg']   = 'Produto não encontrado';
	    	}
	    	$this->template->make_admin('v_alterar_produto', $retorno);
	    }

		public function remover($id = NULL)
    	{
	        if ($id) {
	        	$query = $this->m_produto->deletar($id);

	        	if ($query) {
	        		$retorno['success'] = TRUE;
	        		$retorno['msg'] = 'Produto removido com sucesso';
	        	} else {
	        		$retorno['error'] = FALSE;
	        		$retorno['msg'] = 'Ocorreu um erro ao remover o produto';
	        	}
	        } else {
	        	$retorno['error'] = FALSE;
	        	$retorno['msg'] = 'O parametro id não foi passado';
	        }
	        $retorno['produtos'] = $this->m_produto->listar();

        	$this->template->make_admin('v_home', $retorno);
    	}

    	public function alterar($id = NULL)
	    {
	    	if ($id) {
	    		$dados = $this->input->post();
	    		$this->m_produto_imagem->remover($id);
	    		$upload_path = getcwd() . DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.'admin' .DIRECTORY_SEPARATOR .'img'.DIRECTORY_SEPARATOR . 'produtos';
        			
        			for ($i=0; $i < count($_FILES['PROIMG_Imagem']); $i++) {
	        			if (@$_FILES['PROIMG_Imagem']['size'][$i] > 0) {
		        			$filename = $_FILES['PROIMG_Imagem']["tmp_name"][$i];
				            $fileinfo = pathinfo(@$_FILES['PROIMG_Imagem']["name"][$i]);
				            $_tmp_ext = explode('.', @$_FILES['PROIMG_Imagem']["name"][$i]);
				            $fileext = $_tmp_ext[1];
				            $newfilename = md5_file($filename) . '.' . $fileext;
				            $newfile = $upload_path . "/" . $newfilename;
				            rename($filename,$newfile);
				          	chmod($newfile,0644);
				          	$_img = $newfilename;

				          	$produto_imagem['PROIMG_Imagem'] = $_img;
				          	$produto_imagem['PROIMG_Codigo_Produto'] = $id;

				          	$query_imagem = $this->m_produto_imagem->cadastrar($produto_imagem);
	        			} 
        		}
        		
	    		$query = $this->m_produto->alterar($dados);
	    		// $retorno['produtos'] = $this->m_produto->listar($id);

	    		if ($query) {
	    			$retorno['success'] = TRUE;
	    			$retorno['msg']   = 'Produto alterador com sucesso';

	    		} else {
	    			$retorno['error'] =  FALSE;
	    			$retorno['msg']   = 'Erro ao alterar dados do Produto';
	    		}

	    	} else{
	    		$retorno['error'] = FALSE;
	    		$retorno['msg'] = 'Não foi possível identificar o produto';
	    	}

	    	$retorno['produtos'] = $this->m_produto->listar();
			$this->template->make_admin('v_home',$retorno);
	    }
	}