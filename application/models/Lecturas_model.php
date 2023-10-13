<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturas_model extends CI_Model {

    public function guardar_lectura($temperature, $humidity) {
        $data = array(
            'temperatura' => $temperature,
            'humedad' => $humidity
        );

        $this->db->insert('sensorP', $data);
    }

    // En tu modelo medicion_model.php
	public function obtenerDatosSensordht11Real()
	{
		// Realiza una consulta a la base de datos para obtener los datos de la tabla sensordht11
		$query = $this->db->query("SELECT temperatura, humedad, fechaHoraMedicion FROM sensorp");

		// Devuelve los resultados como un array de objetos
		return $query->result();
	}

    public function guardar_luminosidad($luminosidad) {
        $data = array(
            'luminosidad' => $luminosidad
        );
        
        $this->db->insert('lecturas_luminosidad', $data);
    }
}
