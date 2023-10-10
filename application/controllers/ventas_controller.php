<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_controller extends CI_Controller {



	        function __construct()
	        {
		      parent::__construct();

		      $this->load->model('ventas_model');
		      $this->load->model('libro_model');
		    }
	   

	  public function guardar_venta()
	   {
	   	$encabezado_venta = array (
         'id_cliente' => $this->session->userdata('id_usuario'),
         'venta_fecha' => date('Y-m-d'),
	   	);
	   	$this-> ventas_model->guardar_venta($encabezado_venta);
	   	$venta_id= $this-> db->insert_id();
	   	$cart = $this-> cart->contents();
	   


	   	foreach ($cart as $item){
	   		$detalle_venta = array (
	   			'id_venta' => $venta_id,
	   			'id_producto' => $item['id'],
	   			'detalle_cantidad' => $item['qty'],
	   			'detalle_precio' => $item['price']
	   		);
	   		//controlar el stock
	   		$producto = $this-> libro_model ->get_libros_id($item['id']);

	   		$stock = $producto-> libro_stock;

	   		if ($stock >= $item['qty']) {
	   			$data = array (
	   				'libro_stock' => $stock
	   			);

	   			$this->libro_model->actualizar_libro($data,$item['id']);
	   			$this->ventas_model->guardar_detalle_venta($detalle_venta);
	   		}
	   	}

	   	$this->cart->destroy();

	   	echo "<script> alert('Su compra se registro con ¡Exito!');</script>";
	   	redirect ('productos','refresh');

	   }

	   public function ver_ventas(){
	$this->load->model('ventas_model');
	$data['titulo'] = 'Lista Ventas';

	$data['venta'] = $this->ventas_model->select_venta();

	$this->load->view('Plantillas/header', $data);
	$this->load->view('Plantillas/navegar_admin_view');
	$this->load->view('ventas/ventas_view');
	$this->load->view('Plantillas/footer');
}

   

     public function detalle_ventas($id=NULL)
    {
        $this->load->model('ventas_model');
        $data['detalle_venta'] = $this->ventas_model->select_detalle_venta($id);
        $data['titulo'] = 'Detalle de ventas';
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/navegar_admin_view');
        $this->load->view('ventas/ver_detalles_venta', $data);
        $this->load->view('Plantillas/footer');
    }


}