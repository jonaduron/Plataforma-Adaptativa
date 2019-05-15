<?php

class AudioController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_Audio()
	{
		$data['title'] = "Audio";
        $this->load->view('Templates/HeaderContainer',$data);
        $this->load->view('Material/audio');
	}
}
