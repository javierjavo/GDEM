<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
			die();
		}
		parent::__construct();
	}
	
	private function json_read($in) {
			$json = json_encode($in);//My JSON file here
			$data_row = json_decode($json); //decode json feed
			return $data_row;
		}

		private function SELECT($table,$rowSELECT,$columnSELECT){
			for ($i = 0; $i < count($table); $i++) {
				if ($table[$i]->ID == $rowSELECT){
					return $table[$i]->$columnSELECT;
					break;
				}
			}
			return $table[$rowSELECT]->$columnSELECT;
		}

	public function index(){
		$_GET["user"];
		//hacer query select y comparar si el contenido de get coincide con db
		//llamar el mini json de true para login
		$this->load->model('conexion_model');
		list($actividades,$lenguaje,$marcador,$personalInfo,$preguntas,$respuestas,$login) = $this->conexion_model->GetAll();
		$lenguaje_decoded = $this->json_read($lenguaje);
		$selected_data = $this->SELECT($lenguaje_decoded,9,'en');
		//echo $selected_data;//Realiza un select de JSON filtrado por tabla, fila, columna a seleccionar
		echo $_GET["user"];
		//echo '[{ "IDLogin":"true" }]'; //validar el usuario y contraseña del login
	}
}

/*	
	Task Board
	Process login account to succesful login
*/

/*
	Tables
	1 - Login
	2 - Personal Info
	3 - Lenguaje
	4 - Actividades
	5 - Preguntas
	6 - Respuestas 
*/

/*
	Row Selection
	select the ID from their respective table
*/

/*
	Languaje
	Choose 'en' to english
	or
	Choose 'es' to spanish
*/