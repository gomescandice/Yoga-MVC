<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Classes_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
public function get_classes(){

        $query = $this->db->get('class');
        return $query->result();
}}
?>