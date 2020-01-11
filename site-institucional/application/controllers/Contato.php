<?php

defined('BASEPATH') OR exit ('no direct script access allowed');

class Contato extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper('form');

        $this->setRules();
    }
    
    public function FaleConosco(){

        $data['formErrors'] = null;

        if ($this->form_validation->run() == FALSE) {
            $data['formErrors'] = validation_errors();
        } else {
            $this->session->set_flashdata('success_msg', 'Contato recebido com sucesso!');
            redirect(current_url());
        }

        $this->parser->parse('fale-conosco',$data);
    }

    public function TrabalheConosco(){
        $this->load->view('trabalhe-conosco');
    }

    function setRules(){
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required|min_length[30]');
    }

}
?>