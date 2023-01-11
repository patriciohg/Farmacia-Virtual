<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {
	public function getProductos(){
		$this->db->where("estado","1");
		$resultado = $this->db->get("productos");
		return $resultado->result();
	}
	public function getProducto($id){
		$this->db->where("id", $id);
		$resultado= $this->db->get("productos");
		return $resultado->row();
	}
    public function getProductosByCategoria($id){
        $this->db->where("estado","1");        
        $this->db->where("categoria_id",$id);
        $resultado = $this->db->get("productos");
        return $resultado->result();
    }
	public function getCategoria($id){
		$this->db->where("id",$id);
		$result =  $this->db->get("productos");
		return $result->row();
	}
	public function getCategorias(){
		$this->db->where("estado","1");
		$resultado = $this->db->get("categorias");
		return $resultado->result();
	}
    
}