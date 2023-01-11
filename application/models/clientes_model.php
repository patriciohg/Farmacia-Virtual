<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
	public function getClientes(){
		$this->db->where("estado","1");
		$resultado = $this->db->get("clientes");
		return $resultado->result();
	}
	public function save($data){
		return $this->db->insert("clientes",$data);
	}
	public function getCliente($id){
		$this->db->where("id",$id);
		$result =  $this->db->get("clientes");
		return $result->row();
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("clientes",$data);
	}

}
