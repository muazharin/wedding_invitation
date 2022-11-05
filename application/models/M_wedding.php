<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wedding extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	public function send_wishes(){
		$name = $this->input->post('name');
		$wishes = $this->input->post('wishes');
		$data = [
			"name"=>$name,
			"wishes"=>$wishes,
			"date"=> date('Y-m-d H:i:s')
		];
		return $this->db->insert('comment', $data);
	}
}