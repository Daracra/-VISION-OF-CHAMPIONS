<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_controller extends CI_Controller { 


	public function __construct()
	{
		parent::__construct();
	}

public function contacto()
    {
        $data['titulo'] = 'Contacto';

        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/nav');
        $this->load->view('Contenido/contacto_view');
        $this->load->view('Plantillas/footer');
    }


 public function realizar_consulta()
    {
        $this->form_validation->set_rules('nombre', 'Nombre del sujeto', 'required');
        $this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('asunto', 'Asunto de consulta', 'required');
        $this->form_validation->set_rules('contenido', 'Contenido', 'required');

        $this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');

        if ($this->form_validation->run() == FALSE) {

            $this->contacto();
        } else {
            $this->insertar_consulta();
        }
    }

    public function insertar_consulta()
    {
        // Se deberia retornar el id de la base de datos y asignarle a id_consulta ese valor + 1
        $consulta = array(
            'nombre' => $this->input->post('nombre'),
            'email' => $this->input->post('mail'),
            'asunto' => $this->input->post('asunto'),
            'contenido' => $this->input->post('contenido')
        );
        $this->load->model('consulta_model');
        $this->consulta_model->guardar_consulta($consulta);

        // Agregar un mensaje de consulta realizada

        redirect('');
    }

    public function listar_consultas()
    {
        $this->load->model('consulta_model');
        $data['consultas'] = $this->consulta_model->select_consultas();
        $data['titulo'] = 'Listar consultas';
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/navegar_admin_view');
        $this->load->view('Contenido/listar_consultas', $data);
        $this->load->view('Plantillas/footer');
    }

    public function eliminar_consulta($id = NULL)
    {

        $data = array(
            'estado' => '0'
        );
        $this->load->model('consulta_model');
        $this->consulta_model->actualizar_consulta($data, $id);
        redirect('consultas_controller/listar_consultas');
    }

    public function activar_consulta($id = NULL)
    {

        $data = array(
            'estado' => '1'
        );
        $this->load->model('consulta_model');
        $this->consulta_model->actualizar_consulta($data, $id);
        redirect('consultas_controller/listar_consultas');
    }
}
