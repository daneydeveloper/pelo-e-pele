<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_categoria');
    }
    public function index()
    {
        
    }

    public function cadastrar()
    {
        if ($_POST) {

            $dados = $this->input->post();
            $query = $this->m_categoria->cadastrar($dados);
            if ($query) {
                $retorno['success'] = TRUE;
                $retorno['msg']     = 'Categoria castrada com sucesso.';
            } else {
                $retorno['error'] = FALSE;
                $retorno['msg']   = 'Ocorreu um erro ao cadastrar a Categoria';
            }
            
            $retorno['categorias'] = $this->m_categoria->listar();

            $this->template->make_admin('v_categorias',$retorno);
        }
    }
    
    public function visualizar($id = NULL)
    {

        if ($id) {
            $query = $this->m_categoria->listar($id);
            if ($query) {
                $retorno['categoria'] = $query;
            }
        } else{

            $retorno['error'] = FALSE;
            $retorno['msg']   = 'Categoria não encontrada';
        }

        $this->template->make_admin('v_alterar_categoria', $retorno);
    }

    public function alterar($id = NULL)
    {
        if ($id) {
            $dados = $this->input->post();

            $query = $this->m_categoria->alterar($dados);
            $retorno['categoria'] = $this->m_categoria->listar($id);

            if ($query) {
                $retorno['success'] = TRUE;
                $retorno['msg']   = 'Categoria alterada com sucesso';

            } else {
                $retorno['error'] =  FALSE;
                $retorno['msg']   = 'Erro ao alterar categoria';
            }

        } else{
            $retorno['error'] = FALSE;
            $retorno['msg'] = 'Não foi possível identificar a categoria';
        }

        $this->template->make_admin('v_alterar_categoria', $retorno);
    }

    public function remover($id = NULL) {
     if ($id) {
       $checar_categoria = $this->m_categoria->checar_produto($id);

       if ($checar_categoria) {

         $retorno['categoria'] = $this->m_categoria->listar_por_id($id);
         $retorno['id_velho'] = $id;
         $retorno['flag'] = 1;

           if ($retorno['categoria']) {
            $retorno['categorias'] = $this->m_categoria->listar($id);
             $this->template->make_admin('v_alocar_categorias',$retorno);
           }
           else {
             $retorno['error'] =  TRUE;
             $retorno['msg']   = 'Não foi possível remover esta categoria por só existir ela cadastrada.';
             // $this->template->make_admin('v_categorias',$retorno);
           }
         } 
         else {
            $retorno['flag'] = 2;

         $checar_categoria = $this->m_categoria->listar_por_id($id);

         if ($checar_categoria) {
           $query = $this->m_categoria->deletar($id);

           if ($query) {
            $retorno['flag'] = 3;
             $retorno['success'] = TRUE;
             $retorno['msg']   = 'Categoria deletada com sucesso';

           } else {
            $retorno['flag'] = 4;
             $retorno['error'] =  TRUE;
             $retorno['msg']   = 'Erro ao deletar categoria';
           }
         }
         
         else {
           $retorno['error'] =  TRUE;
           $retorno['msg']   = 'Não foi possível remover esta categoria por só existir ela cadastrada.';
         }
       }
     } 
     else{
       $retorno['error'] = TRUE;
       $retorno['msg'] = 'Não foi possível identificar a categoria';
     }

     $retorno['categorias'] = $this->m_categoria->listar();

     $this->template->make_admin('v_categorias',$retorno);
   }
    public function alocar()
    {   
        $data = $this->input->post();
        $dados['PRO_Codigo_Categoria'] = $data['PRO_Codigo_Categoria'];
        $query = $this->m_categoria->alterar_por_id($data['id_velho'],$dados);

        if ($query) {
            
            $remover = $this->m_categoria->deletar($data['id_velho']);

            if ($remover) {
                $retorno['success'] = TRUE;
                $retorno['msg']   = 'Categoria deletada com sucesso';

            } else {
                $retorno['error'] =  FALSE;
                $retorno['msg']   = 'Erro ao deletar categoria';
            }
        }

        $retorno['categorias'] = $this->m_categoria->listar();
        $this->template->make_admin('v_categorias',$retorno);
    }
    
}