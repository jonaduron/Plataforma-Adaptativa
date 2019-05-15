<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->helper('url_helper');
    }

	public function index()
	{

		$data['title'] = "Dynamic Title";
		$this->load->view('Templates/HeaderContainer',$data);
		$this->load->view('Templates/FooterContainer');
	}
}
