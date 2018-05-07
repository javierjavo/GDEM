<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conexion extends CI_Controller {
	function __construct() {
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
			die();
		}
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('conexion_model');
		$consulta_usuarios_sql = $this->conexion_model->GetAll();
		$imported_data = json_encode($consulta_usuarios_sql);
		$jsonIterator = new RecursiveIteratorIterator(
			new RecursiveArrayIterator(json_decode($imported_data, TRUE)),
			RecursiveIteratorIterator::SELF_FIRST);
		
		foreach ($jsonIterator as $key => $val) {
			if(is_array($val)) {
				$registry = $key + 1;
				echo "$registry:\n <br>";
			} else {
				echo "$key => $val\n <br>";
			}
		}
	}
}