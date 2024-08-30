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

    /**
     * Crea un nuevo registro de alumno
     * @param array $datos
     * @return bool
     */
    function create($datos)
    {
        return $this->db->insert('alumno', $datos);
    }

    /**
     * Obtiene un alumno específico por ID
     * @param int $id
     * @return object
     */
    function getAlumnoById($id)
    {
        $this->db->where('alumno', $id); // 'alumno' should be the column name for the student ID
        $query = $this->db->get('alumno'); // 'alumno' should be your table name
        return $query->row(); // Return a single row as an object
    }

    /**
     * Elimina un alumno específico por ID
     * @param int $id
     * @return bool
     */
    function delete($id)
    {
        $this->db->where('alumno', $id); // 'alumno' should be the column name for the student ID
        return $this->db->delete('alumno'); // 'alumno' should be your table name
    }
    public function update($id, $datos)
{
    $this->db->where('alumno', $id); // 'alumno' is assumed to be the primary key column name
    return $this->db->update('alumno', $datos); // 'alumno' is the table name
}
}
