<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_wedding');
	}

	public function index()
	{
		$data['name'] = $this->input->get('name');
		$this->load->view('wedding_envelope', $data);
	}
	public function open()
	{
		$data['name'] = $this->input->get('name');
		$this->load->view('wedding_invitation', $data);
	}

	public function send_wishes(){
		$data = $this->M_wedding->send_wishes();
		echo json_encode($data);
	}
	public function list_wishes(){
		$query = "SELECT * FROM comment ORDER BY id DESC";
		$data = $this->db->query($query)->result();
		echo json_encode($data);
	}
}
