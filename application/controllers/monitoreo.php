<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoreo extends CI_Controller {


	//empieza con metodo
	public function index()
	{
		$lista=$this->medicion_model->lista();   //almacena en una variable $lista el metodo lista() que esta en estudiante_model
		$data['mediciones']=$lista;		//$data es un array asociativo que puede almacenar muchos datos de muchas consultas como docente_model->lista2
		
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('inc_navbar'); //cargar barra lateral
		$this->load->view('inc_sidebar'); //cargar nav
		$this->load->view('dashboard',$data); //cargar la pagina
		//--$this->load->view('est_lista',$data); //cargar vista est_lista y se envia $data que debe ser dado el formato en la vista
		$this->load->view('inc_footer'); //cargar pie
	}

	//Prueba para index Tables
	public function datatables(){
		$lista=$this->medicion_model->lista();   //almacena en una variable $lista el metodo lista() que esta en estudiante_model
		$data['medicion']=$lista;		//$data es un array asociativo que puede almacenar muchos datos de muchas consultas como docente_model->lista2
		
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('inc_navbar'); //cargar barra lateral
		$this->load->view('inc_sidebar'); //cargar nav
		$this->load->view('tables', $data); //cargar la pagina
		$this->load->view('inc_footer'); //cargar pie

	}

	//Prueba para index Tables
	public function setting(){
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('inc_navbar'); //cargar barra lateral
		$this->load->view('inc_sidebar'); //cargar nav
		$this->load->view('settingprofile'); //cargar la pagina
		$this->load->view('inc_footer'); //cargar pie

	}

	//Prueba Morris js
	public function morris(){
		$this->load->model('Medicion_model');
        $data['mediciones'] = $this->Medicion_model->obtener_mediciones();
        
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('inc_navbar'); //cargar barra lateral
		$this->load->view('inc_sidebar'); //cargar nav
		$this->load->view('morris-chart', $data); //cargar la pagina
		$this->load->view('inc_footer'); //cargar pie

	}
	
	public function modificar(){
		$idEstudiante=$_POST['idEstudiante'];   //en la variable $idEstudiante q creamos recibimos el parametro de del input=idEstudiante
		$data['infoestudiante']=$this->estudiante_model->recuperarEstudiante($idEstudiante);   //realizamos la consulta al modelo mandando el valor del id
	
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('est_modificar',$data); //cargar vista est_modificar y se envia $data que debe ser dado el formato en la vista
		$this->load->view('inc_footer'); //cargar pie
	}

	public function modificarbd(){
		$idEstudiante=$_POST['idEstudiante'];
		$data['nombre']=$_POST['nombre'];   //'nombre' como esta escrito en BD y el post 'nombre' como esta escrito en input del formulario 
		$data['primerApellido']=$_POST['primerApellido'];
		$data['segundoApellido']=$_POST['segundoApellido'];
		$data['nota']=$_POST['nota'];

		$this-> estudiante_model->modificarEstudiante($idEstudiante,$data);  //envia a model.php los datos para hacer update
		
		redirect('estudiante/index','refresh');
	}

	public function agregar(){
		$this->load->view('inc_head'); //cargar cabecera
		$this->load->view('est_agregar'); //cargar vista eset_agregar 
		$this->load->view('inc_footer'); //cargar pie
	}

	public function agregarbd(){
		$data['nombre']=$_POST['nombre'];   //'nombre' como esta escrito en BD y el post 'nombre' como esta escrito en input del formulario 
		$data['primerApellido']=$_POST['primerApellido'];
		$data['segundoApellido']=$_POST['segundoApellido'];
		$data['nota']=$_POST['nota'];

		$this->estudiante_model->agregarEstudiante($data); //enviamos el al insert esos datos

		redirect('estudiante/index','refresh');
	}

	public function eliminarbd(){
		$idEstudiante=$_POST['idEstudiante'];
		$this->estudiante_model->eliminarEstudiante($idEstudiante); //enviamos al delete esos datos

		redirect('estudiante/index','refresh');
	}


}
