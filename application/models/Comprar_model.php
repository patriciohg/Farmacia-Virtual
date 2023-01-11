<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprar_model extends CI_Model {
    function getProdByCode($code){
        $this->db->where('codigo', $code);
        $resultado= $this->db->get("productos");
        return $resultado->row();
    }
    function generaPedido($data){
        return $this->db->insert("pedidos",$data);
    }
    function generaPedidoDomi($data){
        return $this->db->insert("pedidos_domicilio",$data);
    }
    function generaPedidoSuc($data){
        return $this->db->insert("pedidos_sucursal",$data);
    }
}