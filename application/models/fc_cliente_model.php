<?php

class fc_cliente_model extends MY_Model{

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

	public function getClientesAlmacenados(){
		$sql = "SELECT id as idCliente,razonSocial,cuit,email 
				FROM cliente
				ORDER BY razonSocial";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function guardar($info){

		if(!empty($info) && $info['idCliente'] == null){
			//Nuevo cliente en la base
			$datosTelefono = array(
				'tipo' => $info['tipoContacto'],
				'numero' => $info['numeroTelefono'],
				'interno' => $info['interno']
				);
			unset($info['tipoContacto'],$info['numeroTelefono'],$info['interno'],$info['idCliente']);
			
			$datosTelefono['tipoContactoReferencia'] = $info['tipoContactoReferencia'];
			$datosTelefono['numeroTelefonoReferencia'] = $info['numeroTelefonoReferencia'];
			$datosTelefono['internoReferencia'] = $info['internoReferencia'];
			unset($info['tipoContactoReferencia'],$info['numeroTelefonoReferencia'],$info['internoReferencia']);	
			
			$info['fechaCarga'] = date('Y-m-d H:m:s');
			$this->db->trans_start();
				$this->db->insert('cliente',$info);
				$datosTelefono['idCliente'] = $this->db->insert_id();
				$this->db->insert('telefonocliente',$datosTelefono);
			$this->db->trans_complete();
		}else{
			//Actualizacion
		}
		if($this->db->trans_status() === FALSE){
			//error
			return "fallaEnLaTransaccion";
		}else{
			return "transaccionCompleta";
		}
	}
}