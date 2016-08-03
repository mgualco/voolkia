<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class fc_solicitud extends CI_Controller
{
	public function __construct(){
		parent::__construct();	
		//$this->load->model('login_model','login');
	}
	
    public function index()
    {
        //$this->smartytpl->assign('seccion', 'servicios');
        $this->load->view('pages/fc_solicitud');
    }
}

