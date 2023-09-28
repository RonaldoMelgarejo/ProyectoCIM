<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//la clase debe llevar _model y el extends debe ser CI_Model
class Usuario_model extends CI_Model {

	//no olvidar ir a cargar en autoload.php linea 135 en autoload Model 'estudiante_model' que es estudiante_model.php q sera usado en todo el proyecto
	//empieza con metodo que devolvera lista
	public function validar($email,$password)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		//$this->db->where('login',$login);
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get();  //manda los datos a un controlador y se lo llamara desde estudiante.php
	}
	
	public function insertarUsuario($data)
	{
		return $this->db->insert('usuarios', $data);  // insert en ('nombreTablaBD','datos')
	}

	public function insertar_usuario($data)
	{
		// Insertar datos en la tabla 'usuarios'
		$this->db->insert('usuarios', $data['usuario']);

		// Obtener el último ID insertado en la tabla 'usuarios'
		$usuario_id = $this->db->insert_id();

		// Insertar datos en la tabla 'login'
		$data['login']['usuariosID'] = $usuario_id;
		$this->db->insert('login', $data['login']);

		return true; // Éxito en la inserción
	}


	//Opcion a validar usuario
	// Método para validar las credenciales de usuario en la tabla 'usuarios'
    public function validarUsuario($email, $password) {
        $this->db->select('id, nombre, primerApellido, segundoApellido, email');
        $this->db->where('email', $email);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    // Método para validar las credenciales de inicio de sesión en la tabla 'login'
    public function validarLogin($usuariosID, $password) {
        $this->db->select('id, nombreUsuario, rol');
        $this->db->where('usuariosID', $usuariosID);
        $this->db->where('password', $password); // Asegúrate de que esta sea la forma correcta de comparar contraseñas en tu base de datos
        $query = $this->db->get('login');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
	
}
