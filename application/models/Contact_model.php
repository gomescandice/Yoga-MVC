<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('contact', $data);
}
}
?>