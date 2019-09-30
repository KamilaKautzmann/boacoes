<?php

class Usuario extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model("usuario_model"); 
        $this->load->helper("url_helper");       
        $this->load->library('session');  
 
        // Verifica e existência da sessao
        if(!$this->session->has_userdata('user')){
            redirect('/welcome/index', 'refresh'); 
        }
    }

    public function lista(){
        $dados['usuarios'] = $this->usuario_model->listar();
        $this->load->view('usuario/lista', $dados);
    }

    public function novo(){
        $this->load->helper('form');
        $this->load->view('usuario/novo');
    }

    public function atualizar($id){
        $dados['usuario'] = $this->usuario_model->buscar($id)[0]; 
        $this->load->helper('form');
        $this->load->view('usuario/atualizar', $dados);
    }

    public function salvar(){
        $id = $this->input->post('id');
        $usuario = array(
            'cpf' => $this->input->post('cpf'),
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
        );

        if($this->input->post('id')){
            $this->usuario_model->atualizar($id, $usuario);
        }else{
            $usuario['senha'] = md5($this->input->post('senha')); //md5 criptografa a senha
            $this->usuario_model->inserir($usuario);
        }
        $this->load->view('Pages/sucesso');
        $this->lista();
    }

    public function deletar($id){
        $this->usuario_model->deletar($id);
        $this->load->view('Pages/deletar');
        $this->lista();
    }

}