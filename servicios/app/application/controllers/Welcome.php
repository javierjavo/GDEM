<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private function json_read($in) {
			$json = json_encode($in);//My JSON file here
			$data_row = json_decode($json); //decode json feed
			return $data_row;
		}
//for languaje
		private function SELECT($table,$rowSELECT,$columnSELECT){
			for ($i = 0; $i < count($table); $i++) {
				if ($table[$i]->ID == $rowSELECT){
					return $table[$i]->$columnSELECT;
					break;
				}
			}
			return $table[$rowSELECT]->$columnSELECT;
		}

//for login
private function SELECT_FROM_LOGIN($table,$rowSELECT,$password){
	for ($i = 0; $i < count($table); $i++){
		if ($table[$i]->user == $rowSELECT)
			return password_verify($password,$table[$i]->pass);
	}

}

	public function index(){

		//connection to db
		$this->load->model('conexion_model');
		$conexion=mysqli_connect('sql109.260mb.net','n260m_20998261','@javier1','n260m_20998261_probem') or die('No se puede conectar con la base de datos'.mysqli_error($conexion));
		//tables extraction
		list($actividades,$lenguaje,$marcador,$personalInfo,$preguntas,$respuestas,$login) = $this->conexion_model->GetAll();
		//get variables for login
		$login_user = mysqli_real_escape_string($conexion,$_GET['user']);
		$login_pass = mysqli_real_escape_string($conexion,$_GET['pass']);
		//SQL tables to JSON transform
		$actividades_decoded = $this->json_read($actividades);
		$lenguaje_decoded = $this->json_read($lenguaje);
		$marcador_decoded = $this->json_read($marcador);
		$personalInfo_decoded = $this->json_read($personalInfo);
		$preguntas_decoded = $this->json_read($preguntas);
		$respuestas_decoded = $this->json_read($respuestas);
		echo $login_decoded = $this->json_read($login);
		//validate login action
		$login_success = $this->SELECT_FROM_LOGIN($login_decoded,$login_user,$login_pass);
		if ($login_success){
			//valid user
			echo '[{ "IDLogin":"true" }]';
		}
		//hacer query select y comparar si el contenido de get coincide con db
		//llamar el mini json de true para login
		$selected_data = $this->SELECT($lenguaje_decoded,140,'en');
		//echo $selected_data;//Realiza un select de JSON filtrado por tabla, fila, columna a seleccionar
		//echo '[{ "IDLogin":"true" }]'; //validar el usuario y contraseña del login
	}
}
