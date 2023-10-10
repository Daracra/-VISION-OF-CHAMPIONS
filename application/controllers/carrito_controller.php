<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


 public function ver_carrito(){
 	if (!$this-> cart-> contents()) {
 		$data ['message']= 'El carrito está vacío';
 	 
 	} else{
 		$data ['message']= '';

 	}

 	$data['titulo']='Ver carrito';

 	$this-> load-> view ('Plantillas/header');
	$this-> load->view('Plantillas/nav');
	$this-> load->view('carrito/carrito_view', $data);
	$this-> load->view('Plantillas/footer');

 }


 public function agregar_carrito(){

 	$data = array (
 		   'id'=> $this-> input-> post ('id'),
 		   'name'=> $this-> input-> post ('titulo'),
 		   'price'=> $this-> input-> post ('precio'),
 		   'qty' => 1
 		);

 	$this-> cart-> insert($data);

 	redirect('carrito_controller/ver_carrito');

 }


 function borrar ($id){

 	if($id=="all"){

 		$this->cart->destroy();
 	
 	}else {

 		$data = array (
 			'rowid' => $id,
 			'qty' => 0
 		);

 		$this-> cart->update($data);
 	}

 	redirect('carrito_controller/ver_carrito');

 }
}
