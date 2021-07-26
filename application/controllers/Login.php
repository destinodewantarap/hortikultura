<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		

		if($this->session->userdata('status') == "login"){
			redirect(base_url("admin/Overview"));
		}
		$this->load->model('M_login');

		//membuat variabel bernama $this->table berisi nama table, yaitu 'user'
        $this->table = 'user';
        //perintah login tidak bisa kembali ke login
        // if(!$this->session->userdata('username')){
		// 	redirect(base_url("login"));
		// }
	}

	function index(){
		// if ($this->session->userdata("status") == "login") {
		// 	redirect(base_url('login'));
		// }
		$this->load->view('v_login');
		// echo $this->session->userdata('status');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password);
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin/Overview"));

		}else{
			 $this->session->set_flashdata('item','Username atau password anda salah, silakan coba lagi');

             //redirect ke halaman login
             redirect(site_url('login'));		
         }
	}
}