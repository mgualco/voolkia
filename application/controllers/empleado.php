<?php

class ss extends MY_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->model('fc_rrhh_model','fc_rrhh');
        
	}
	public  function guardarSS($idEmpleado = null)
		if(!empty($_POST)){
	            $infoEmpleado = array(
	                'apyn' => filter_input(INPUT_POST,'nombre', FILTER_SANITIZE_STRING)." ". 
	                            filter_input(INPUT_POST,'apellido', FILTER_SANITIZE_STRING),
	                'fechaNacimiento' => $_POST['fechaNacimiento'],
	                'estadoCivil' => $_POST['estadoCivil'],
	                'email' => filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL),
	                'calle' => filter_input(INPUT_POST,'direccion', FILTER_SANITIZE_STRING),
	                'nro' => filter_input(INPUT_POST,'numero', FILTER_SANITIZE_STRING),
	                'dpto' => filter_input(INPUT_POST,'dpto', FILTER_SANITIZE_NUMBER_INT),
	                'piso' => filter_input(INPUT_POST,'piso', FILTER_SANITIZE_NUMBER_INT),
	                'localidad' => filter_input(INPUT_POST,'localidad', FILTER_SANITIZE_STRING),
	                'fechaAlta' => $_POST['fechaAlta'],
	                'fechaBaja' => $_POST['fechaBaja'],
	                'notas' => filter_input(INPUT_POST,'notas', FILTER_SANITIZE_STRING),
	                'idArea' => $_POST['area'],
	                'idProvincia' => $_POST['provincia'],
	                'tipoContacto' => $_POST['tipoContacto'],
	                'numeroTelefono' => filter_input(INPUT_POST,'numeroTelefono', FILTER_SANITIZE_NUMBER_INT),
	                'interno' => filter_input(INPUT_POST,'interno', FILTER_SANITIZE_NUMBER_INT),
	                'idEmpleado' => $idEmpleado //deteccion si se trata de una inserción o una actualizacion.
	                );

	            if($this->fc_rrhh->guardar($infoEmpleado)){
	            	
	            	$response = true;
	                header('Content-Type: application/json');
					echo json_encode($response);
	            }else{
	                //redireccionemiento a pantalla de error customizada y almacenamiento del error producido en la tabla correspondiente.
	            }
}
	 