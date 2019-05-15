<?php

class videoController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_Video()
	{
		$data['title'] = "Video";
		$this->load->view('Templates/HeaderContainer',$data);
		$this->load->view('Material/video');
	}
}
