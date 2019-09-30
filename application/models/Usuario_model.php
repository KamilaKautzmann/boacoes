<?php
class Usuario_model extends CI_Model{
    public function __construct(){
        $this->load->database(); // Carrega o banco
    }

    public function listar(){
        $query = $this->db->get("usuario");
        return $query->result_array();
    }
    
    public function inserir($usuario){
        return $this->db->insert('usuario', $usuario);
    }

    public function atualizar($id, $usuario){
        $this->db->where('id', $id);
        return $this->db->update('usuario', $usuario);
    }

    public function buscar($id){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deletar($id){
        $this->db->where('id', $id);
        $this->db->delete('usuario');
    }

    public function login($username, $senha){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('username', $username);
        $this->db->where('senha', md5($senha));
        $query = $this->db->get();
        $usuario = $query->result_array();

        if($usuario){
            $usuario = $usuario[0];
            $this->load->library('session');
            $userdata = array(
                'username'  => $usuario['username'],
                'email'     => $usuario['email'],
                'logged_in' => true
            );
        
            $this->session->set_userdata(['user' => $userdata]);
            return true;
        }else{
            return false;
        }
    }

    


}
