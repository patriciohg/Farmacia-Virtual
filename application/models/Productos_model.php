<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {
	public function getProductos(){
		$this->db->where("estado","1");
		$resultado = $this->db->get("productos");
		return $resultado->result();
	}
	public function getProducto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("productos");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("productos",$data);
	}
	public function getCategoria($id){
		$this->db->where("id",$id);
		$result =  $this->db->get("productos");
		return $result->row();
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("productos",$data);
	}
	public function getCategorias(){
		$this->db->where("estado","1");
		$resultado = $this->db->get("categorias");
		return $resultado->result();
	}
}