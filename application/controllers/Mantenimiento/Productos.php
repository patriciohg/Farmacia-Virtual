<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}
    public function index(){
        $data = array(
            'Productos' => $this->Productos_model->getProductos(),
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/productos/list", $data);        
        $this->load->view("layouts/footer");
    }
    public function add(){
        $data = array(
            'Categorias' => $this->Productos_model->getCategorias(),
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/add', $data);
        $this->load->view('layouts/footer');

    }
    public function edit($id){
		$data = array('producto' => $this->Productos_model->getProducto($id));
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/edit',$data);
		$this->load->view('layouts/footer');
    }
    public function delete($id){
		$data = array(
			'estado' => "0", 
		);
		if($this->Productos_model->update($id,$data)){
			redirect(base_url()."index.php/Mantenimiento/Productos");
		}
		

	}
    public function store(){
        $codigo  = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$descripcion = $this->input->post('descripcion');
		$precio = $this->input->post('precio');
		$stock = $this->input->post('stock');
        $categoria_id = $this->input->post('categoria');
        $imagen = $this->input->post('nombre').".jpg";
        $imagen = str_replace(" ", "_", $imagen);
		$data = array('codigo' => $codigo,
                    'nombre' => $nombre,
					'descripcion'=> $descripcion,
					'precio'=> $precio,
					'stock'=> $stock,
					'categoria_id'=>$categoria_id,
					'imagen'=>$imagen,
                    'estado'=> "1" );
        //**  cargar archivo **//

        $nombre = $this->input->post('nombre');
        $config= array(
            'upload_path' => FCPATH."assets/imagenes/productos/",
            'file_name' => $nombre,
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE, 
            'max_size' => "2048000",
            'max_height' => "2000",
            'max_width' => "2000"
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		if($this->Productos_model->save($data)){
            if($this->upload->do_upload('userfile')){
                redirect(base_url(). "Mantenimiento/productos");
            }else{
                $this->session->set_flashdata("error","No se pudo cargar la imagen<br>".$this->upload->display_errors() );
                redirect(base_url(). "Mantenimiento/productos/add");
            }			
		}else{	
            $this->session->set_flashdata("error","No se pudo ingresar lo datos a la base de datos. <br>");
			redirect(base_url(). "Mantenimiento/productos/add");
		}
    }



}
