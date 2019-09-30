<?php

class Instituicao extends CI_Controller {
    public function __construct(){
        parent:: __construct(); //o que esse cara faz?
        $this->load->model("instituicao_model"); //chama o model da instituicao
        $this->load->helper("url_helper"); // executas as pastas
        $this->load->library('session');

        // Verifica e existência da sessao
        if(!$this->session->has_userdata('user')){
            redirect('/welcome/index', 'refresh'); 
        }
    }

    public function lista(){
        $dados['instituicoes'] = $this->instituicao_model->listarInstituicoes();
        $this->load->view('instituicao/listaInstituicao', $dados);
    }

    public function novo(){
        $this->load->helper('form');
        $this->load->view('instituicao/novoInstituicao');
    }

    public function atualizar($id){
        $dados['instituicao'] = $this->instituicao_model->buscarInstituicao($id)[0];
        $this->load->helper('form');
        $this->load->view('instituicao/atualizaInstituicao', $dados);
    }

    public function salvar(){
        $id = $this->input->post('id');
        $instituicao = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'descricao' => $this->input->post('descricao'),
            'especialidade' => $this->input->post('especialidade'),
            'endereco' => $this->input->post('endereco'),
            'telefone'=> $this->input->post('telefone')
        );

        if($this->input->post('id')){
            $this->instituicao_model->atualizarInstituicao($id, $instituicao);
        }else{
            $this->instituicao_model->inserirInstituicoes($instituicao);
        }
        $this->load->view('Pages/sucesso');
        $this->lista();
    }
    
    public function deletar($id){
        $this->instituicao_model->deletarInstituicao($id);
        $this->load->view('Pages/deletar');
        $this->lista();
    }













}