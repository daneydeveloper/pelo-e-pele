<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oferta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_oferta');
    }
    public function index()
    {
        
    }
    
    public function cadastrar()
    {
        if ($_POST) {
            $dados = $this->input->post();
            
            $upload_path = getcwd() . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'ofertas';
            
            foreach ($_FILES as $file) {
                if ($file["size"] > 0) {
                    $filename    = $file["tmp_name"];
                    $fileinfo    = pathinfo(@$file["name"]);
                    $fileext     = strtolower(@$fileinfo["extension"]);
                    $newfilename = md5_file($filename) . '.' . $fileext;
                    $newfile     = $upload_path . "/" . $newfilename;
                    rename($filename, $newfile);
                    chmod($newfile, 0644);
                    $_img = $newfilename;
                }
            }
            
            $dados['OFER_Imagem'] = @$_img;
            $query               = $this->m_oferta->cadastrar($dados);
            if ($query) {
                $retorno['success'] = TRUE;
                $retorno['msg']     = 'Oferta castrada com sucesso.';
            } else {
                $retorno['error'] = FALSE;
                $retorno['msg']   = 'Ocorreu um erro ao cadastrar essa Oferta';
            }
            
            $this->template->make_admin('v_cadastro_oferta', $retorno);
        }
    }
    
    // public function remover($id = NULL)
    // {
    //     $retorno['usuarios'] = $this->m_usuario->listar();
        
    //     if ($id) {
            
    //         if ($this->session->usuario->USR_Codigo != $id) {
    //             $query = $this->m_usuario->deletar($id);
                
    //             if ($query) {
    //                 $retorno['success'] = TRUE;
    //                 $retorno['msg']     = 'Usuario removido com sucesso';
    //             } else {
    //                 $retorno['error'] = FALSE;
    //                 $retorno['msg']   = 'Ocorreu um erro ao remover o usuario';
    //             }
    //         } else {
    //             $retorno['error'] = FALSE;
    //             $retorno['msg']   = 'Você não pode remover a si mesmo batata';
    //         }
    //     } else {
    //         $retorno['error'] = FALSE;
    //         $retorno['msg']   = 'O parametro id não foi passado';
    //     }
        
    //     $this->template->make_admin('v_usuarios', $retorno);
    // }

    // public function visualizar($id = NULL)
    // {

    // 	if ($id) {
    // 		$query = $this->m_usuario->listar($id);
    // 		if ($query) {
    // 			$retorno['usuarios'] = $query;
    // 		}
    // 	} else{

    // 		$retorno['error'] = FALSE;
    //         $retorno['msg']   = 'Usuario não encontrado';
    // 	}

    // 	$this->template->make_admin('v_alterar_usuario', $retorno);
    // }

    // public function alterar($id = NULL)
    // {
    // 	if ($id) {
    // 		$dados = $this->input->post();
    // 		if ($_FILES) {
    // 			$upload_path = getcwd() . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'usuarios';
            
	   //          foreach ($_FILES as $file) {
	   //              if ($file["size"] > 0) {
	   //                  $filename    = $file["tmp_name"];
	   //                  $fileinfo    = pathinfo(@$file["name"]);
	   //                  $fileext     = strtolower(@$fileinfo["extension"]);
	   //                  $newfilename = md5_file($filename) . '.' . $fileext;
	   //                  $newfile     = $upload_path . "/" . $newfilename;
	   //                  rename($filename, $newfile);
	   //                  chmod($newfile, 0644);
	   //                  $_img = $newfilename;
	   //              }
	   //              $dados['USR_Imagem'] = @$_img;
	   //          }
    // 		}
    // 		$query = $this->m_usuario->alterar($dados);
    // 		$retorno['usuarios'] = $this->m_usuario->listar($id);

    // 		if ($query) {
    // 			$retorno['success'] = TRUE;
    // 			$retorno['msg']   = 'Usuario alterador com sucesso';

    // 		} else {
    // 			$retorno['error'] =  FALSE;
    // 			$retorno['msg']   = 'Erro ao alterar dados do usuario';
    // 		}

    // 	} else{
    // 		$retorno['error'] = FALSE;
    // 		$retorno['msg'] = 'Não foi possível identificar o usuario';
    // 	}

    // 	$this->template->make_admin('v_alterar_usuario', $retorno);
    // }
}