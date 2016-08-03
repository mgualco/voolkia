<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
		parent::__construct();	
		//$this->load->helper('url');
        $this->load->library('session');
		//$this->load->model('login_model','login');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //redirect('/ss/index');
                if(isset($_SESSION['idPerfil'])){
                    $this->session->unset_userdata('idPerfil');
                    $this->session->sess_destroy();
                }
                if(!empty($_POST)){

                    $datos = array();
                    $this->load->model('login_model','login');
                    $usuario = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
                    $password = $_POST['password'];
                    $datos['usuario'] = $usuario;
                    $datos['password'] = md5($password);
                    $usuarioValido = $this->login->verificaUsuario($datos);
                    if(!empty($usuarioValido)){
                        //redireccionar a la home

                        $perfil = $this->login->perfil($usuarioValido['id']);
                        //$this->session->set_userdata('idPerfil',$perfil[0]['id']);
                        $this->session->set_userdata('nombrePerfil',$perfil[0]['nombre']);
                        $this->session->set_userdata('usuario',$usuarioValido['usuario']);
                        $this->session->mark_as_temp('usuario',180);
                        /*
                        session_start([
                            'cookie_lifetime' => 60,
                        ]);
                        $_SESSION['nombrePerfil'] = $perfil[0]['nombre'];
                        $_SESSION['usuario'] = $usuarioValido['usuario'];
                        $_SESSION['hora'] = time();
                        */
                        redirect('/ss/index');
                    }else{
                        $this->session->set_userdata('idPerfil','0');
                        $this->load->view('pages/login');
                    }
                }else{
                    $this->load->view('pages/login');
                }
	}

    public function vistaTemporal(){
        $this->load->view('pages/login');
    }

	public function solicitudServicio(){
        $this->load->library('parser');
		$this->load->model('fc_ss_model','ss_model'); 
        $datos = array(
            'clientes' => $this->ss_model->getClientes(),
            'representantesStaff' => $this->ss_model->getRepresentantes(),
            'responsablesIT' => $this->ss_model->getResponsablesIT(),
            'representantesComercial' => $this->ss_model->getRepresentantesComercial(),
            );
      
        $this->parser->parse('pages/ss',$datos);
	}

}
