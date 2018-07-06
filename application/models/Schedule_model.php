<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Schedule_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
public function get_schedule1(){

        $query1 = $this->db->get('days');
		return $query1->result();
}
public function get_schedule2(){

		$query2 = $this->db->query('SELECT t.time, c.classname from time t, class c, schedule s where t.timeid = s.timeid and c.classid = s.classid and s.daysid = "weekday";');
		return $query2->result();
}
public function get_schedule3(){

		$query3 = $this->db->query('SELECT t.time, c.classname from time t, class c, schedule s where t.timeid = s.timeid and c.classid = s.classid and s.daysid = "weekend";');
		return $query3->result();
}



//$query2 = $this->db->select('c.classname','t.time')->from('s.schedule','c.class', 't.time')->where("t.timeid",'s.timeid')->and("c.classid", 's.classid')->and('s.daysid','weekday');
}
?>
