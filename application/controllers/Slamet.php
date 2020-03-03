<?php 

class Slamet extends CI_Controller{
	public function index(){
		// echo "GUWEH SLAMET";
		$this->load->helper('url');
		$this->load->view('login');

		echo base_url('css/style.css');

		// var_dump();

		var_dump($this->config->config);
	}
}




 ?>