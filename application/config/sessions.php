<?php
	if($this->session->has_userdata('usuario') == NULL){
		$this->load->view('pages/login');
	}
?>