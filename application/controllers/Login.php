<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');    
    }

    public function index(){
        if ($this->session->usuario) {
            redirect('admin','refresh');
        }
        else {
            $this->template->make_admin('v_login');
        }
    }

    public function autenticar(){
        if ($_POST) {
            $dados = $this->input->post();
            $query = $this->m_login->autenticar($dados['email'], $dados['senha']);

            if ($query) {
                $this->session->set_userdata('usuario', $query);
                $dados['success'] = TRUE;
                $dados['msg'] = 'VAMO LOGAR';
                redirect('admin','refresh');
            }
            else {
                $dados['error'] = TRUE;
                $dados['msg'] = 'Usuario ou senha incorreto.';
                $this->template->make_admin('v_login', $dados);
            }
        }
        else {
            if ($this->session->usuario) {
                redirect('admin','refresh');
            }
            else {
                $this->template->make_admin('v_login');
            }
        }
    }

    public function sair(){
        $this->session->unset_userdata('usuario');
        redirect('login','refresh');
    }
}