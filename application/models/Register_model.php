<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert1($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('client', $data);
}
function form_insert2($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('cSchedule', $data);
}
function get_schedule($classid, $timeid, $daysid){

    $query = $this->db->query('SELECT count(*) from schedule where timeid = "' . $timeid . '" and classid = "' . $classid . '" and daysid = "' . $daysid . '";');
	return $query->result();
}
}
?>