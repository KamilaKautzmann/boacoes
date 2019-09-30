<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model("usuario_model"); 
		$this->load->helper("url_helper"); 
		$this->load->library("session"); // Carregamento da biblioteca de sessão
	}
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('login/login');
	}

	public function login(){
		$login = $this->usuario_model->login($this->input->post('username'), $this->input->post('senha'));
		
		if($login){
			redirect('/instituicao/lista', 'refresh'); 
		}else{
			$this->load->view('Pages/falha_login');
			$this->index();
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
	}
}
