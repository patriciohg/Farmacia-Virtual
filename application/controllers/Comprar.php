<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Comprar_model");
		$this->load->library('cart');

	}
	public function index(){	
		$this->load->view('cliente/layouts/header');
		$this->load->view('cliente/comprar');
		
	}
	public function finish(){
		$tipo_entrega = $this->input->post("Entrega");
		if($tipo_entrega == "Suc"){// tipo de entrega En sucursal
			$nombre = $this->input->post("Nombre");
			$apellidos = $this->input->post("Apellidos");
			$rut = $this->input->post("Rut");
			$ciudad = $this->input->post("Ciudad");
			$sucursal = $this->input->post("Sucursal");
			$mail = $this->input->post("Mail");

			foreach($this->cart->contents() as $item){
				$pedido = array('id' => '',
							'rut' => $rut,
							'codigo_prod'=>$item['id']);
				if(!$this->Comprar_model->generaPedido($pedido)){
					$this->session->set_flashdata("error","No se pudo guardar la informacion del pedido con cod ".$item['id'] );
					redirect(base_url(). "Comprar");
				}
			}
			$pedido_suc = array('id' => '',
								'rut' => $rut,
								'nombre'=> $nombre,
								'apellidos'=> $apellidos,
								'ciudad'=> $ciudad,
								'sucursal'=> $sucursal,
								'mail'=> $mail);
			if(!$this->Comprar_model->generaPedidoSuc($pedido_suc)){
				$this->session->set_flashdata("error","No se pudo guardar la informacion del pedido");
				redirect(base_url(). "Comprar");
			}else{
				redirect(base_url(). "Cliente/Comprar/pago");
			}

			redirect(base_url(). "Comprar");
		}elseif($tipo_entrega == "Domi"){//tipo de entrega A domicilio
			$nombre = $this->input->post("Nombre");
			$apellidos = $this->input->post("Apellidos");
			$rut = $this->input->post("Rut");
			$direccion = $this->input->post("Direccion");
			$ciudad = $this->input->post("Ciudad");
			$fecha = $this->input->post("Fecha_entrega");
			$mail = $this->input->post("Mail");
			//genera pedido a domicilio
			$pedido_domi = array('rut' => $rut,
							'nombre'=> $nombre,
							'apellidos'=> $apellidos,
							'ciudad'=> $ciudad,
							'direccion'=> $direccion,
							'fecha'=> $fecha,
							'mail'=> $mail);
			if(!$this->Comprar_model->generaPedidoDomi($pedido_domi)){
				$this->session->set_flashdata("error","No se pudo guardar la informacion del pedido cod ");
				redirect(base_url(). "Cliente/Comprar");
			}
			foreach($this->cart->contents() as $item){
				$pedido = array('rut' => $rut,
							'id_prod'=>$item['id']);
				if(!$this->Comprar_model->generaPedido($pedido)){
					$this->session->set_flashdata("error","No se pudo guardar la informacion del pedido con codigo ".$item['id'] );
					redirect(base_url(). "Cliente/Comprar");
				}
			}
		}
		
	}
	function pago(){
		$this->load->view('cliente/layouts/header');
		$this->load->view('cliente/pago');

	}
	function tipo_pago(){
		$tipo = $this->input->post('pago');
		if($tipo == "pago_linea"){
			redirect();
		}elseif($tipo == "pago_tienda"){
			redirect(base_url()."Comprar/resumen" );
		
		}
	}
	function resumen(){
		$this->load->view('cliente/layouts/header');
		$this->load->view('cliente/resumen');
	}
	
}
