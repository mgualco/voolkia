<?php

class fc_rrhh_model extends MY_Model{

	public function getAreas(){
		$sql = "SELECT id,nombre 
				FROM sector";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getProvincias(){
		$sql = "SELECT id,nombre 
				FROM provincia
				ORDER BY nombre";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function guardar($info){
		if(!empty($info) && $info['idEmpleado'] == null){
			$datosTelefono = array(
				'tipo' => $info['tipoContacto'],
				'numero' => $info['numeroTelefono'],
				'interno' => $info['interno']
				);
			unset($info['tipoContacto'],$info['numeroTelefono'],$info['interno'],$info['idEmpleado']);
			if($info['fechaBaja'] != ''){
				$dateBaja = date_create($info['fechaBaja']);
				$info['fechaBaja'] = date_format($dateBaja,'Y-m-d');
			}else{
				unset($info['fechaBaja']);
			}
			$datosUsuario = array(
				'usuario' => $info['email'],
				'pass' => md5('staffingit'),
			);
			$info['fechaCarga'] = date('Y-m-d H:m:s');
			$dateAlta = date_create($info['fechaAlta']);
			$info['fechaAlta'] = date_format($dateAlta,'Y-m-d');

			$this->db->trans_start();
				$this->db->insert('empleado',$info);
				$idEmpleado = $this->db->insert_id();
				$datosTelefono['idEmpleado'] = $idEmpleado;
				$this->db->insert('telefonoempleado',$datosTelefono);
				$sql = "SELECT id FROM perfil WHERE nombre = 'Invitado'";
				$query = $this->db->query($sql);
				$result = $query->result_array();
				$datosUsuario['idEmpleado'] = $idEmpleado;
				$datosUsuario['idPerfil'] = $result[0]['id'];
				$this->db->insert('usuario',$datosUsuario);
			$this->db->trans_complete();
		}
		if($this->db->trans_status() === FALSE){
			//error
			return false;
		}else{
			return true;
		}
	}
}