<?php

class MisCursosController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_MisCursos()
	{
		$data['title'] = "Mis Cursos";
		$this->load->view('Templates/HeaderContainer',$data);
		$this->load->view('Templates/Navbar');
		$this->load->view('Templates/FooterContainer');
	}
}
