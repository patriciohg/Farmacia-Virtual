<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Cliente_model");
		$this->load->library('cart');
	}
	public function index(){	
		$data = array(
			'Productos' => $this->Cliente_model->getProductos(),
			'Categorias' => $this->Cliente_model->getCategorias()
		);
		$this->load->view('cliente/layouts/header');
		$this->load->view('cliente/layouts/aside',$data);
		$this->load->view('cliente/inicio',$data);
		$this->load->view('cliente/layouts/footer');		
	}
	public function add($id){
		$nuevoProducto = $this->Cliente_model->getProducto($id);
		$data = array(
			'id'      => $nuevoProducto->codigo,
			'qty'     => 1,
			'price'   => $nuevoProducto->precio,
			'name'    => $nuevoProducto->nombre,
			'imagen' => $nuevoProducto->imagen
		);
		if($this->cart->insert($data)){
			redirect('http://localhost/Proyecto/cliente'); //ver como hacer que retorne al mismo lugar donde esta el usuario
		}
		
		
	}
	public function remove($id){
		
		if($this->cart->remove($id)){
			redirect('http://localhost/Proyecto/cliente'); //ver como hacer que retorne al mismo lugar donde esta el usuario
		}

	}
	public function reiniciarCarro(){
		$this->cart->destroy();
		redirect('http://localhost/Proyecto/cliente');
	}

	public function categoria($id){
		$data = array(
			'Productos' => $this->Cliente_model->getProductosByCategoria($id),
			'Categorias' => $this->Cliente_model->getCategorias()
		);
		$this->load->view('cliente/layouts/header');
		$this->load->view('cliente/layouts/aside',$data);
		$this->load->view('cliente/inicio',$data);
		$this->load->view('cliente/layouts/footer');	

	}
}
