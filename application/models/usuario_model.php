<?php


class Usuario_model extends CI_Model {

    function _construct(){
		parent::_construct();
	}


	
public function guardar_usuario($data)
	{
		$this-> db->insert('personas', $data);
	}

public function buscar_usuario ($usuario, $contrasenia)
{
	 $this->db->select('*');                    //Trae todos los datos
     $this->db->from('personas');               //Tabla "persona" de BD
     $this->db->where('mail', $usuario);        //Cuando "mail" sea igual al mail de la tabla de BD
     $this->db->where('password', $contrasenia);//Cuando "contrasenia" sea igual a la contrasenia de la tabla de BD
     $query = $this->db->get();                 //Se ejecuta la funcion y se almacena en "$query"
     $resultado = $query->row();                //Devuelve un registro y se almacena en "$resultado"
     return $resultado;
    }


}
