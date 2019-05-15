<?php

class PDFController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_PDF()
	{
		$data['title'] = "PDF";
		$this->load->view('Templates/HeaderContainer',$data);
		$this->load->view('Material/PDF');
	}
}
