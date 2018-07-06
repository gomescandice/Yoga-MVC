<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mine extends CI_Controller {
    public function __construct() {


        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        
    }
	public function index()
	{
		$this->load->view('index');
	}

	public function classes()
	{
		$this->load->model('Classes_model');
		$data['class'] = $this->Classes_model->get_classes();

		$this->load->view('classes',$data);

	}

	public function schedule()
	{
		$this->load->model('Schedule_model');
		$data['schedule1'] = $this->Schedule_model->get_schedule1();
		$data['schedule2'] = $this->Schedule_model->get_schedule2();
		$data['schedule3'] = $this->Schedule_model->get_schedule3();
		$this->load->view('schedule',$data);

	}
	public function register()
	{
		$this->load->model('Register_model');
		$this->load->view('register');

	}
	public function register_submit(){

		$this->load->model('Register_model');
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[A-Za-z, ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/]');
		$this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[a-zA-Z]\w{8,16}$/]');

		if ($this->form_validation->run() == FALSE) {
			$dataMsg1['message'] = 'The inputs do not meet validation criteria';
			$this->load->view('register', $dataMsg1);
		}else{

			$data1 = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'password' => $this->input->post('password'),
			'address' => $this->input->post('address'));

			$data2 = array(
			'classid' => $this->input->post('class_type'),
			'timeid' => $this->input->post('time'),
			'daysid' => $this->input->post('schedule'));

			$classid = $this->input->post('class_type');
			$timeid =  $this->input->post('time');
			$daysid = $this->input->post('schedule');

			$data3['count'] = $this->Register_model->get_schedule($classid, $timeid, $daysid);

				$this->Register_model->form_insert1($data1);
				$this->Register_model->form_insert2($data2);
				$dataMsg2['message'] = 'Congratulations! You are now a client at  Path of Light Yoga Studio.';
				$this->load->view('register', $dataMsg2);
		}


	}
	public function contact()
	{
		$this->load->view('contact');

	}
	public function contact_submit(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[A-Za-z, ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$dataMsg1['message'] = 'The inputs do not meet validation criteria';
			$this->load->view('contact', $dataMsg1);
		}else{

		$this->load->model('Contact_model');
		$data1 = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'comments' => $this->input->post('comments'));

		$this->Contact_model->form_insert($data1);
		$dataMsg2['message'] = 'Your comment has been sent';
		$this->load->view('contact', $dataMsg2);
	}
	}
}
?>