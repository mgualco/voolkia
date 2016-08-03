<?php

class fc_ss_model extends MY_Model{

	public function getClientes(){
		$sql = "SELECT id,razonSocial
				FROM cliente";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getRepresentantes(){
		$sql = "SELECT id,apellido,nombre
				FROM empleado";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getResponsablesIT(){
		$sql = "SELECT e.id,e.apellido,e.nombre
				FROM empleado e INNER JOIN sector s
				ON e.idSector = s.id";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getRepresentantesComercial(){
		$sql = "SELECT e.id,CONCAT(e.nombre,' ',e.apellido) as apyn
				FROM empleado e INNER JOIN sector s
				ON e.idSector = s.id
				WHERE s.id =
				(SELECT id
				FROM sector
				WHERE nombre = 'Comercial')
				and fechaBaja is null";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getProvincias(){
		$sql = "SELECT * 
				FROM provincia p 
				WHERE p.id != (select id from provincia where nombre = 'Capital Federal')";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getProvinciaDefault(){
		$sql = "SELECT * 
				FROM provincia p 
				WHERE p.nombre = 'Capital Federal'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;	
	}

	public function getLocalidadesDefault(){
		$sql = "SELECT l.id,l.nombre
				FROM localidad l 
				INNER JOIN provincia p 
				ON p.id = l.idProvincia 
				WHERE p.nombre not like 'Capital Federal'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getLocalidades($idProvincia = null){
		$sql = "SELECT * 
				FROM localidad l 
				WHERE l.idProvincia = ?";
		$query = $this->db->query($sql,array($idProvincia));
		$result = $query->result_array();
		return $result;	
	}

	public function getPuestos(){
		$sql = "SELECT * 
				FROM puesto";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;	
	}

	public function getBeneficios(){
		$index = 0;
		$sql = "SELECT *
				FROM beneficio";
		$query = $this->db->query($sql);
		$beneficios = $query->result_array();
		$result = array();
		foreach ($beneficios as $key => $beneficio) {
			$result[$key]['id'] = $beneficio['id'];
			$result[$key]['nombre'] = $beneficio['nombre'];
			$result[$key]['index'] = $index;
			$index = $index +1;
		}
		return $result;
	}

	public function getCompetencias(){
		$index = 0;
		$sql = "SELECT *
				FROM competencia_aptitud";
		$query = $this->db->query($sql);
		$competencias = $query->result_array();
		$result = array();
		foreach ($competencias as $key => $competencia) {
			$result[$key]['id'] = $competencia['id'];
			$result[$key]['nombre'] = $competencia['nombre'];
			$result[$key]['index'] = $index;
			$index = $index +1;
		}
		return $result;
	}	

	public function getServicios(){
		$index = 0;
		$sql = "SELECT *
				FROM servicio";
		$query = $this->db->query($sql);
		$servicios = $query->result_array();
		$result = array();
		foreach ($servicios as $key => $servicio) {
			$result[$key]['id'] = $servicio['id'];
			$result[$key]['nombre'] = $servicio['nombre'];
			$result[$key]['index'] = $index;
			$index = $index +1;
		}
		return $result;
	}

	public function getClienteAsociado($idContacto){
		$sql = "SELECT id,razonSocial
				FROM cliente
				WHERE cliente.id = (SELECT idCliente FROM contacto WHERE id = ?)";
		$query = $this->db->query($sql,array($idContacto));
		$result = $query->result_array();
		return $result;
	}

	public function getHabilidadesRequeridasPorSolicitud($idSolicitud,$idPuesto){
		$sql = "SELECT DISTINCT(s.id) as idSkill, s.nombre as nombreSkill
				FROM skill s 
				INNER JOIN habilidad_puesto_solicitud hps
				ON s.id = hps.idHabilidad
				INNER JOIN puesto_skill_tiposkill pst
				ON pst.idSkill = s.id 
				INNER JOIN tipo_skill ts
				ON pst.idTipoSkill = ts.id 
				INNER JOIN solicituddeservicio ss
				ON hps.idSolicitud = ss.id
				INNER JOIN puesto p
				ON hps.idPuesto = p.id
				WHERE ts.id = (select id from tipo_skill where tipo = 'Habilidades duras')
				AND pst.idPuesto = ?
				AND ss.id = ?";
		$query = $this->db->query($sql,array($idPuesto,$idSolicitud));
		$result = $query->result_array();
		return $result;
	}

	public function getHabilidadesDeseablesPorSolicitud($idSolicitud,$idPuesto){
		$sql = "SELECT DISTINCT(s.id) as idSkill, s.nombre as nombreSkill
				FROM skill s 
				INNER JOIN habilidad_puesto_solicitud hps
				ON s.id = hps.idHabilidad
				INNER JOIN puesto_skill_tiposkill pst
				ON pst.idSkill = s.id 
				INNER JOIN tipo_skill ts
				ON pst.idTipoSkill = ts.id 
				INNER JOIN solicituddeservicio ss
				ON hps.idSolicitud = ss.id
				INNER JOIN puesto p
				ON hps.idPuesto = p.id
				WHERE ts.id = (select id from tipo_skill where tipo = 'Habilidades blandas')
				AND pst.idPuesto = ?
				AND ss.id = ?";
		$query = $this->db->query($sql,array($idPuesto,$idSolicitud));
		$result = $query->result_array();
		return $result;
	}

	public function getTecnologiasPorSolicitud($idSolicitud,$idPuesto){
		$sql = "SELECT DISTINCT(s.id) as idSkill, s.nombre as nombreSkill
				FROM skill s 
				INNER JOIN habilidad_puesto_solicitud hps
				ON s.id = hps.idHabilidad
				INNER JOIN puesto_skill_tiposkill pst
				ON pst.idSkill = s.id 
				INNER JOIN tipo_skill ts
				ON pst.idTipoSkill = ts.id 
				INNER JOIN solicituddeservicio ss
				ON hps.idSolicitud = ss.id
				INNER JOIN puesto p
				ON hps.idPuesto = p.id
				WHERE ts.id = (select id from tipo_skill where tipo = 'Tecnologias')
				AND pst.idPuesto = ?
				AND ss.id = ?";
		$query = $this->db->query($sql,array($idPuesto,$idSolicitud));
		$result = $query->result_array();
		return $result;
	}

	public function getBeneficiosPorSolicitud($idSolicitud){
		$sql = "SELECT b.id as idBeneficio, b.nombre as nombreBeneficio
				FROM beneficio b
				INNER JOIN beneficio_cliente_solicitud bcs
				ON bcs.idBeneficio = b.id
				INNER JOIN solicituddeservicio s
				ON s.id = bcs.idSolicitud
				WHERE bcs.idSolicitud = ?";
		$query = $this->db->query($sql,array($idSolicitud));
		$result = $query->result_array();
		return $result;	
	}

	public function getCompetenciasPorSolicitud($idSolicitud){
		$sql = "SELECT c.id as idCompetencia, c.nombre as nombreCompetencia
				FROM competencia_aptitud c
				INNER JOIN competencia_puesto_solicituddeservicio cps
				ON cps.idCompetencia = c.id
				INNER JOIN solicituddeservicio s
				ON s.id = cps.idSolicitud
				WHERE cps.idSolicitud = ?";
		$query = $this->db->query($sql,array($idSolicitud));
		$result = $query->result_array();
		return $result;	
	}

	public function getHabilidadesRequeridas($idPuesto){
		$sql = "SELECT DISTINCT(s.id),s.nombre
				FROM puesto_skill_tiposkill pst
				INNER JOIN tipo_skill ts
				ON ts.id = pst.idTipoSkill
				INNER JOIN skill s 
				ON s.id = pst.idSkill
				INNER JOIN puesto p 
				ON p.id = pst.idPuesto   
				WHERE pst.idPuesto = ? AND ts.id = (select id from tipo_skill where tipo = 'Habilidades duras')";
		$query = $this->db->query($sql,array($idPuesto));
		$result = $query->result_array();
		return $result;
	}

	public function getHabilidadesDeseables($idPuesto){
		$sql = "SELECT DISTINCT(s.id),s.nombre
				FROM puesto_skill_tiposkill pst
				INNER JOIN tipo_skill ts
				ON ts.id = pst.idTipoSkill
				INNER JOIN skill s 
				ON s.id = pst.idSkill
				INNER JOIN puesto p 
				ON p.id = pst.idPuesto   
				WHERE pst.idPuesto = ? AND ts.id = (select id from tipo_skill where tipo = 'Habilidades blandas')";
		$query = $this->db->query($sql,array($idPuesto));
		$result = $query->result_array();
		return $result;
	}

	public function getTecnologias($idPuesto){
		$sql = "SELECT DISTINCT(s.id),s.nombre
				FROM puesto_skill_tiposkill pst
				INNER JOIN tipo_skill ts
				ON ts.id = pst.idTipoSkill
				INNER JOIN skill s 
				ON s.id = pst.idSkill
				INNER JOIN puesto p 
				ON p.id = pst.idPuesto   
				WHERE pst.idPuesto = ? AND ts.id = (select id from tipo_skill where tipo = 'Tecnologias')";
		$query = $this->db->query($sql,array($idPuesto));
		$result = $query->result_array();
		return $result;
	}

	public function getContactos(){
		$sql = "SELECT id,CONCAT(nombre,' ',apellido) as apyn
				FROM contacto";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function guardarBeneficios($beneficios){
		$idSolicitud = array_pop($beneficios);
		$idClienteSeleccionado = array_pop($beneficios);
		$this->db->trans_start();
			foreach ($beneficios as $key => $beneficio) {
				$sql = "INSERT INTO beneficio_cliente_solicitud(idBeneficio,idSolicitud,idCliente) VALUES(?,?,?)";
				$query = $this->db->query($sql,array($beneficio,$idSolicitud,$idClienteSeleccionado));
			}
		$this->db->trans_complete();
		if($this->db->trans_status() == false){
			return "fallaEnLaInsercionDeBeneficios";
		}else{
			return $idSolicitud;
		}
	}

	public function guardarCompetencias($competencias){
		$idSolicitud = array_pop($competencias);
		$idPuestoSolicitado = array_pop($competencias);
		$this->db->trans_start();
			foreach ($competencias as $key => $competencia) {
				$sql = "INSERT INTO competencia_puesto_solicituddeservicio(idCompetencia,idSolicitud,idPuesto) VALUES(?,?,?)";
				$query = $this->db->query($sql,array($competencia,$idSolicitud,$idPuestoSolicitado));
			}
		$this->db->trans_complete();
		if($this->db->trans_status() == false){
			return "fallaEnLaInsercionDeCompetencias";
		}else{
			return $idSolicitud;
		}
	}

	public function guardarTecnologias($tecnologias){
		$idSolicitud = array_pop($tecnologias);
		$idPuestoSolicitado = array_pop($tecnologias);
		$this->db->trans_start();
			foreach ($tecnologias as $key => $tecnologia) {
				$sql = "INSERT INTO habilidad_puesto_solicitud(idHabilidad,idSolicitud,idPuesto) VALUES(?,?,?)";
				$query = $this->db->query($sql,array($tecnologia,$idSolicitud,$idPuestoSolicitado));
			}
		$this->db->trans_complete();
		if($this->db->trans_status() == false){
			return "fallaEnLaInsercionDeTecnologias";
		}else{
			return $idSolicitud;
		}
	}

	public function guardarHabilidadesRequeridas($habilidadesRequeridas){
		$idSolicitud = array_pop($habilidadesRequeridas);
		$idPuestoSolicitado = array_pop($habilidadesRequeridas);
		$this->db->trans_start();
			foreach ($habilidadesRequeridas as $key => $habilidadRequerida) {
				$sql = "INSERT INTO habilidad_puesto_solicitud(idHabilidad,idSolicitud,idPuesto) VALUES(?,?,?)";
				$query = $this->db->query($sql,array($habilidadRequerida,$idSolicitud,$idPuestoSolicitado));
			}
		$this->db->trans_complete();
		if($this->db->trans_status() == false){
			return "fallaEnLaInsercionDeCompetencias";
		}else{
			return $idSolicitud;
		}
	}

	public function guardarHabilidadesDeseables($habilidadesDeseables){
		$idSolicitud = array_pop($habilidadesDeseables);
		$idPuestoSolicitado = array_pop($habilidadesDeseables);
		$this->db->trans_start();
			foreach ($habilidadesDeseables as $key => $habilidadDeseable) {
				$sql = "INSERT INTO habilidad_puesto_solicitud(idHabilidad,idSolicitud,idPuesto) VALUES(?,?,?)";
				$query = $this->db->query($sql,array($habilidadDeseable,$idSolicitud,$idPuestoSolicitado));
			}
		$this->db->trans_complete();
		if($this->db->trans_status() == false){
			return "fallaEnLaInsercionDeCompetencias";
		}else{
			return $idSolicitud;
		}
	}

	public function getPrimerEstadoSS(){
		$sql = "SELECT id
				FROM estado_ss
				WHERE nombre = 'A atender'";
		$this->db->trans_start();
		$query = $this->db->query($sql);
		$this->db->trans_complete();
		$result = $query->result_array();
		return $result;
	}

	public function getPrioridades(){
		$sql = "SELECT id,nombre
				FROM prioridad";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getFormasContratacion(){
		$sql = "SELECT id,nombre
				FROM forma_contratacion";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function setRechazoSS($idSolicitud,$motivoRechazo){
		$sql = "UPDATE solicituddeservicio 
				SET idEstado = (SELECT id FROM estado_ss WHERE nombre = 'Observada'), 
					motivoRechazo = ? 
				WHERE id = ?";
		$this->db->query($sql,array($motivoRechazo,$idSolicitud));
	}

	public function guardarInfoPrincipal($info){
		if(!empty($info)){

			$flag = false;
			if($info['idSolicitud'] == null){
				//nueva solicitud de servicio
				unset($info['idSolicitud']);
				$info['fechaCarga'] = date('Y-m-d H:m:s');
				$this->db->trans_start();
				if($info['razonSocial'] != NULL){
					$cliente = array(
						'razonSocial' => $info['razonSocial']
					);
					$this->db->insert('cliente',$cliente);
					$info['idCliente'] = $this->db->insert_id();
					$datosCliente = array(
						'usuario' => $info['usuario'],
						'fecha' => date('Y-m-d H:m:s'),
						'detalle' => 'Nuevo cliente desde pantalla de carga de SS',
						'idCliente' => $info['idCliente'],
					);
					unset($info['idDetalleCliente']);
				}else{
					$info['idCliente'] = $info['idDetalleCliente'];
					unset($info['razonSocial']);	
				}
				unset($info['usuario']);
				$this->db->insert('solicituddeservicio',$info);
				$idSolicitudDeServicio = $this->db->insert_id();
				$idCliente = $info['idCliente'];
				if(isset($datosCliente)){
					$datosCliente['idSolicitud'] = $idSolicitudDeServicio;
					$this->db->insert('log_cliente',$datosCliente);	
				}
				$this->db->trans_complete();
				$flag = true;
			}else{
				//actualizacion de una ss ya generada
				$cantCampos = 5;
				if($info['tipoSolicitud'] == ''){
					unset($info['tipoSolicitud']);
					$cantCampos--;
				}
				if($info['puestoSolicitado'] == ''){
					unset($info['puestoSolicitado']);
					$cantCampos--;
				}
				if($info['descripcionPuesto'] == ''){
					unset($info['descripcionPuesto']);
					$cantCampos--;
				}	
				if($info['fechaPresentacionDelPersonal'] == ''){
					unset($info['fechaPresentacionDelPersonal']);
					$cantCampos--;
				}
				if($info['idCliente'] == ''){
					unset($info['idCliente']);
					$cantCampos--;
				}
				if($info['idRepresentanteComercial'] == ''){
					unset($info['idRepresentanteComercial']);
					$cantCampos--;
				}
				if($cantCampos > 0){
					$datosLog = array(
						'usuario' => $this->session->usuario,
						'fecha' => date('Y-m-d H:m:s'),
						'idSolicitud' => $info['idSolicitud'],
						'detalle' => 'Actualización de información principal'
					);
					$this->db->trans_start();
					$this->db->where('id',$info['idSolicitud']);
					unset($info['idSolicitud']);
					$this->db->update('solicituddeservicio',$info);
					$this->db->insert('log_solicituddeservicio',$datosLog);
					$this->db->trans_complete();
					$flag = true;	
				}
				
			}
			$datos = array(
				'idSolicitudDeServicio' => $idSolicitudDeServicio,
				'idCliente' => $info['idCliente'],
			);
			if($flag == true){
				if($this->db->trans_status() === FALSE){
					//Error: insercion en tabla de logs del mismo.
					return "fallaEnLaTransaccion";
				}else{
					return $datos;
				}
			}else{
				return "noActualizacion"; 
			}
				
		}
	}

	public function guardarInfoAdicional($info){
		if(!empty($info)){
			$flag = false;
			$cantCampos = 4;
			if($info['region'] == ''){
				unset($info['region']);
				$cantCampos--;
			}
			if($info['ubicacion'] == ''){
				unset($info['ubicacion']);
				$cantCampos--;
			}
			if($info['idRepresentanteStaffRRHH'] == ''){
				unset($info['idRepresentanteStaffRRHH']);
				$cantCampos--;
			}
			if($info['comentario'] == ''){
				unset($info['comentario']);
				$cantCampos--;
			}
			if($cantCampos == 0){
				return "noActualizacion";
			}else{
				if($info['idSolicitud'] != null){
					//actualizacion de una solicitud de servicio
					$info['fechaUltimaModificacionInfoAdicional'] = date('Y-m-d H:m:s');
					$this->db->trans_start();
					$this->db->where('id',$info['idSolicitud']);
					unset($info['idSolicitud']);
					$this->db->update('solicituddeservicio',$info);
					$this->db->trans_complete();
				}
				if($this->db->trans_status() == false){
					//Error: insercion en tabla de logs del mismo.
					return "fallaEnLaTransaccion";
				}else{
					return "transaccionCompleta";
				}
			}
			
		}
	}

	public function getSolicitudesGeneradas(){
				//carga de todas las solicitudes de servicio almacenadas en base.
				$this->db->trans_start();
				$sql = "SELECT s.id as idSolicitud,
							   s.comentario as comentario,est.nombre as estado,c.id as idCliente,CONCAT(c.nombre,' ',c.apellido) as razonSocial,sec.nombre as Sector,
							   p.nombre as nombrePuesto
							   from solicituddeservicio s
							   INNER JOIN estado_ss est 
							   ON s.idEstado = est.id
							   INNER JOIN contacto c
							   ON s.idContacto = c.id
							   LEFT JOIN empleado e
							   ON s.idRepresentanteStaffRRHH = e.id
							   LEFT JOIN Sector sec
							   ON e.idSector = sec.id 
							   LEFT JOIN puesto p 
							   ON s.idPuestoSolicitado = p.id
							   WHERE est.nombre != 'Observada'";
				$query = $this->db->query($sql);
				$this->db->trans_complete();

			if($this->db->trans_status() === FALSE){
				//Error: insercion en tabla de logs del mismo.
				return false;
			}else{
				$result = $query->result_array();
				return $result;
			}		
	}

	public function getSolicitudesRechazadas(){
		$this->db->trans_start();
				$sql = "SELECT s.id as idSolicitud,s.tipoSolicitud as tipoSolicitud,
							   s.comentario as comentario,est.nombre as estado,c.id as idCliente,c.razonSocial as razonSocial,sec.nombre as Sector,
							   p.nombre as nombrePuesto
							   from solicituddeservicio s
							   INNER JOIN estado_ss est 
							   ON s.idEstado = est.id
							   INNER JOIN cliente c
							   ON s.idCliente = c.id
							   LEFT JOIN empleado e
							   ON s.idRepresentanteStaffRRHH = e.id
							   LEFT JOIN Sector sec
							   ON e.idSector = sec.id 
							   LEFT JOIN puesto p 
							   ON s.idPuestoSolicitado = p.id
							   WHERE s.idEstado = (SELECT id FROM estado_ss WHERE nombre = 'Observada')";
				$query = $this->db->query($sql);
				$this->db->trans_complete();

			if($this->db->trans_status() === FALSE){
				//Error: insercion en tabla de logs del mismo.
				return false;
			}else{
				$result = $query->result_array();
				return $result;
			}
	}

	public function getCliente($idCliente = null){
		if($idCliente != null){
			$this->db->trans_start();
			$query = $this->db->get_where('cliente',array('id' => $idCliente));
			$this->db->trans_complete();

			if($this->db->trans_status() === FALSE){
				//Error: insercion en tabla de logs del mismo.
				return false;
			}else{
				$result = $query->result_array();
				return $result;
			}
		}
	}

	public function getDatosSolicitud($idSolicitud = null){
		if($idSolicitud != null){
			$sql = "SELECT sce.*	
					FROM solicitud_cliente_empleado sce
					/* INNER JOIN habilidades_duras hrequeridas 
					ON hrequeridas.idSolicitudDeServicio = sce.idSolicitud
					WHERE hrequeridas.idPuesto = sce.idPuestoSolicitado */ 
					WHERE sce.idSolicitud = ?";
			/*
			$sql = "SELECT sce.*,sev.*,se.*
					FROM solicitud_cliente_empleado sce 
					INNER JOIN solicitud_empleado_validacionit sev 
					ON sce.idSolicitud = sev.idSolicitud
					INNER JOIN solicitud_evaluacionrrhh se 
					ON sev.idSolicitud = se.idSolicitud 
					WHERE sce.idSolicitud = ?";
			*/
			$query = $this->db->query($sql,array('id' => $idSolicitud));
			$result = $query->result_array();
			return $result;
		}
	}
}