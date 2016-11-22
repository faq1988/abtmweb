<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Circuitoabtm extends CI_Controller {

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
		$this->load->view('header');			
		$this->load->view('reglamento');
		$this->load->view('footer');
	}

	public function dondejugar()
	{
		$this->load->view('header');			
		$this->load->view('dondejugar');
		$this->load->view('footer');
	}


	public function sistemapuntaje()
	{
		$this->load->view('header');			
		$this->load->view('sistemapuntaje');
		$this->load->view('footer');
	}

	public function autoridades()
	{
		$this->load->view('header');			
		$this->load->view('autoridades');
		$this->load->view('footer');
	}

}
