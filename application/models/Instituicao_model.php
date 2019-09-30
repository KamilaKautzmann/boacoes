<?php
class Instituicao_model extends CI_Model{
    public function __construct(){
        $this->load->database(); // Carrega o banco
    }

    public function listarInstituicoes(){
        $query = $this->db->get("instituicao");
        return $query->result_array();
    }
    
    public function inserirInstituicoes($instituicao){
        return $this->db->insert('instituicao', $instituicao);
    }

    public function atualizarInstituicao($id, $instituicao){
        $this->db->where('id', $id);
        return $this->db->update('instituicao', $instituicao);
    }

    public function buscarInstituicao($id){
        $this->db->select('*');
        $this->db->from('instituicao');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function deletarInstituicao($id){
        $this->db->where('id', $id);
        $this->db->delete('instituicao');
    }

}
