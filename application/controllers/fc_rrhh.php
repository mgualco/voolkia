<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class fc_rrhh extends MY_Controller
{
	public function __construct(){
		parent::__construct();
        $this->load->model('fc_rrhh_model','fc_rrhh');
        $this->load->library('email');
	}
	
    public function index($idEmpleado = null){
        $this->load->library('parser'); 
        $datos = array(
            'areas' => $this->fc_rrhh->getAreas(),
            'provincias' => $this->fc_rrhh->getProvincias(),
            );
      
        $this->parser->parse('pages/fc_rrhh',$datos);
    }

    public function guardarEmpleado($idEmpleado = null){
        if(!empty($_POST)){
            //var_dump($_POST);exit;
                parse_str($_POST['dataString']);
                $infoEmpleado = array(
                    'apyn' => filter_var($nombre, FILTER_SANITIZE_STRING)." ". 
                                filter_var($apellido, FILTER_SANITIZE_STRING),
                    'fechaNacimiento' => $fechaNacimiento,
                    'estadoCivil' => $estadoCivil,
                    'nivelEstudio' => $nivelEstudio,
                    'idProvincia' => $idProvincia,
                    'idLocalidad' => $idLocalidad,
                    'calle' => filter_var($calle, FILTER_SANITIZE_STRING),
                    'nro' => filter_var($nro, FILTER_SANITIZE_NUMBER_INT),
                    'dpto' => filter_var($dpto, FILTER_SANITIZE_NUMBER_INT),
                    'piso' => filter_var($piso, FILTER_SANITIZE_NUMBER_INT),
                    'idSector' => $area,
                    'tipoContacto' => $tipoContacto,
                    'numeroTelefono' => filter_var($numeroTelefono, FILTER_SANITIZE_NUMBER_INT),
                    'interno' => filter_var($interno, FILTER_SANITIZE_NUMBER_INT),
                    'email' => filter_var($email, FILTER_SANITIZE_EMAIL),
                    'fechaAlta' => $fechaAlta,
                    'fechaBaja' => $fechaBaja,
                    'notas' => filter_var($notas, FILTER_SANITIZE_STRING),
                    'idEmpleado' => $idEmpleado //deteccion si se trata de una inserción o una actualizacion.
                    
                    );
 
                if($this->fc_rrhh->guardar($infoEmpleado)){
                    $response = true;
                    //Notificacion via mail al nuevo empleado registrado
                    /*
                    $this->email->set_mailtype("html");
                    $this->email->from($this->config->item('email_sender'), 'Mi canal seguro');
                    $this->email->to($email, 'Mi canal seguro');
                    $this->email->subject('Confirmación de recepción');
                    //$this->email->bcc('mjg_099@ymail.com');
                    //$email_body = $this->load->view('includes/mails/confirmacion_recepcion',array('link' => THANK_YOU_PAGE_URL .'/'.$token, 'nombreProductor' => $contactData['name']),true);
                    //$this->email->message($email_body);
                    $this->email->send();
                    */
                    header('Content-Type: application/json');
                    echo json_encode($response);
                }else{
                    //redireccionemiento a pantalla de error customizada y almacenamiento del error producido en la tabla correspondiente.
                }
        }
    }
    
}
