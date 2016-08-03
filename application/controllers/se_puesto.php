<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class se_puesto extends CI_Controller
{
	public function __construct(){
		parent::__construct();	
		//$this->load->model('login_model','login');
	}
	
    public function index()
    {
        //$this->smartytpl->assign('seccion', 'servicios');
        $this->load->view('pages/se_puesto');
    }
}

