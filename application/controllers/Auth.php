<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->library('cart');
	}
	public function index()
	{
		$this->load->view('admin/login');	
	}
	public function login(){	
		$username = $_POST['username'];
		$password = $_POST['password'];

		$res = $this->Usuarios_model->login($username, sha1($password));
		if(!$res){
			$this->session->set_flashdata("error", "Error al ingresar el usuario y/o contraseña, intente nuevamente");			
			redirect(base_url());

		}else{
			$data = array(
				'id' =>  $res->id,
				'nombre'=> $res->nombres,
				'rol'=> $res->rol_id,
				'login' => TRUE
			);
			
			$this->session->set_userdata($data);
			
			if($res->rol_id == 3){
				redirect(site_url('cliente'));
				$this->cart->destroy();


			}else if($res->rol_id == 1){
				redirect(site_url('dashboard'));
			}else if($res->rol_id == 2){
				redirect(site_url('dashboard'));	
			}
			
		}
	}

	public function register(){
		$this->load->view('admin/register');
	}
	public function store(){

		$nombre = $this->input->post('Nombre');
		$apellidos = $this->input->post('Apellidos');
		$correo = $this->input->post('Mail');
		$telefono= $this->input->post('Telefono');
		$direccion = $this->input->post('Direccion');
		$usuario = $this->input->post('User');
		$pass = $this->input->post('Password');
		$confirmarPass = $this->input->post('repeatPass');
		
		$pass = sha1($pass);
		$data = array(
			'id' => null,
			'nombres' => $nombre,
			'apellidos' =>$apellidos,
			'telefono' => $telefono,
			'direccion' => $direccion,
			'email' => $correo,
			'username' => $usuario,
			'password' => $pass,
			'rol_id' => 3,
			'estado' => 1								
		);
		$res = $this->Usuarios_model->register($data);
		if(!$res){
			$this->session->set_flashdata("error", "Error al registrar al usuario, intente nuevamente");			
			redirect(base_url());

		}else{
			$data = array(
				'id' =>  $res->id,
				'nombre'=> $res->nombres,
				'rol'=> $res->rol_id,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(site_url('Cliente'));	

			
			
		}
		
		

		


	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
