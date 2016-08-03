<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class fc_cliente extends MY_Controller
{
	public function __construct(){
		parent::__construct();	
		$this->load->model('fc_cliente_model','fc_cliente');
	}
	
    public function index()
    {
    	$this->load->library('parser'); 
        $datos = array(
            'provincias' => $this->fc_cliente->getProvincias(),
        );
      
        $this->parser->parse('pages/fc_cliente',$datos);
    }

    public function datosCliente(){
        $this->load->library('parser');
        $datos = array(
            'clientes' => $this->fc_cliente->getClientesAlmacenados(),
        );
        if(empty($datos['clientes'])){
            $datos['clientes'] = false;
        }
        $this->parser->parse('pages/cliente_lista',$datos);
    }
    /*
    public function paginaPrincipal(){
        $this->load->library('parser');
        $this->load->model('fc_ss_model','cliente_model');
        $clientes = array(
            'clientes' => $this->ss_model->getSolicitudesGeneradas(),
        );
        foreach ($solicitudes as $key => $solicitud) {
            foreach ($solicitud as $key => $s) {
                $s['idCliente'] = array(
                    'cliente' => $this->ss_model->getCliente($s['idCliente']),
                );
            }
        }
        $this->parser->parse('pages/ss_lista',$solicitudes);    
    }
    */
    public function listado(){
        $this->load->library('parser');
        $this->load->model('fc_cliente_model','cliente_model');
        $clientes = array(
            'clientes' => $this->cliente_model->getClientesAlmacenados(),
        );
        //var_dump($clientes);exit;
        if(empty($clientes['clientes'])){
            $clientes['clientes'] = 'No hay clientes almacenados';
        }

        $this->parser->parse('pages/cliente_lista',$clientes);   
    }

    public function guardarCliente($idCliente = null){
    	        if(!empty($_POST)){
                    parse_str($_POST['dataString']);
                    $infoCliente = array(
                        'razonSocial' => filter_var($razonSocial, FILTER_SANITIZE_STRING),
                        'paginaWeb' => !empty($paginaWeb) ? filter_var($paginaWeb, FILTER_SANITIZE_STRING) : 'No disponible',
                        'email' => !empty($paginaWeb) ? filter_var($email, FILTER_SANITIZE_EMAIL) : 'No disponible',
                        'tipoContacto' => !empty($tipoContacto) ? $tipoContacto : 'No disponible',
                        'numeroTelefono' => !empty($numeroTelefono) ? filter_var($numeroTelefono, FILTER_SANITIZE_NUMBER_INT) : 'No disponible',
                        'interno' => filter_var($interno, FILTER_SANITIZE_NUMBER_INT),
                        'calle' => !empty($calle) ? filter_var($calle, FILTER_SANITIZE_STRING) : 'No disponible',
                        'nro' => filter_var($nro, FILTER_SANITIZE_NUMBER_INT),
                        'dpto' => filter_var($dpto, FILTER_SANITIZE_NUMBER_INT),
                        'piso' => filter_var($piso, FILTER_SANITIZE_NUMBER_INT),
                        'idProvincia' => $provincia,
                        'idLocalidad' => $localidad,
                        'cuit' => !empty($cuit) ? filter_var($cuit, FILTER_SANITIZE_NUMBER_INT) : 'No disponible',
                        'nombreContactoReferencia' => !empty($nombreContactoReferencia) ? filter_var($nombreContactoReferencia, FILTER_SANITIZE_STRING) : 'No disponible',
                        'emailContactoReferencia' => filter_var($emailContactoReferencia, FILTER_SANITIZE_EMAIL),
                        'tipoContactoReferencia' => $tipoContactoReferencia,
                        'numeroTelefonoReferencia' => filter_var($numeroTelefonoReferencia, FILTER_SANITIZE_NUMBER_INT),
                        'internoReferencia' => filter_var($internoReferencia, FILTER_SANITIZE_NUMBER_INT),
                        'notas' => filter_var($notas, FILTER_SANITIZE_STRING),
                        'idCliente' => $idCliente //deteccion si se trata de una inserción o una actualizacion.
                        
                        );
                //var_dump($infoCliente);exit;
                $result = $this->fc_cliente->guardar($infoCliente);
                if($result == "transaccionCompleta"){
                    $response = "transaccionCompleta";
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
                    $this->load->view('pages/genericErrorPage');
                }
        }
    }
}