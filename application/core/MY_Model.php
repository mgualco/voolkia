<?php

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        if (!isset($_SESSION)) {
            session_start();
        }
    }
}