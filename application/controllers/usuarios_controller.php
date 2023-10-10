<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	
	public function login()
	{
		$data ['titulo']="Login";
		$this-> load->view('Plantillas/header', $data);
		$this-> load->view('Plantillas/nav');
		$this-> load->view('Contenido/login_view');
		$this-> load->view('Plantillas/footer');
	}


	public function registrarse()
	{
		$data ['titulo']="Registrarse";
		$this-> load->view('Plantillas/header', $data);
		$this-> load->view('Plantillas/nav');
		$this-> load->view('Contenido/registrarse_view');
		$this-> load->view('Plantillas/footer');
	}


	public function registrar_usuario()
	{
		$this-> form_validation -> set_rules('apellido', 'Apellido del usuario', 'required');
		$this-> form_validation -> set_rules('nombre', 'Nombre del usuario', 'required');

		$this-> form_validation -> set_rules('mail', 'Email', 'required|valid_email|is_unique[personas.mail]');

		$this-> form_validation -> set_rules('telefono', 'Telefono del ususario', 'required|integer');

		$this-> form_validation -> set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this-> form_validation -> set_rules('passconf', 'Confirmar password', 'trim|required|matches[password]');



		$this-> form_validation -> set_message('is_unique', 'cliente se encuentra registrado');

		$this-> form_validation -> set_message('valid_email', 'El campo %s debe ser un mail válido');

		$this-> form_validation -> set_message('integer', 'El campo %s debe poseer solo numeros enteros');

		$this-> form_validation -> set_message('required', 'El campo %s es obligatorio');

		$this-> form_validation -> set_message('min_length', 'El campo %s debe contener como mínimo %d caracteres');

		$this-> form_validation -> set_message('matches', 'contraseñas no coinciden');




		if($this-> form_validation -> run()== FALSE) {

			$this-> registrarse();
		} else{
			$this -> insertar_usuario();
		}
 }

public function insertar_usuario()

   {
   	$usuario= array(
   		'apellido' => $this-> input-> post('apellido'),
   		'nombre' => $this-> input-> post('nombre'),
   		'mail' => $this-> input-> post('mail'),
   		'telefono' => $this-> input-> post('telefono'),
   		'password' => base64_encode($this-> input-> post('password')),
   		'perfil_id' => 2,
   		'estado' => 1
   	);

   	$this-> load-> model('usuario_model');

   	$this-> usuario_model-> guardar_usuario ($usuario);

   	//Mensaje de usuario registrado
   	redirect('inicio_sesion');

   }

   public function iniciar_sesion() {
        $this->form_validation->set_rules('mail','Usuario', 'required');

        $this->form_validation->set_rules('password','Password', 'required|callback_verificar_password');
    
        $this-> form_validation-> set_message('required', 'El campo %s es obligatorio');
        //callbacks es un metodo de validacion.
    
        if ($this->form_validation->run() == FALSE){
    
            $this->login();
        }else{
            $this->usuario_logueado();
        }
    }
    
    function verificar_password($password){

        //verifica la existencia del usuario
    
        $usuario = $this->input->post('mail');
        $pass = $this->input->post('password');
    
        $contrasenia = base64_encode($pass);
    
        $this->load->model('usuario_model');
    
        //Verifica los datos enviados como parametros con los registros de la BD y lo almacena en $usuario
        $usuario = $this->usuario_model->buscar_usuario($usuario, $contrasenia);
    
        if ($usuario) {//Caso en que se halla el usuario
            
            $datos_usuario = array(
                //Se definen variables que contendran los datos correspondientes
                'id_usuario' => $usuario->id_persona,
                'nombre' => $usuario->nombre,
                'apellido' => $usuario->apellido,
                'perfil' => $usuario->perfil_id,
                'login' => TRUE
    
            );
    
             $this->session->set_userdata($datos_usuario);//"set_userdate" utiliza para cargar los valores del array
    
            return true;
        
        } else { //Caso en que NO se halla el usuario
    
            $this->form_validation->set_message('verificar_password', 'Usuario y/o contraseña invalidos');
    
          return false;
        }
    }
    
    public function usuario_logueado() {
        if ($this->session->userdata('login')){ //"userdata" se utiliza para leer
    
            // se verifica el perfil del usuario para redireccionar a la pag correspodiente
    
            switch ($this->session->userdata('perfil')) {
                case '1':
                    redirect('administrador');
                    break;
                
                case '2':
                    redirect('index');
                    break;
            }
        }
    }
      
    
    public function cerrar_sesion(){
    
        $this->session->sess_destroy();
    
        redirect('index');
    }
    
}





	