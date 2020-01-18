<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public $page = null;

    function __construct(){
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        $this->InitPagination();

    }

    function InitPagination(){
        $this->page['base_url'] = base_url('my-urls');
        $this->page['total_rows'] = $this->db->select('*')->from('urls')->where('user_id',$this->session->userdata('id'))->count_all_results();
        $this->page['per_page'] = 5;
        $this->page['use_page_numbers'] = TRUE;
        $this->pagination->initialize($this->page);
    }

    function Login() {
        $this->form_validation->set_rules('email','Email','required|min_length[1]|valid_email|trim');
        $this->form_validation->set_rules('passw','Senha','required|min_length[6]|trim');

        if ($this->form_validation->run() == false) {
            $data['error'] = validation_errors();
        } else {
            $dataLogin = $this->input->post();
            $res = $this->Users_model->Login($dataLogin);

            if ($res) {
                foreach($res as $result){
                    if (password_verify($dataLogin['passw'],$result->passw)){
                        $data['error'] = null;
                        $this->session->set_userdata('logged',true);
                        $this->session->set_userdata('email',$result->email);
                        $this->session->set_userdata('id',$result->id);
                        redirect();
                    } else {
                        $data['error'] = 'Senprotectedha incorreta';
                    }
                }
            } else {
                $data['error'] = 'Usuário não cadastrado';
            }
        }

        $this->load->view('login', $data);
    }

    function Logout() {
        $this->session->unset_userdata('logged');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id');
        redirect();
    }

    function Register() {
        $this->form_validation->set_rules('name','Nome','required|min_length[3]|trim');
        $this->form_validation->set_rules('email','Email','required|min_length[1]|valid_email|trim');
        $this->form_validation->set_rules('passw','Senha','required|min_length[6]|trim');

        if ($this->form_validation->run() == false) {
            $data['error'] = validation_errors();
        } else {
            $dataRegister = $this->input->post();
            $res = $this->Users_model->Save($dataRegister);
            if ($res) {
                $data['error'] = null;
            } else {
                $data['error'] = 'Não foi possível criar o usuário';
            }
        }

        if ($data['error']) {
            $this->load->view('login', $data);
        }else{
            $this->session->set_userdata('logged', true);
            $this->session->set_userdata('email', $res->email);
            $this->session->set_userdata('id', $res->id);
            redirect();
        }
    }

    function UpdatePassword() {
        $data['success'] = null;
        $data['error'] = null;
        $this->form_validation->set_rules('passw','Senha','required|min_length[6]|trim');

        if ($this->form_validation->run() == false) {
            $data['error'] = validation_errors();
        } else {
            $data = $this->input->post();
            $this->Users_model->Update($data);
            $data['success'] = 'Senha alterada com sucesso!';
            $data['error'] = null;
        }
        $data['user'] = $this->Users_model->GetUser($this->session->userdata('id'));
        $this->load->view('alterar-senha', $data);
    }

    function Urls() {

        $this->load->model('Urls_model');

        if($this->uri->segment(2))
            $offset = ($this->uri->segment(2) - 1) * $this->page['per_page'];
        else
            $offset = 0;
      
        $urls = $this->Urls_model->GetAllByPage($this->session->userdata('id'), $this->page['per_page'], $offset);
        $data['urls'] = $urls;
        $data['error'] = null;
        $data['short_url'] = false;
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('minhas-urls',$data);
    }
}