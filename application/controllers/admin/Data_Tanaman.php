<?php

class Data_Tanaman extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		else{

		}
		$this->load->model("ModelOverview");

		// if (!$this->session->userdata('username')) {
		// 	redirect('login');
		// }
	}

	public function index()
	{
		// $data = $this->ModelOverview->properties;
        $this->load->view("admin/tables");
	}
}