<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_controller extends CI_Controller {

 function __construct(){
		parent::__construct();

		  if(!$this -> session -> userdata ('login')){
		  	redirect('inicio_sesion');
		  }
	}

public function form_agregar_libro()
{
	//busca el modelo del modelo "libro_model"
	$this-> load-> model ('libro_model');
    //busca de libro model la categoria y lo almacena en la variable "categorias"
	$data['categorias'] = $this-> libro_model-> select_categoria();
	$data['titulo'] = 'Agregar libro';

	$this-> load-> view ('Plantillas/header', $data);
	$this-> load->view('Plantillas/navegar_admin_view');
	$this-> load->view('libros/agregar_libro_view');
	$this-> load->view('Plantillas/footer');
}

public function registrar_libro()
 {
	$this-> form_validation-> set_rules ('titulo', 'Titulo', 'required');
	$this-> form_validation-> set_rules ('autor', 'Autor', 'required');
	$this-> form_validation-> set_rules ('descripcion', 'Descripción', 'required');
	$this-> form_validation-> set_rules ('stock', 'Stock', 'required|integer');
	$this-> form_validation-> set_rules ('precio', 'Precio', 'required|numeric');

	$this-> form_validation-> set_rules ('categoria', 'Seleccionar una categoria', 'required|callback_select_validate');
	$this-> form_validation-> set_rules ('imagen', 'Seleccionar una imagen', 'callback_validar_imagen');

	$this-> form_validation-> set_message ('numeric', 'Debe ingresar valores numéricos');
	$this-> form_validation-> set_message ('integer', 'El campo %s debe poseer solo numeros enteros');
	$this-> form_validation-> set_message ('required', 'El campo %s es obligatorio');


 if($this-> form_validation-> run() == FALSE) {
	$this->form_agregar_libro();
   } else{
	      $this-> guardar_libro();
         }

 }


 function validar_imagen($imagen)
 {
 	//verifica que se ingreso una imagen
 	$nombre_imagen = $_FILES ['imagen'] ['name'];
 	if(empty($nombre_imagen)){
 		$this-> form_validation-> set_message ('validar_imagen', 'Seleccionar una imagen');
 		return false;
 	} else{
 		return true;
 	}
 }


function select_validate($categoria)
{
	//verifica que se seleccionó una categoria del libro
	if($categoria=="0"){
		$this-> form_validation-> set_message ('select_validate', 'Seleccione una categoria');
		return false;
	} else{
		return true;
	}
}


function guardar_libro()
  {
	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
	$config['remove_spaces'] = TRUE;
	$config['max_size'] = '1024';

	$this-> load-> library ('upload', $config);

	if(!$this-> upload-> do_upload('imagen')){
		echo "<script type=\"text/javascript\">alert ('No se pudo cargar el archivo'); </script>";
		$this->form_agregar_libro();
	} else{

		$data = array(
			'libro_titulo' => $this-> input-> post ('titulo'),
			'libro_autor' => $this-> input-> post ('autor'),
			'libro_descripcion' => $this-> input-> post ('descripcion'),
			'libro_stock' => $this-> input-> post ('stock'),
			'libro_precio' => $this-> input-> post ('precio'),
			'libro_imagen' => $_FILES ['imagen'] ['name'],
			'libro_categoria' => $this-> input-> post ('categoria'),
			'libro_estado' => 1
		);

		$this-> load-> model('libro_model');
		$this-> libro_model -> guardar_libro ($data);
		redirect('agregar');
	    }
  }

  public function listar_libro()
	{
		$this->load->model('libro_model');

		$data['libro'] = $this->libro_model->select_libros();

		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/nav');
		$this->load->view('libros/listar_libros_view', $data);
		$this->load->view('Plantillas/footer');
	}

  public function gestionar_libros(){

		$this->load->model('libro_model');

		$data['libro']= $this->libro_model->select_libros();
		$data['titulo'] = 'Gestionar libros';


		$this-> load-> view ('Plantillas/header', $data);
	    $this-> load->view('Plantillas/navegar_admin_view');
	    $this-> load->view('libros/gestionar_libro_view', $data);
	    $this-> load->view('Plantillas/footer');

	}

	public function eliminar_libro($id=NULL){

		$data=array('libro_estado'=>'0');
		$this->load->model('libro_model');
		$this->libro_model->actualizar_libro($data,$id);
	    redirect('libro_controller/gestionar_libros');

	}

	public function activar_libro($id=NULL){

		$data=array('libro_estado'=>'1');
		$this->load->model('libro_model');
		$this->libro_model->actualizar_libro($data,$id);
	    redirect('libro_controller/gestionar_libros');

	}


	public function editar_libro($id){
		
		$this->load->model('libro_model');
		$libro = $this->libro_model->select_libros_id($id);
		$data['categorias'] = $this->libro_model->select_categoria();
		foreach($libro as $row){

			$data['libro_id'] = $row->libro_id;
			$data['titulo'] = $row->libro_titulo;
			$data['descripcion'] = $row->libro_descripcion;
			$data['stock'] = $row->libro_stock;
			$data['precio'] = $row->libro_precio;
			$data['imagen'] = $row->libro_imagen;
			$data['estado'] = $row->libro_estado;
			$data['categoria'] = $row->libro_categoria;
		}

		$this-> load-> view ('Plantillas/header', $data);
	    $this-> load->view('Plantillas/navegar_admin_view');
	    $this-> load->view('libros/gestionar_libro_edicion', $data);
	    $this-> load->view('Plantillas/footer');

	
	}



	public function actualizar_libro($id)
	{
		$this->form_validation->set_rules('titulo','Titulo del Libro', 'required');
		$this->form_validation->set_rules('descripcion','Descripcion del Libro', 'required');
		$this->form_validation->set_rules('stock','Stock del Libro', 'required|integer');
		$this->form_validation->set_rules('precio','Precio del Libro', 'required|numeric');
		$this->form_validation->set_rules('categoria','Seleccionar una categoria', 'required|callback_select_validate');
	

	
		$this->form_validation->set_message('numeric','Debe ingresar valores numericos');
		$this->form_validation->set_message('integer','El cambpo %s debe poseer solo numeros enteros');
		$this->form_validation->set_message('required','El campo %s es obligatorio');
	
		if($this->form_validation->run() == FALSE){
			
				$this->editar_libro($id);
		} else {
				$data = array(
				'libro_titulo' => $this->input->post('titulo'),
				'libro_descripcion'=> $this->input->post('descripcion'),
				'libro_stock'=> $this->input->post('stock'),
				'libro_precio'=> $this->input->post('precio'),
				'libro_imagen' => $this->input->post('imagen'),
				'libro_categoria'=> $this->input->post('categoria')
				);
	
		$this->load->model('libro_model');
	
		$this->libro_model->actualizar_libro($data, $id);
	
		redirect('libro_controller/gestionar_libros');
		}
	
		
	}





}