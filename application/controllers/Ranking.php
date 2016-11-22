<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

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
		$this->load->view('rankingsd');
		$this->load->view('footer');
	}

	public function rankingprimera()
	{
		$this->load->view('header');			
		$this->load->view('rankingprimera');
		$this->load->view('footer');
	}

	public function rankingsegunda()
	{
		$this->load->view('header');			
		$this->load->view('rankingsegunda');
		$this->load->view('footer');
	}

	public function rankingtercera()
	{
		$this->load->view('header');			
		$this->load->view('rankingtercera');
		$this->load->view('footer');
	}

	public function rankingcuarta()
	{
		$this->load->view('header');			
		$this->load->view('rankingcuarta');
		$this->load->view('footer');
	}

}
