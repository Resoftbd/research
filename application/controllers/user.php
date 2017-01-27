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
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_news'] = $this->Mdl_admin->select_news();
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_link'] = $this->Mdl_admin->select_link();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
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
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$this->load->view('user/vw_user',$data);
	}
	//News
    public function show_news($id)
    {
        $data['news'] = 'news';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_news'] = $this->Mdl_admin->select_news_by_id($id);
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['category'] = $this->Mdl_admin->load_category();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
        $this->load->view('user/vw_user',$data);
    }
    public function all_news()
    {
        $data['all_news'] = 'all_news';
        $data['select_home'] = $this->Mdl_admin->select_home();
        $data['select_slideshow'] = $this->Mdl_admin->select_slideshow();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['select_news'] = $this->Mdl_admin->select_news();
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
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
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$this->load->view('user/vw_user',$data);
	}

    public function publication()
    {

        $data['publication'] = 'publication';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_publication'] = $this->Mdl_admin->select_publication();
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
        $data['category'] = $this->Mdl_admin->load_category();


        $this->load->view('user/vw_publication_info',$data);

    }
    public function publication_archieve($year,$month)
    {

        $data['publication'] = 'publication';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_publication'] = $this->Mdl_admin->select_publication_archieve($year,$month);
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['category'] = $this->Mdl_admin->load_category();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();


        $this->load->view('user/vw_publication_info',$data);

    }
    public function search()
    {



        $data['publication'] = 'publication';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['category'] = $this->Mdl_admin->load_category();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();





        $data['select_publication'] = $this->Mdl_admin->search_result();
        $data['post'] = '0';
        if(count($data['select_publication'])==0)
        {
            $data['msg'] = 'Sorry!! nothing found!!';
            $data['msg_type'] = 'danger';
        }

        $this->load->view('user/vw_search',$data);

    }
    public function publication_category($id)
    {
        $data['publication'] = 'publication';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_publication'] = $this->Mdl_admin->select_publication_category($id);
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['category'] = $this->Mdl_admin->load_category();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();


        $this->load->view('user/vw_publication_info',$data);


    }
    public function publication_details($id)
    {
        $data['publication_details'] = 'publication_details';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_publication'] = $this->Mdl_admin->select_publication_by_id($id);
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
        $data['category'] = $this->Mdl_admin->load_category();
        $this->load->view('user/vw_publication_details',$data);
    }


	public function aim_and_objective()
	{
		
		$data['aim_and_objective'] = 'aim_and_objective';
		$data['select_aim'] = $this->Mdl_admin->select_aim();
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_objective'] = $this->Mdl_admin->select_objective();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
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
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
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
        $data['latest_blog']=$this->Mdl_admin->latest_blog();



		$this->load->view('user/vw_user',$data);
	}

	public function timeline()
	{
		$data['timeline'] = 'timeline';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$data['select_project'] = $this->Mdl_admin->select_project();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$this->load->view('user/vw_user',$data);
	}


    public function project_by_id($id)
    {
        $data['project_by_id'] = 'project_by_id';
        $data['select_logo'] = $this->Mdl_admin->select_logo();
        $data['select_project_by_id'] = $this->Mdl_admin->select_project_by_id($id);
        $data['select_link'] = $this->Mdl_admin->select_link();
        $data['select_event'] = $this->Mdl_admin->select_event();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
        $this->load->view('user/vw_user',$data);
    }

	public function researcher()
	{
		$data['researcher'] = 'researcher';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$this->load->view('user/vw_researcher',$data);
	}


	public function edit_researcher_by_id($researcher_id)
	{
	    if($this->session->userdata('researcher_logged_in')&& $this->session->userdata('researcher_id') == $researcher_id)
		{
			$data['msg']='';
		    $data['msg_type']='';
			$data['edit_researcher_by_id'] = 'edit_researcher_by_id';
			$data['select_logo'] = $this->Mdl_admin->select_logo();
			$data['select_event'] = $this->Mdl_admin->select_event();
	        $data['select_category'] = $this->Mdl_admin->all_category();
			$data['select_link'] = $this->Mdl_admin->select_link();
			$data['select_researcher'] = $this->Mdl_admin->select_researcher();
			$data['select_researcher_by_id'] = $this->Mdl_admin->select_researcher_by_id($researcher_id);
	        $data['latest_blog']=$this->Mdl_admin->latest_blog();
			$this->load->view('user/vw_update_researcher_by_id',$data);
		}
		else
			redirect(base_url().'user/researcher_by_id/'.$researcher_id);

	}

	 public function update_researcher_by_id($researcher_id)
	{
	    $data['msg']='';
	    $data['msg_type']='';
		$data['update_researcher_by_id'] = 'update_researcher_by_id';
		$data['select_researcher']=$this->Mdl_admin->select_researcher();
		$data['select_researcher_by_id']=$this->Mdl_admin->select_researcher_by_id($researcher_id);
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$name = $_FILES['researcher_photo']['name'];
		$target_file = $this->researcher_photo();
		//$original_name=$this->Mdl_admin->select_original_name($researcher_id);
        //if($this->input->post('researcher_username') != $original_name){
	    //$this->form_validation->set_rules('researcher_name','Full Name','trim|xss_clean|min_length[3]');
	   // if($researcher_username!=$select_researcher_by_id['researcher_username'])
	  //  $this->form_validation->set_rules('researcher_username','Username','trim|xss_clean|min_length[3]|edit_unique[researcher.researcher_username] ');}

		//$this->form_validation->set_rules('researcher_email','Email','trim|xss_clean|min_length[9]|valid_email|is_unique[researcher.researcher_email]');

		//$this->form_validation->set_rules('researcher_password','Password','trim|xss_clean|min_length[5]');
		//$this->form_validation->set_rules('researcher_confirm_password','Confirmation Password','trim|xss_clean|min_length[5]|matches[researcher_password]');


		/*if($this->form_validation->run() == FALSE)
			{
					$data['select_researcher_by_id']=$this->Mdl_admin->select_researcher_by_id($researcher_id);
				    $data['msg']='validation error';
				    $data['msg_type']='danger';
				    $data['select_logo'] = $this->Mdl_admin->select_logo();
					$data['select_event'] = $this->Mdl_admin->select_event();
					$data['select_event'] = $this->Mdl_admin->select_event();
					$data['select_link'] = $this->Mdl_admin->select_link();
					$data['select_researcher'] = $this->Mdl_admin->select_researcher();
					$this->load->view('user/vw_update_researcher_by_id',$data);
			}

		else{

*/
					$update= $this->Mdl_admin->update_researcher_by_id($target_file,$name,$researcher_id);
					$data['select_researcher_by_id']=$this->Mdl_admin->select_researcher_by_id($researcher_id);
				    $data['select_logo'] = $this->Mdl_admin->select_logo();
					$data['select_event'] = $this->Mdl_admin->select_event();
					$data['select_event'] = $this->Mdl_admin->select_event();
					$data['select_link'] = $this->Mdl_admin->select_link();
					$data['select_researcher'] = $this->Mdl_admin->select_researcher();

				
				if($update)
				{
						$data['msg']='Your Profile Is Updated Successfully!!';
						$data['msg_type']='success';
			   	}
				else
				{
						$data['msg']='Something is wrong. Please Try again!!';
						$data['msg_type']='danger';
				}
				redirect(base_url().'user/edit_researcher_by_id/'.$researcher_id);
		//	}

	}
    public function update_password($id)
    {

        $data['msg']='';
        $data['msg_type']='';

        $researcher_old_password = $this->input->post('researcher_old_password');
        $password = $this->input->post('researcher_password');
        $passconf = $this->input->post('researcher_passconf');


        $this->form_validation->set_rules('researcher_password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('researcher_passconf', 'Password Confirmation', 'trim|required|matches[admin_password]');


            $this->load->library('encrypt');
            $enc_password = md5($password);
            $enc_old_password = md5($researcher_old_password);
            $this->load->model('Mdl_admin');



            $update = $this->Mdl_admin->password_edited($id,$enc_password,$enc_old_password);
                if($update)
                {
                    $data['msg']='Your Password Is Updated Successfully!!';
                    $data['msg_type']='success';
                }
                else
                {
                    $data['msg']='Something is wrong. Please Try again!!';
                    $data['msg_type']='danger';
                }
            $data['select_researcher_by_id']=$this->Mdl_admin->select_researcher_by_id($id);
            $data['select_logo'] = $this->Mdl_admin->select_logo();
            $data['select_event'] = $this->Mdl_admin->select_event();
            $data['select_event'] = $this->Mdl_admin->select_event();
            $data['select_link'] = $this->Mdl_admin->select_link();
            $data['select_researcher'] = $this->Mdl_admin->select_researcher();


             $this->load->view('user/vw_researcher_by_id',$data);


    }
	private function researcher_photo()
    {

		if($_FILES['researcher_photo']['name']!='')
		{
	   		$name = $_FILES['researcher_photo']['name'];
	   		$name_ext = explode('.',$name );
			$ext = end($name_ext);
			$target_name = uniqid(rand()).".".$ext;
			$target_file = "asset/upload/researcher_photo/".$target_name;
			$allowed_types = array("jpeg","JPEG","jpg","JPG","gif","GIF","png","PNG");
			$file_type = $_FILES['researcher_photo']['type'];

			if(in_array($ext, $allowed_types))
			{
				if(is_uploaded_file($_FILES['researcher_photo']['tmp_name']))
				{
					if(move_uploaded_file($_FILES['researcher_photo']['tmp_name'], $target_file))
					{
						return $target_file;
					}
								
					return false;					
				}
			}
			else
			{
				return false;
			}
		}	
    }

	public function researcher_by_id($researcher_id)
	{
		$data['researcher_by_id'] = 'researcher_by_id';
		$data['select_logo'] = $this->Mdl_admin->select_logo();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
		$data['select_researcher_by_id'] = $this->Mdl_admin->select_researcher_by_id($researcher_id);
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$this->load->view('user/vw_researcher_by_id',$data);
	}

	public function funding()
	{
		$data['funding'] = 'funding';
		$data['select_logo'] = $this->Mdl_admin->select_logo();	
		$data['select_funding'] = $this->Mdl_admin->select_funding();
		$data['select_event'] = $this->Mdl_admin->select_event();
		$data['select_researcher'] = $this->Mdl_admin->select_researcher();
        $data['latest_blog']=$this->Mdl_admin->latest_blog();
		$data['select_link'] = $this->Mdl_admin->select_link();
		$this->load->view('user/vw_user',$data);
}


}