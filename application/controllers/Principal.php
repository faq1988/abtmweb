<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {




	function __construct(){
		parent::__construct();
		//$this->load->model('entidad');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$data['entidades']= $this->entidad->obtenerEntidad();
		$this->load->view('header');
		$this->load->view('contenido');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

	public function insertar()
	{
		$data = array(
			'nombre' => $this->input->post('nom'),
			'apellido' => $this->input->post('ap'),
			'correo' => $this->input->post('corelec'),
			'telefono' => $this->input->post('tel')
			);

		$this->entidad->crearEntidad($data);
		echo 'Consulta enviada con exito';
		

	}


		public function calendario()
	{
		
		$this->load->view('header');
		$this->load->view('calendario');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

	public function fotos()
	{
		
		$this->load->view('header');
		$this->load->view('fotos');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

		public function disciplina()
	{
		
		$this->load->view('header');
		$this->load->view('disciplina');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

		public function reglamentoittf()
	{
		
		$this->load->view('header');
		$this->load->view('reglamentoittf');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

		public function historia()
	{
		
		$this->load->view('header');
		$this->load->view('historia');
		$this->load->view('footer');
		//$this->load->view('footer');

	}

		public function enlaces()
	{
		
		$this->load->view('header');
		$this->load->view('enlaces');
		$this->load->view('footer');
		//$this->load->view('footer');

	}


		public function venta()
	{
		
		$this->load->view('header');
		$this->load->view('venta');
		$this->load->view('footer');
		//$this->load->view('footer');

	}
}
