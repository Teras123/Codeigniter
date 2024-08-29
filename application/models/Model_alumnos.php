<?php
class Model_alumnos extends CI_Model
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Obtiene los registros de alumnos
     * @return [type] [arreglo de datos]
     */



    function getAlumnos()
    {
        $sql = "SELECT * FROM alumno";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function create($datos)
	{
		return $this->db->insert('alumno', $datos);
	}

}
