<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller {

	public function __construct(){
		parent:: __construct(); //constructor de la clase padre
		$this->load->helper('url'); //carga el helper de funciones para extrar rutas
		$this->load->library('form_validation'); //Libreria de validacion de formularios
		
		$this->load->database();
		$this->load->model('clinica_model');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->has_userdata('nombre')){
			$this->load->view('layout/homecabecera');
			$this->load->view('home');
			$this->load->view('layout/homepie');
		}else{
			redirect('login_controller');
		}
		
	}

	public function muestradatos()
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		
		$datos1['formularios'] = $this->clinica_model->get_formularios();
		
		$this->load->view('datitos',$datos1);
	
	}

	public function muestrausuarios()
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		
		$datos1['formularios'] = $this->clinica_model->get_usuarios();
		
		$this->load->view('users',$datos1);
	
	}
	
	public function formulario()
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		$this->load->view('form');
	}
	
	/*public function logearse()
	{
		$this->load->view('login');
	}*/
	
	public function registrarse()
	{
		$this->load->view('singUp');
	}

	public function editar_formulario($id)
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		$data['formularios'] = $this->clinica_model->get_formulario($id);

		$this->load->view('editaconsulta',$data);
	}

	public function editar_usuario($id)
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		$data['formularios'] = $this->clinica_model->get_usuario($id);

		$this->load->view('editausuario',$data);
	}

	public function update_formularios()
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
		$id = $this->input->post('id');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'apellido', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'required|greater_than[0]|max_length[12]');
		$this->form_validation->set_rules('calle1', 'Primera Calle', 'required');
		$this->form_validation->set_rules('calle2', 'Segunda Calle', 'required');
		$this->form_validation->set_rules('city', 'Ciudad', 'required');
		$this->form_validation->set_rules('state', 'Estado', 'required');
		$this->form_validation->set_rules('cp', 'Codigo Postal', 'required|max_length[5]');
		$this->form_validation->set_rules('genero', 'Genero', 'required');
		$this->form_validation->set_rules('edad', 'rango de edad', 'required');
		$this->form_validation->set_rules('enfermedad', 'enfermedades', 'required');
		$this->form_validation->set_rules('inmunitario', 'sistema es inmunitario', 'required');
		$this->form_validation->set_rules('alergia', 'Alergia', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');

		if ($this->form_validation->run() == FALSE)
        {
			redirect("Home_controller/editar_formulario/$id?error=true"); //controlador, funcion y la variable que se manda por POST
        }
        else
        {

			$datos = array(
					'NombrePacientes' => $this->input->post('nombre'),
					'ApellidosPacientes' => $this->input->post('apellido'),
					'Telefono' => $this->input->post('telefono'),
					'Calle1' => $this->input->post('calle1'),
					'Calle2' => $this->input->post('calle2'),
					'Ciudad' => $this->input->post('city'),
					'Estado' => $this->input->post('state'),
					'CodigoPostal' => $this->input->post('cp'),
					'Genero' => $this->input->post('genero'),
					'Edades' => $this->input->post('edad'),
					'EnfePrexi' => $this->input->post('enfermedad'),
					'SisInmunitario' => $this->input->post('inmunitario'),
					'AlergiaMedic' => $this->input->post('alergia'),
					'MedicamentoAlergia' => $this->input->post('medic'),
					'FechaIniSintomas' => $this->input->post('fecha'),
					'ID_Doctor' => $this->input->post('doctor'),
				 );	
	           $arreglo = $this->input->post('sintoma');
	           $datos['Sintomas'] = implode(',',$arreglo);

			$this->clinica_model->update_formulario($id, $datos);
			redirect('Home_controller');
		}
	}

	public function eliminar_formulario($id)
	{

		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }

		$this->clinica_model->elimina_paciente($id);
	   	redirect('Home_controller');
	}

	public function eliminar_usuario($id)
	{

		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }

		$this->clinica_model->elimina_usuario($id);
	   	redirect('Home_controller');
	}

	public function guarda_usuario()
	{
		//print_r($this->input->post()); //comprobar si se estan enviando los datos
		$this->form_validation->set_rules('nombres', 'Nombre', 'required');
		$this->form_validation->set_rules('apellidos', 'Apellido', 'required');
		$this->form_validation->set_rules('anios', 'Edad', 'required|greater_than[0]|less_than[126]');
		$this->form_validation->set_rules('altura', 'Altura en numeros', 'required|numeric|greater_than[0]');
		$this->form_validation->set_rules('peso', 'Peso en Kilogramos', 'required|numeric|greater_than[0]');
		$this->form_validation->set_rules('correo', 'Correo electrónico', 'required|valid_email');
		$this->form_validation->set_rules('contra', 'Contraseña', 'required');
		$this->form_validation->set_message('required', 'El dato {field} es requerido');
		$this->form_validation->set_message('greater_than[0]', 'El dato {field} no puede ser menor a 0');
		$this->form_validation->set_message('numeric', 'El dato {field} debe ser un numero');
		$this->form_validation->set_message('valid_email', 'El email {field} debe ser un correo valido');

        if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('singUp');
        }
        else
        {
			$datos = array(
				'NombrePaciente' => $this->input->post('nombres'),
				'ApellidosPaciente' => $this->input->post('apellidos'),
				'Edad' => $this->input->post('anios'),
				'TipoSanguineo' => $this->input->post('sangre'),
				'Peso' => $this->input->post('peso'),
				'Estatura' => $this->input->post('altura'),
				'email' => $this->input->post('correo'),
				'cve' => $this->input->post('contra'),
			 );
		    $this->clinica_model->guarda_usuario($datos);
		    redirect('Home_controller');
        }
	}

	public function edita_usuario()
	{
		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }

		$id = $this->input->post('id');

		//print_r($this->input->post()); //comprobar si se estan enviando los datos
		$this->form_validation->set_rules('nombres', 'Nombre', 'required');
		$this->form_validation->set_rules('apellidos', 'Apellido', 'required');
		$this->form_validation->set_rules('anios', 'Edad', 'required|greater_than[0]|less_than[126]');
		$this->form_validation->set_rules('altura', 'Altura en numeros', 'required|numeric|greater_than[0]');
		$this->form_validation->set_rules('peso', 'Peso en Kilogramos', 'required|numeric|greater_than[0]');
		$this->form_validation->set_rules('correo', 'Correo electrónico', 'required|valid_email');
		$this->form_validation->set_message('required', 'El dato {field} es requerido');
		$this->form_validation->set_message('greater_than[0]', 'El dato {field} no puede ser menor a 0');
		$this->form_validation->set_message('numeric', 'El dato {field} debe ser un numero');
		$this->form_validation->set_message('valid_email', 'El email {field} debe ser un correo valido');

        if ($this->form_validation->run() == FALSE)
        {
			redirect("Home_controller/editar_usuario/$id?error=true"); //controlador, funcion y la variable que se manda por POST
        }
        else
        {
			$datos = array(
				'NombrePaciente' => $this->input->post('nombres'),
				'ApellidosPaciente' => $this->input->post('apellidos'),
				'Edad' => $this->input->post('anios'),
				'TipoSanguineo' => $this->input->post('sangre'),
				'Peso' => $this->input->post('peso'),
				'Estatura' => $this->input->post('altura'),
				'email' => $this->input->post('correo'),
				'cve' => $this->input->post('contra'),
			 );
		    $this->clinica_model->update_usuario($id, $datos);
		    redirect('Home_controller');
        }
	}

	public function guarda_formulario()
	{

		if(! $this->session->has_userdata('nombre')){
            redirect('login_controller');
        }
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'apellido', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'required|greater_than[0]|max_length[12]');
		$this->form_validation->set_rules('calle1', 'Primera Calle', 'required');
		$this->form_validation->set_rules('calle2', 'Segunda Calle', 'required');
		$this->form_validation->set_rules('city', 'Ciudad', 'required');
		$this->form_validation->set_rules('state', 'Estado', 'required');
		$this->form_validation->set_rules('cp', 'Codigo Postal', 'required|max_length[5]');
		$this->form_validation->set_rules('genero', 'Genero', 'required');
		$this->form_validation->set_rules('edad', 'rango de edad', 'required');
		$this->form_validation->set_rules('enfermedad', 'enfermedades', 'required');
		$this->form_validation->set_rules('inmunitario', 'sistema es inmunitario', 'required');
		$this->form_validation->set_rules('alergia', 'Alergia', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');

		$d=rand(1,3);

		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('form');
        }
         else
        {
            $datos = array(
				'NombrePacientes' => $this->input->post('nombre'),
				'ApellidosPacientes' => $this->input->post('apellido'),
				'Telefono' => $this->input->post('telefono'),
				'Calle1' => $this->input->post('calle1'),
				'Calle2' => $this->input->post('calle2'),
				'Ciudad' => $this->input->post('city'),
				'Estado' => $this->input->post('state'),
				'CodigoPostal' => $this->input->post('cp'),
				'Genero' => $this->input->post('genero'),
				'Edades' => $this->input->post('edad'),
				'EnfePrexi' => $this->input->post('enfermedad'),
				'SisInmunitario' => $this->input->post('inmunitario'),
				'AlergiaMedic' => $this->input->post('alergia'),
				'MedicamentoAlergia' => $this->input->post('medic'),
				'FechaIniSintomas' => $this->input->post('fecha'),
				'ID_Doctor' => $this->input->post('doctor'),
			 );	
            $arreglo = $this->input->post('sintoma');
            $datos['Sintomas'] = implode(',',$arreglo);
		    
		    $this->clinica_model->guarda_formulario($datos);
		    redirect('Home_controller');
        }
	}
}
