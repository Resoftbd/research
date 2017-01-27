<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Researcher_logout extends CI_Controller {

	function __construct() {
        parent::__construct();
        
		if(!$this->session->userdata('researcher_logged_in'))
		{
			redirect(base_url().'user/researcher_login');
		}
		
    }
	
    public function index()
    {
    	$this->session->sess_destroy();
    	redirect(base_url().'user');
    }
}