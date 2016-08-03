<?php
class logout extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->session->sess_destroy();
		if(isset($_SESSION['idPerfil'])){
        			$this->session->unset_userdata('idPerfil');
        }
		redirect('login/index');
	}
}
	