<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_logout extends CI_Controller {

	function __construct() {
        parent::__construct();
        
		if(!$this->session->userdata('admin_logged_in'))
		{
			redirect(base_url().'admin_login');
		}
		
    }
	
    public function index()
    {
    	$this->session->sess_destroy();
    	redirect(base_url().'admin_login');
    }
}