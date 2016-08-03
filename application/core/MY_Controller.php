<?php
class MY_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if (!isset($_SESSION)){
			//carga de la libreria se sesiones
			$this->load->library('session');
		}
		//$this->config->load('sessions');
		//if($this->session->has_userdata('usuario') == NULL){
		//	redirect('../login/index');
		//}
	}
}