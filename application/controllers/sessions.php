<?php
	if(!isset($this->session->has_userdata('usuario'))){
		$this->load->view('pages/login');
	}
?>