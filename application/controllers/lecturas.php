<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturas extends CI_Controller {

    public function guardar() {
        print_r($_POST);
        $temperature = $this->input->post('temperature');
        $humidity = $this->input->post('humidity');
        
        if ($temperature && $humidity) {
            $this->load->model('Lecturas_model');
            $this->Lecturas_model->guardar_lectura($temperature, $humidity);
            echo "Datos almacenados correctamente.";
        } else {
            echo "Error en los datos recibidos.";
        }
    }

    public function guardar_luminosidad() {
        $luminosidad = $this->input->post('luminosidad');
        
        if ($luminosidad !== false) {
            $this->load->model('Lecturas_model');
            $this->Lecturas_model->guardar_luminosidad($luminosidad);
            echo "Datos de luminosidad almacenados correctamente.";
        } else {
            echo "Error en los datos recibidos.";
        }
    }
}