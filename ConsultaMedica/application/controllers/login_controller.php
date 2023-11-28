<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	var $msg;

	public function __construct(){

		parent::__construct();
    	$this->load->helper('url');
        $this->load->database();   
        $this->load->model('Login_model');
        $this->load->library('session');
	}

	public function index()
	{
        $data['msg'] = $this->msg;

		$this->load->view('login');
	}

	public function validacion(){
		 $email = $this->input->post('correoelectronico');
		 $clave = $this->input->post('contrasena');

		 $hospitalario = $this->Login_model->get_usuario($email,$clave);

		 if ( $hospitalario ){
		 	$this->session->set_userdata('nombre',$hospitalario->NombrePaciente);
		 	redirect('Home_controller');
            
		 } else
		 {
		 	$this->msg = "Correo electrónico y/o Clave incorrecta";
		 	redirect('login_controller');
		 }
 
	}
	public function cierra_sesion(){
		$this->session->sess_destroy();
		$this->index();
	}
}
