<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


	//empieza con metodo
	public function index()
	{
		$data['mensaje']=$this->uri->segment(3);  //recupera el numero en la posicion 3 para dar mensajes index.php/usuarios/index/1(este es el numero)

		if($this->session->userdata('login'))
		{
			redirect('usuario/panel','refresh');
		}
		else
		{
			$this->load->view('inc_head'); //cargar cabecera
			$this->load->view('loginform',$data); //cargar vista loginform y se envia $data que debe ser dado el formato en la vista
			$this->load->view('inc_footer'); //cargar pie
		}		
	}
	
	public function validarusuario()
	{
		$email=$_POST['email'];
		$password=md5($_POST['password']);

		$consulta=$this->usuario_model->validar($email,$password);

		if($consulta->num_rows()>0)  //validamos usuario
		{
			foreach($consulta->result() as $row)
			{
				//creamos variables de session
				$this->session->set_userdata('idusuario',$row->idUsuario); //creamos variable 'idusuario' y lo rescatamos de $row->idusuario bd
				$this->session->set_userdata('email',$row->email);
				$this->session->set_userdata('tipo',$row->tipo);
				redirect('usuario/panel','refresh');
			}
		}
		else
		{
			redirect('usuario/index/1','refresh'); //cargamos el login en caso contrario
		}
	}

	public function panel()
	{
		if($this->session->userdata('email'))
		{
			//redirect('estudiante/index','refresh');
			//o tambie se puede crear por roles

			$this->load->view('inc_head'); //cargar cabecera
			$this->load->view('inc_navbar'); //cargar barra lateral
			$this->load->view('inc_sidebar'); //cargar nav
			$this->load->view('dashboard'); //cargar la pagina
			//$this->load->view('est_lista',$data); //cargar vista est_lista y se envia $data que debe ser dado el formato en la vista
			$this->load->view('inc_footer'); //cargar pie
		}
		else
		{
			redirect('usuario/index/2','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuario/index/3','refresh');
	}
	

	//Registro de usuarios
	public function register(){
		$this->load->view('registerform'); //cargar vista loginform y se envia $data que debe ser dado el formato en la vista
	}

	public function guardarusuario()
	{
		// Recupera los datos del formulario
		$data = array(
			'nombre' => $this->input->post('name'),
			'primerApellido' => $this->input->post('firstName'),
			'segundoApellido' => $this->input->post('lastName'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')), // Recuerda siempre encriptar las contraseñas
		);

		// Llama al modelo para insertar los datos en la base de datos
		$this->load->model('usuario_model'); // Asegúrate de haber cargado el modelo
		$resultado = $this->usuario_model->insertarUsuario($data);

		if ($resultado) {
			// Éxito en la inserción, redirige a una página de éxito o muestra un mensaje
			redirect('usuario/exito_registro');
		} else {
			// Error en la inserción, muestra un mensaje de error
			redirect('usuario/error_registro');
		}
	}

}
