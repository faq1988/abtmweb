<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {




	function __construct(){
		parent::__construct();
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
		
		$this->load->view('header');
		$this->load->view('contenido');
		$this->load->view('footer');
	}


public function challenger()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/challenger2016');
		$this->load->view('footer');
	}


public function nacional()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/nacional2016');
		$this->load->view('footer');
	}


public function sextopuntable()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/sextopuntable2016');
		$this->load->view('footer');
	}
	

	public function quintopuntable()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/quintopuntable2016');
		$this->load->view('footer');
	}

	public function cuartopuntable()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/cuartopuntable2016');
		$this->load->view('footer');
	}

	public function tercerpuntable()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/tercerpuntable2016');
		$this->load->view('footer');
	}

	public function segundopuntable()
	{
		
		$this->load->view('header');
		$this->load->view('articulos/segundopuntable2016');
		$this->load->view('footer');
	}
}
