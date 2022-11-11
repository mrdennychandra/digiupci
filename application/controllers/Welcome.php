<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//http://localhost/ekatalog/index.php/welcome/index
	public function index(){
		$this->load->view('welcome_message');
	}

	//http://localhost/ekatalog/index.php/welcome/hello
	public function hello(){
		$data['nama'] = "Denny";
		$data['nim'] = "123456";
		//mendapatkan variabel $_GET[]
		$data['word'] = $this->input->get('word');
		//passing data ke view
		$this->load->view('hello',$data);
	}

	//TODO : Buat view untuk ini
	//http://localhost/ekatalog/index.php/welcome/profile
	public function profile(){
		//load view di folder profile kemudian file index.php
		$this->load->view('profile/index');
	}
}
