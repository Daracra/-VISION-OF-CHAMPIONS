<?php

defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Admin_controller extends CI_controller {
	
	function __construct()
	{
		parent::__construct();

		if (!$this-> session->userdata('login')){

		redirect ('inicio_sesion'); 
	}
	}

	public function usuario_admin()
	{
		$data['titulo'] = 'Administrador';
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/navegar_admin_view');
		$this->load->view('Plantillas/footer');
	}
}