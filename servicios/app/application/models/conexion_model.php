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

            //$query [0] = $actividadesQ->result();
            //$query [1] = $lenguajeQ->result();
            //$query [2] = $marcadorQ->result();
            //$query [3] = $personalInfoQ->result();
            //$query [4] = $preguntasQ->result();
            //$query [5] = $respuestasQ->result();
            //$query [6] = $loginQ->result();

            return array ($actividadesQ->result(),$lenguajeQ->result(),$loginQ->result(),$marcadorQ->result(),$personalInfoQ->result(),$personalInfoQ->result(),$preguntasQ->result(),$respuestasQ->result());
        }
    }
