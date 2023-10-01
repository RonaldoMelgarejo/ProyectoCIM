<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//la clase debe llevar _model y el extends debe ser CI_Model
class Medicion_model extends CI_Model {

	//no olvidar ir a cargar en autoload.php linea 135 en autoload Model 'estudiante_model' que es estudiante_model.php q sera usado en todo el proyecto
	//empieza con metodo que devolvera lista
	public function lista()
	{
		$this->db->select('*');
		$this->db->from('sensordht11');
		return $this->db->get();  //manda los datos a un controlador y se lo llamara desde estudiante.php
	}
	
	public function recuperarEstudiante($idEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idEstudiante',$idEstudiante);  //recibe datos de $idEstudiante y recupera de BD idEstudiante es nombre de la BD
		return $this->db->get();  //manda los datos a un controlador a modificar() y se lo llamara desde estudiante.php
	}
	
	public function modificarEstudiante($idEstudiante,$data)
	{
		$this->db->where('idEstudiante',$idEstudiante);
		$this->db->update('estudiantes',$data);  // update('nombreTablaBD','datos')
	}

	public function agregarEstudiante($data){
		$this->db->insert('estudiantes',$data); // insert en ('nombreTablaBD','datos')
	}

	public function eliminarEstudiante($idEstudiante){    //hard delete
		$this->db->where('idEstudiante',$idEstudiante);
		$this->db->delete('estudiantes',$data);  // delete('nombreTablaBD','datos')
	}

	public function obtenerMediciones2() {
        // Realiza una consulta para obtener los datos de la tabla sensordht11
        $query = $this->db->get('sensordht11');

        // Verifica si hay datos y los devuelve
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); // Retorna un array vacío si no hay datos
        }
    }
	// En medicion_model.php
    public function obtener_mediciones() {
        $this->db->select('temperatura, humedad, fechaHoraMedición');
        $this->db->from('sensordht11'); // Reemplaza con el nombre de tu tabla
        $this->db->order_by('fechaHoraMedición', 'asc'); // Ordena por fechaHoraMedicion ascendente
        $query = $this->db->get();
        return $query->result();
    }

}
