<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Template {
        public function __construct(){
            $this->CI =& get_instance();
        }

        public function make_site ($template = NULL, $dados = array()){
            $dados['origem'] = 'Site';
            $dados['header'] = $this->CI->load->view('site/main/v_header', $dados, TRUE);
            $dados['footer'] = $this->CI->load->view('site/main/v_footer', $dados, TRUE);
            $dados['template'] = $this->CI->load->view('site/'.$template, $dados, TRUE);
            $this->CI->load->view('site/main/v_main', $dados);
        }
        public function make_admin ($template = NULL, $dados = array()){
            // $dados['header'] = $this->CI->load->view('admin/main/v_header', $dados, TRUE);
            // $dados['bem_vindo'] = $this->CI->load->view('admin/main/v_bem_vindo', $dados, TRUE);
            $dados['template'] = $this->CI->load->view('admin/'.$template, $dados, TRUE);
            $this->CI->load->view('admin/main/v_main', $dados);
        }
    }

?>