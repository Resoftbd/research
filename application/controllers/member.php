<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class User extends CI_Controller {
		function __construct() {
        parent::__construct();
      	$this->load->helper(array('form', 'url','file'));
      	$this->load->model('Mdl_admin');      	
    }

	public function index()
	{
		$data['home'] = 'home';
		$data['select_home'] = $this->Mdl_admin->select_home();
		$data['select_slideshow'] = $this->Mdl_admin->select_slideshow();
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_news'] = $this->Mdl_admin->select_news();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();

		$this->load->view('user/vw_user',$data);
	}
	

 	public function home()
	{
		$data['home'] = 'home';
		$data['select_home'] = $this->Mdl_admin->select_home();
		$data['select_slideshow'] = $this->Mdl_admin->select_slideshow();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_news'] = $this->Mdl_admin->select_news();
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$this->load->view('user/vw_user',$data);
	}

	public function event()
	{
		$data['event'] = 'event';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$this->load->view('user/vw_user',$data);
	}

	public function aim_and_objective()
	{
		
		$data['aim_and_objective'] = 'aim_and_objective';
		$data['select_aim'] = $this->Mdl_admin->select_aim();
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_objective'] = $this->Mdl_admin->select_objective();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$this->load->view('user/vw_user',$data);
	}

	public function contact()
	{
		$data['contact']='contact';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_contact']=$this->Mdl_admin->select_contact();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$data['select_link'] = $this->Mdl_admin->select_link();

		$this->load->view('user/vw_user',$data);
	}

	public function fieldsite()
	{
		$data['fieldsite'] = 'fieldsite';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();



		$this->load->view('user/vw_user',$data);
	}

	public function timeline()
	{
		$data['timeline'] = 'timeline';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$data['select_timeline'] = $this->Mdl_admin->select_timeline();
		$this->load->view('user/vw_user',$data);
	}
	public function researcher()
	{
		$data['researcher'] = 'researcher';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$this->load->view('user/vw_user',$data);
	}
	public function researcher_by_id($researcher_id)
	{
		$data['researcher_by_id'] = 'researcher_by_id';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$data['select_researcher_by_id'] = $this->Mdl_admin->select_researcher_by_id($researcher_id);
		$this->load->view('user/vw_researcher_by_id',$data);
	}


}