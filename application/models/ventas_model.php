<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {



	    function __construct()
	        {
		      parent::__construct();
		    }

		    public function guardar_venta($data){
		    	$this->db->insert('venta',$data);
		    }


		    public function guardar_detalle_venta($data){
		    	$this->db->insert('detalle_venta', $data);
		    }


		    public function select_venta(){

		    	$this->db->select('*');
		    	$this->db->from('venta');
		    	$this->db->join('personas','personas.id_persona = venta.id_cliente');
		    	$query = $this->db->get();
		    	return $query->result();
		    }

		    public function select_detalle_venta($id)
            {
            $this->db->select('*');
            $this->db->from('detalle_venta');
            $this->db->where('id_venta', $id);
            $this->db->join('venta', 'venta.venta_id = detalle_venta.id_venta');
            $this->db->join('libro', 'libro.libro_id = detalle_venta.id_producto');
            $query = $this->db->get();
            return $query->result();
            }



		}