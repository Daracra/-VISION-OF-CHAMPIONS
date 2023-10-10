<?php

class Consulta_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }

    public function guardar_consulta($data)
    {
        $this->db->insert('consultas', $data);
    }

    public function select_consultas()
    {
        $this->db->select('*');
        $this->db->from('consultas');
        $query = $this->db->get();
        return $query->result();
    }

    public function actualizar_consulta($data, $id)
    {
        $this->db->where('id_consulta', $id);
        $this->db->update('consultas', $data);
    }
}