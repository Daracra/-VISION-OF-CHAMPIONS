<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	
	public function index()
	{
		$data ['titulo']="Home";
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/principal');
		$this->load->view('Plantillas/footer');
	}

public function comercializacion()
{
        $data ['titulo']="Comercializacion";    	
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/comercializacion_view');
		$this->load->view('Plantillas/footer');
}

public function quienes_somos()
{
	    $data ['titulo']="Quienes somos";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/quienes_somos');
		$this->load->view('Plantillas/footer');
}

/**public function contacto()
{
	    $data ['titulo']="Contacto";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/contacto_view');
		$this->load->view('Plantillas/footer');
}**/

public function videos()
{
	    $data ['titulo']="Videos";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/videos_view');
		$this->load->view('Plantillas/footer');
}

public function campeonesKids()
{
	    $data ['titulo']="Campeones Kids";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/campeonesKids');
		$this->load->view('Plantillas/footer');
}

public function generadoresCambio()
{
	    $data ['titulo']="Generadores de Cambio";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/generadoresCambio');
		$this->load->view('Plantillas/footer');
}

public function fundacionEsperanza()
{
	    $data ['titulo']="Fundacion Esperanza";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/fundacionEsperanza');
		$this->load->view('Plantillas/footer');
}

public function politica()
{
	    $data ['titulo']="Politica";
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/politicaterminos');
		$this->load->view('Plantillas/footer');
}

/**
public function catalogor()
{
        $data ['titulo']="Catalogo libros";    	
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/catalogor');
		$this->load->view('Plantillas/footer');
}

public function catalogol()
{
        $data ['titulo']="Catalogol";    	
	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/catalogo');
		$this->load->view('Plantillas/footer');
}**/

public function catalogo()
{
        $data ['titulo']="Catalogo";    	
	    $this->load->model('libro_model');
	    $data ['libro']= $this-> libro_model-> get_libros();

	    $this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('libros/listar_libros_view');
		$this->load->view('Plantillas/footer');
}


}