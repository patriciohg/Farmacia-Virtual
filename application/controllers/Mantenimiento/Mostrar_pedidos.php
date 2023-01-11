<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}
	public function index(){
		$data = array(
			'clientes' => $this->Clientes_model->getClientes(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/list',$data);
		$this->load->view('layouts/footer');		
	}
	public function update(){
		$idCliente = $this->input->post('idCliente');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apelldo$apellido');
		$telefono = $this->input->post('telefono');
		$direccion = $this->input->post('direccion');
		$rut = $this->input->post('rut');
		$empresa = $this->input->post('empresa');
		$data = array('nombres' => $nombre,
					'apellidos' => $apellido,
					'telefono' => $telefono,
					'direccion' => $direccion,
					'ruc' => $rut,
					'empresa' => $empresa,
		 		);
		if($this->Clientes_model->update($idCliente, $data)){
			redirect(base_url()."Mantenimiento/Clientes");
		}else{
			redirect(base_url()."Mantenimiento/Clientes/edit/".$idCategoria);			
		}

	}
	public function edit($id){
		$data = array('cliente' => $this->Clientes_model->getCliente($id),);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/edit',$data);
		$this->load->view('layouts/footer');
	}
	public function view($id){
		$data = array(
			'clientes' => $this->Clientes_model->getClientes($id));
		$this->load->view("admin/clientes/view",$data);
	}
	public function add(){

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/add');
		$this->load->view('layouts/footer');

	}

}

