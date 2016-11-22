<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class entidad extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function crearEntidad($data){
		$this->db->insert('entidad', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 'correo'=>$data['correo'],
											'telefono'=>$data['telefono']));

	}


	function obtenerEntidad(){
		$query = $this->db->get('entidad');
		if ($query->num_rows() >0 ) return $query;
		

	}


}




?>