<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class fc_solicitudrh extends CI_Controller
{
	public function __construct(){
		parent::__construct();	
		//$this->load->model('login_model','login');
	}
	
    public function index()
    {
        //$this->smartytpl->assign('seccion', 'servicios');
        if(!isset($_SESSION)){
        	session_start();
        }
        $this->load->view('pages/fc_solicitudrh');
    }
}

