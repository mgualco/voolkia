<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ss extends MY_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('fc_ss_model','ss_model');
	}

	public function index(){
		$this->load->library('parser'); 
        $datos = array(
            'clientes' => $this->ss_model->getClientes(),
            'representantesStaff' => $this->ss_model->getRepresentantes(),
            'responsablesIT' => $this->ss_model->getResponsablesIT(),
            'representantesComercial' => $this->ss_model->getRepresentantesComercial(),
            'provincias' => $this->ss_model->getProvincias(),
            'provinciaDefault' => $this->ss_model->getProvinciaDefault(),
            'puestos' => $this->ss_model->getPuestos(),
            'beneficios' => $this->ss_model->getBeneficios(),
            'competencias' => $this->ss_model->getCompetencias(),
            'servicios' => $this->ss_model->getServicios(),
            'contactos' => $this->ss_model->getContactos(),
            'prioridades' => $this->ss_model->getPrioridades(),
            'formasContratacion' => $this->ss_model->getFormasContratacion(),
            //'localidades' => $this->ss_model->getLocalidadesDefault();
            );
        //var_dump($datos['representantesComercial']);exit;
        $this->parser->parse('pages/ss',$datos);
	}

	public function getLocalidades(){
		if(!empty($_POST)){
			$infoProvincia = array(
				'idProvincia' => $_POST['dataString']
			);
			$result = $this->ss_model->getLocalidades($infoProvincia['idProvincia']);
			if(!empty($result)){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$result = "NoHayDatos";
				header('Content-Type: application/json');
				echo json_encode($result);
			}
		}
	}
	public function guardarInfoPrincipal($idSolicitudServicio = null){
		if(!empty($_POST)){
			parse_str($_POST['dataString']);
			if(!empty($idSolicitud)){
				//Actualización de una SS ya generada
				$infoPrincipalSS = array(
					'idSolicitud' => $idSolicitud,
					'tipoSolicitud' => !empty($tipoBusqueda) ? $tipoBusqueda : '',
					'idProvincia' => !empty($idProvincia) ? (int)$idProvincia : '',
					'idLocalidad' => !empty($idLocalidad) ? (int)$idLocalidad : '',
					'idPuestoSolicitado' => !empty($idPuesto) ? (int)$idPuesto : '',
					'detallePuestoSolicitado' => !empty($detallePuestoSolicitado) ? : '',
					'cantidadVacantesOrigen' => $vacantes,
					'nivelEstudio' => $nivelEstudio,
					'sueldoNetoPretendido' => $sueldoPretendido,
					'titulo' => !empty($titulo) ? $titulo : '',
					//'descripcionPuesto' => !empty($descripcionPuesto) ? filter_var($descripcionPuesto, FILTER_SANITIZE_STRING) : '',	
					'fechaPresentacionDelPersonal' => !empty($fechaPresentacionDelPersonal) ? $fechaPresentacionDelPersonal : '',
					'idCliente' => !empty($idCliente) ? $idCliente : '',
					'idRepresentanteComercial' => !empty($idRepresentanteComercial) ? $idRepresentanteComercial : '',
					'estado' => 'Pendiente',
					'razonSocial' => !empty($especificacionCliente) ? $especificacionCliente : NULL,
				);
				
			}else{
				//Almacenamiento de una nueva SS
				//var_dump($_POST['dataString']);exit;
				$primerEstadoSS = $this->ss_model->getPrimerEstadoSS();
				$infoPrincipalSS = array(
					'idPrioridad' => $tipoPrioridad,
					'idFormaContratacion' => $idFormaContratacion,
					'idPuestoSolicitado' => !empty($idPuesto) ? (int)$idPuesto : '',
					'idProvincia' => !empty($idProvincia) ? (int)$idProvincia : '',
					'idLocalidad' => !empty($idLocalidad) ? (int)$idLocalidad : '',
					'cantidadVacantesOrigen' => $vacantes,
					'horarioLaboral' => !empty($horarioTrabajo) ? $horarioTrabajo : '',
					'idSeniority' => $seniority,
					'experiencia' => $experiencia,
					'idServicio' => $idServicio,
					'vacaciones' => !empty($vacaciones) ? $vacaciones : '',
					'nivelEstudio' => $nivelEstudio,
					'sueldoNetoPretendido' => $sueldoPretendido,
					'titulo' => !empty($titulo) ? $titulo : '',
					'sexo' => $sexo,
					'edad' => $edad,
					'especificacionPuestoSolicitado' => !empty($detallePuestoSolicitado) ? $detallePuestoSolicitado : '',
					'otrosSkills' => !empty($detalleHabilidadesPuestoSolicitado) ? $detalleHabilidadesPuestoSolicitado : '',
					'otrasTecnologias' => !empty($detalleTecnologiasPuestoSolicitado) ? $detalleTecnologiasPuestoSolicitado : '',
					'otrasCompetencias' => !empty($detalleCompetenciasPuestoSolicitado) ? $detalleCompetenciasPuestoSolicitado : '',
					'fechaPresentacionDelPersonal' => $fechaPresentacionDelPersonal, 
					'idServicio' => $idServicio,
					'idContacto' => $idContacto,
					'idDetalleCliente' => isset($idDetalleCliente) ? $idDetalleCliente : NULL,
					'idRepresentanteComercial' => $idRepresentanteComercial,
					'idEstado' => !empty($primerEstadoSS[0]['id']) ? $primerEstadoSS[0]['id'] : '',
					'razonSocial' => !empty($especificacionCliente) ? $especificacionCliente : NULL,
					'comentario' => !empty($comentario) ? $comentario : NULL,
					'usuario' => $this->session->usuario,
					'idSolicitud' => $idSolicitudServicio, 
				);	
			}
			$result = $this->ss_model->guardarInfoPrincipal($infoPrincipalSS);
			if($result == "noActualizacion"){
				$response = "noActualizacion";
				header('Content-Type: application/json');
				echo json_encode($response);
			}else{
				if($result == "fallaEnLaTransaccion"){
					$this->load->view('pages/genericErrorPage');
				}else{
					$response = $result;
					//envio de mail notificacion a seleccion
					$to = 'mjg_099@ymail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
					$email_subject = "Notificación creación de solicitud de servicio";
					$email_body = "Se informa que se ha generaddo una nueva solicitud de servicio bajo el numero xx.\n\n";
					$headers = "From: info@marcosjavier.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
					//$headers .= "Reply-To: $email_address";	
					if(!mail($to,$email_subject,$email_body,$headers)){
						//Setear un alerta en el panel de administracion de la aplicacion de forma que avise a los administradores
					}
					header('Content-Type: application/json');
					echo json_encode($response);
				}	
			}
			
		}
	}

	public function guardarBeneficios(){
		if(!empty($_POST)){
			if(count($_POST['beneficios']) != 1){ //si se ha seleccionado al menos un beneficio entra.
				$result = $this->ss_model->guardarBeneficios($_POST['beneficios']);	
			}else{
				$result = $_POST['beneficios'][0];
			}
			if($result != 'fallaEnLaInsercionDeBeneficios'){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$this->load->view('pages/genericErrorPage');
			}
		}
	}

	public function guardarCompetencias(){
		if(!empty($_POST)){
			if(count($_POST['competencias']) != 1){ //si se ha seleccionado al menos una competencia entra.
				$result = $this->ss_model->guardarCompetencias($_POST['competencias']);	
			}else{
				$result = $_POST['competencias'][0];
			}
			if($result != 'fallaEnLaInsercionDeCompetencias'){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$this->load->view('pages/genericErrorPage');
			}
		}
	}

	public function guardarHabilidadesRequeridas(){
		if(!empty($_POST)){
			if(count($_POST['habilidadesRequeridas']) != 2){ //si se ha seleccionado al menos una habilidad entra.
				$result = $this->ss_model->guardarHabilidadesRequeridas($_POST['habilidadesRequeridas']);	
			}else{
				$result = $_POST['habilidadesRequeridas'][1];
			}
			if($result != 'fallaEnLaInsercionDeCompetencias'){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$this->load->view('pages/genericErrorPage');
			}
		}
	}

	public function guardarHabilidadesDeseables(){
		if(!empty($_POST)){
			if(count($_POST['habilidadesDeseables']) != 2){

				$result = $this->ss_model->guardarHabilidadesDeseables($_POST['habilidadesDeseables']);	
			}else{
				$result = $_POST['habilidadesDeseables'][1];
			}
			if($result != 'fallaEnLaInsercionDeCompetencias'){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$this->load->view('pages/genericErrorPage');
			}
		}
	}

	public function guardarTecnologias(){
		if(!empty($_POST)){
			if(count($_POST['tecnologias']) != 2){
				$result = $this->ss_model->guardarTecnologias($_POST['tecnologias']);	
			}else{
				$result = $_POST['tecnologias'][1];
			}
			if($result != 'fallaEnLaInsercionDeTecnologias'){
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				$this->load->view('pages/genericErrorPage');
			}
		}
	}

	public function guardarInfoAdicional($idSolicitudServicio = null){
		if(!empty($_POST)){
			parse_str($_POST['dataString']);
			if(!empty($idSolicitud)){
				$infoAdicionalSS = array(
					'idSolicitud' => $idSolicitud,
					'region' => filter_var($region,FILTER_SANITIZE_STRING),
					'ubicacion' => filter_var($ubicacion,FILTER_SANITIZE_STRING),
					'idRepresentanteStaffRRHH' => $idRepresentanteStaff, 
					'comentario' => filter_var($comentario,FILTER_SANITIZE_STRING),
				);
			}else{
				$infoAdicionalSS = array(
					'region' => filter_var($region, FILTER_SANITIZE_STRING),
					'comentario' => filter_var($comentario, FILTER_SANITIZE_STRING),
					'ubicacion' => filter_var($ubicacion, FILTER_SANITIZE_STRING), 
					'idRepresentanteStaffRRHH' => $idRepresentanteStaff,
					'idSolicitud' => $idSolicitudServicio, 
				);
			}
			$result = $this->ss_model->guardarInfoAdicional($infoAdicionalSS);
			if($result == "noActualizacion"){
				$response = "noActualizacion";
				header('Content-Type: application/json');
				echo json_encode($response);
			}else{
				if($result == "transaccionCompleta"){
					$response = "transaccionCompleta";
					header('Content-Type: application/json');
					echo json_encode($response);
				}else{
					$this->load->view('pages/genericErrorPage');	
				}
			}
		}
	}

	public function datosSolicitudDeServicio(){
		//if(empty($_POST)){
			$solicitudes = $this->ss_model->getSolicitudesGeneradas();
			if(empty($solicitudes)){
				$solicitudes = false;
			}
			header('Content-Type: application/json');
			echo json_encode($solicitudes);
		//}
	}

	public function detalleSolicitud(){
		$this->load->library('parser');
		$solicitud = array(
            'solicitud' => $this->ss_model->getDatosSolicitud($_POST['idSolicitud']),
        );
        if($solicitud['solicitud'][0]['idPuestoSolicitado'] == '0'){
        	$beneficios = array(
        		'beneficios' => $this->ss_model->getBeneficiosPorSolicitud($solicitud['solicitud'][0]['idSolicitud']),
        	);

        	$datos = array(
	        	'solicitud' => $solicitud['solicitud'],
	        	'beneficios' => $beneficios['beneficios'],
        	);
        	$this->parser->parse('pages/ss_visualizacion',$datos);
        }else{
        	$skills = array(
	        	'habilidadesRequeridas' => $this->ss_model->getHabilidadesRequeridasPorSolicitud($solicitud['solicitud'][0]['idSolicitud'],$solicitud['solicitud'][0]['idPuestoSolicitado']),
	            'habilidadesDeseables' => $this->ss_model->getHabilidadesDeseablesPorSolicitud($solicitud['solicitud'][0]['idSolicitud'],$solicitud['solicitud'][0]['idPuestoSolicitado']),
	            'tecnologias' => $this->ss_model->getTecnologiasPorSolicitud($solicitud['solicitud'][0]['idSolicitud'],$solicitud['solicitud'][0]['idPuestoSolicitado']),
	        );
	        $beneficios = array(
	        	'beneficios' => $this->ss_model->getBeneficiosPorSolicitud($solicitud['solicitud'][0]['idSolicitud']),
	        );
	        $competencias = array(
	        	'competencias' => $this->ss_model->getCompetenciasPorSolicitud($solicitud['solicitud'][0]['idSolicitud']),
	        );
	        $datos = array(
	        	'solicitud' => $solicitud['solicitud'],
	        	'habilidadesRequeridas' => $skills['habilidadesRequeridas'],
	        	'habilidadesDeseables' => $skills['habilidadesDeseables'],
	        	'tecnologias' => $skills['tecnologias'],
	        	'beneficios' => $beneficios['beneficios'],
	        	'competencias' => $competencias['competencias'],	
	        );
			$this->parser->parse('pages/ss_actualizacion',$datos);
        }
        
	}

	public function rechazarSS(){
		$this->load->library('parser');
		if(!empty($_POST)){
			parse_str($_POST['dataString']);
			$solicitud = array(
				'idSolicitud' => $idSolicitud, 
				'motivoRechazo' => $motivoRechazo,
			);
			$this->ss_model->setRechazoSS($solicitud['idSolicitud'],$solicitud['motivoRechazo']);

			header('Content-Type: application/json');
			echo json_encode(true);
	
		}
	}

	public function getClienteAsociado(){
		if(!empty($_POST)){
			$cliente = array(
				'cliente' => $this->ss_model->getClienteAsociado($_POST['dataString']),
			);
			header('Content-Type: application/json');
			echo json_encode($cliente['cliente']);
		}
	}

	public function getHabilidadesRequeridas(){
		if(!empty($_POST)){
			$habilidad = array(
				'habilidad' => $_POST['dataString'],
			);
			$habilidades = $this->ss_model->getHabilidadesRequeridas($habilidad['habilidad']);
			if(empty($habilidades)){
				$habilidades = false;
			}
			header('Content-Type: application/json');
			echo json_encode($habilidades);
		}
	}

	public function getHabilidadesDeseables(){
		if(!empty($_POST)){
			$habilidad = array(
				'habilidad' => $_POST['dataString'],
			);
			$habilidades = $this->ss_model->getHabilidadesdeseables($habilidad['habilidad']);
			if(empty($habilidades)){
				$habilidades = false;
			}
			header('Content-Type: application/json');
			echo json_encode($habilidades);
		}	
	}

	public function getTecnologias(){
		if(!empty($_POST)){
			$puesto = array(
				'puesto' => $_POST['dataString'],
			);
			$tecnologias = $this->ss_model->getTecnologias($puesto['puesto']);
			if(empty($tecnologias)){
				$tecnologias = false;
			}
			header('Content-Type: application/json');
			echo json_encode($tecnologias);
		}
	}

	public function paginaPrincipal(){
        $this->load->library('parser');
        $this->load->model('fc_ss_model','ss_model');
        
        $solicitudes = array(
        	'solicitud' => $this->ss_model->getSolicitudesGeneradas(),
        );
			if(empty($solicitudes)){
				$solicitudes = false;
			}
		/*	
		if(isset($this->session)){
			if($this->session->userdata('usuario') == null){
				header("Location: /login/index");
			}	
		}
		*/
			$this->parser->parse('pages/ss_lista',$solicitudes);	
            
    }

    public function paginaPrincipalSSRechazadas(){
        $this->load->library('parser');
        $this->load->model('fc_ss_model','ss_model');
        
        $solicitudes = array(
        	'solicitud' => $this->ss_model->getSolicitudesRechazadas(),
        );
			if(empty($solicitudes)){
				$solicitudes = false;
			}
			$this->parser->parse('pages/ss_lista_rechazadas',$solicitudes);	
            
    }

    public function mensajeExitoSS(){
    	$this->load->view('pages/p_solicitud_ok');
    }

    public function mensajeRechazoSS(){
    	$this->load->view('pages/p_solicitud_rechazo');
    }

    public function getDatosVistaPreliminar($idSolicitud = null){
    	if($idSolicitud != null){
    		$sql = "SELECT 
    				FROM ";
    	}
    }
}