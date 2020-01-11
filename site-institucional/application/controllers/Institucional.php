<?php

defined('BASEPATH') OR exit ('no direct script access allowed');

class Institucional extends CI_Controller{
    
    public function index(){
        $this->load->view('home');
    }

    public function Empresa(){
        $data['content'] = 'Informações sobre a empresa';
        $this->parser->parse('empresa',$data);
    }

    public function Servicos(){
        $data['content'] = 'Informações sobre nossos serviços';
        $this->parser->parse('servicos',$data);
    }
}
?>