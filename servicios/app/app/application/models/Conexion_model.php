<?php
    class Conexion_model extends CI_Model {
        public function GetAll(){
            //$query = $this->db->get('<tablename>'); selecciona la tabla a consultar
            $actividadesQ = $this->db->get('actividades');
            $lenguajeQ = $this->db->get('lenguaje');
            $marcadorQ = $this->db->get('marcador');
            $personalInfoQ = $this->db->get('personalinfo');
            $preguntasQ = $this->db->get('preguntas');
            $respuestasQ = $this->db->get('respuestas');
            $loginQ = $this->db->get('login');

            return array ($actividadesQ->result(),$lenguajeQ->result(),$marcadorQ->result(),$personalInfoQ->result(),$personalInfoQ->result(),$preguntasQ->result(),$respuestasQ->result(),$loginQ->result());
        }
    }
