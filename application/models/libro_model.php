<?php




class Libro_model extends CI_Model
{
	function _construct()
	{
		parent::_construct();
	}

public function guardar_libro($data){

	             $this-> db-> insert('libro', $data);
     }

public function select_categoria()
{
	 $query = $this-> db-> get ('libro_categoria');
	        return $query-> result();
}

public function select_libros(){

	$this-> db-> select('*');
	$this-> db-> from('libro');
	$this-> db-> join('libro_categoria', 'libro_categoria.categoria_id = libro.libro_categoria');
	$query = $this-> db-> get();
	return $query-> result();
}

public function select_libros_id($id)
    {
        $this->db->select('*');
        $this->db->from('libro');
        $this->db->where('libro_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

public function get_libros(){

	$this-> db-> select('*');
	$this-> db-> from('libro');
	$this-> db-> where('libro_stock >', 0);
	$this-> db-> where('libro_estado', 1);
	$this-> db-> join('libro_categoria', 'libro_categoria.categoria_id = libro.libro_categoria');
	$query = $this-> db-> get();
	return $query-> result();

}

public function get_libros_id($id)
    {
        $this->db->select('*');
        $this->db->from('libro');
        $this->db->where('libro_id', $id);
        $query = $this->db->get();
        $resultado = $query->row();
        return $resultado;
    }


    public function actualizar_libro($data, $id)
    {
        $this->db->where('libro_id', $id);
        $this->db->update('libro', $data);
    }



}