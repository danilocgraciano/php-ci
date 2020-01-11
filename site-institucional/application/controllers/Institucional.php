<?php

defined('BASEPATH') OR exit ('no direct script access allowed');

class Institucional extends CI_Controller{
    
    public function index(){
        $this->load->view('home');
    }

    public function Empresa(){
        $data['content'] = 'Informações sobre a empresa';
        $this->load->view('empresa',$data);
    }

    public function Servicos(){
        $data['content'] = 'Informações sobre nossos serviços';
        $this->load->view('servicos',$data);
    }
}
?>