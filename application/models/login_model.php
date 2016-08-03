<?php

class login_model extends MY_Model{
	
	public function verificaUsuario($datos){
		$sql = "SELECT *
				FROM usuario 
				WHERE usuario = ? AND pass = ?";
		$query = $this->db->query($sql,array($datos['usuario'],$datos['password']));
		$result = $query->row_array();
		return $result;
		
	}

	public function perfil($idUsuario){
		$sql = "SELECT perfil.*
				FROM perfil INNER JOIN usuario
				ON perfil.id = usuario.idPerfil
				WHERE usuario.id = ?";
		$query = $this->db->query($sql,array($idUsuario));
		return $query->result_array();
	}	

}


