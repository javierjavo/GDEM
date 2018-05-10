<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//$_GET["var"];
		//hacer query select y comparar si el contenido de get coincide con db
		//llamar el mini json de true para login
		$this->load->model('conexion_model');
		list($actividades,$lenguaje,$marcador,$personalInfo,$preguntas,$respuestas,$login) = $this->conexion_model->GetAll();
		$lenguaje_decoded = $this->json_read($lenguaje);
		$selected_data = $this->SELECT($lenguaje_decoded,9,'en');
		echo $selected_data;//Realiza un select de JSON filtrado por tabla, fila, columna a seleccionar
		//echo '[{ "IDLogin":"true" }]'; //validar el usuario y contraseña del login
	}
}
