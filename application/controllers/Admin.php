<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class Admin extends CI_Controller {

/*----------------------------- Constructor ----------------------------------*/

		function __construct() 
		{
	        parent::__construct();
	      	$this->load->helper(array('form', 'url','file'));
	      	$this->load->model('Mdl_admin');	

	        if(!$this->session->userdata('admin_logged_in'))
	        {
	        	redirect(base_url().'admin_login');
	        }	
    	}

/*----------------------------- Index ----------------------------------*/


	public function index()
	{
		$data['msg']='';
		$data['home'] = 'home';
		$data['select_slideshow']=$this->Mdl_admin->select_slideshow();
		$data['select_home'] = $this->Mdl_admin->select_home();
		$this->load->view('admin/vw_admin',$data);
	}


	

	
/*----------------------------- Home ----------------------------------*/

    	public function home()
	{

		$msg=$this->uri->segment(3);
		$data['msg']='';
		$data['msg_type']=$this->uri->segment(4);
		if($msg=='updated_home')
			$data['msg']="Homepage is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Updating homepage is unsuccessfull! Please try again!";
		elseif($msg=='added_slide')
			$data['msg']="New photo for homepage slideshow is added successfully!";
		elseif($msg=='not_added')
			$data['msg']="uploading new photo for homepage slideshow is unsuccessfull! Please try again!";
		elseif($msg=='deleted_slide')
			$data['msg']="Selected photo is deleted successfully from homepage slideshow!";
		elseif($msg=='not_deleted')
			$data['msg']="Deleting selected photo from homepage slideshow is unsuccessfull! Please try again!";

		$data['home'] = 'home';
		$data['select_slideshow']=$this->Mdl_admin->select_slideshow();

		$data['select_home'] = $this->Mdl_admin->select_home();
		$this->load->view('admin/vw_admin',$data);
	}

    public function update_home()

    	{	
    		$update = $this->Mdl_admin->update_home(); 
	    	if($update)
			
			{
				$data['msg']= 'updated_home';
				$data['msg_type'] = 'success';
			}
			else
			{
				$data['msg']='not_updated';
				$data['msg_type']='danger';	
			}
			redirect(base_url().'admin/home/'.$data['msg'].'/'.$data['msg_type']);
    	}


	/*----------------------------- Slideshow For Homepage ----------------------------------*/

	  public function insert_slideshow()
    {

    	$target_file = $this->slide_photo();
		$insert = $this->Mdl_admin->insert_slideshow($target_file);
		if($insert)
		{
			$data['msg'] = 'added_slide';
			$data['msg_type'] = 'success';
		}
		else
		{
			$data['msg'] = 'not_added';
			$data['msg_type'] = 'danger';
		}
		redirect(base_url().'admin/home/'.$data['msg'].'/'.$data['msg_type']);
    }

      public function delete_slideshow($id)
	{
		$query = $this->Mdl_admin->delete_slideshow($id);
		if($query)
		{
			$data['msg'] = 'deleted_slide';
			$data['msg_type'] = 'success';
		}
		else
		{
			$data['msg'] = 'not_deleted';
			$data['msg_type'] = 'danger';
		}
		redirect(base_url().'admin/home/'.$data['msg'].'/'.$data['msg_type']);
	} 


    private function slide_photo()
    {

		if($_FILES['slideshow_photo']['name']!='')
		{
    		$name = $_FILES['slideshow_photo']['name'];
    		$name_ext = explode('.',$name );
    		$ext = end($name_ext);
    		$target_name = uniqid(rand()).".".$ext;
    		$target_file = "asset/upload/slide/".$target_name;
    		$allowed_types = array("jpeg","JPEG","jpg","JPG","gif","GIF","png","PNG");
    		$file_type = $_FILES['slideshow_photo']['type'];
    		
    		if(in_array($ext, $allowed_types))
    		{
    			if(is_uploaded_file($_FILES['slideshow_photo']['tmp_name']))
    			{
    				if(move_uploaded_file($_FILES['slideshow_photo']['tmp_name'], $target_file))
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
	/*----------------------------- Send Mail ----------------------------------*/

	public function email()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);


		$data['email']='email';
		$data['email_settings']=$this->Mdl_admin->email_settings();
		$this->load->view('admin/vw_admin',$data);
	}

	public function send_mail()
	{
		$email_name = $this->input->post('email_name');
		$email_email = $this->input->post('email_email');
		$email_password = $this->input->post('email_password');
		$email_to = $this->input->post('email_to');
		$email_subject =$this->input->post('email_subject');
		$email_text = $this->input->post('email_text');
		require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port       = 465;                   // SMTP port to connect to GMail
		$mail->Username   = $email_email;  // user email address
		$mail->Password   = $email_password;            // password in GMail
		$mail->SetFrom($email_email, $email_name);  //Who is sending
		$mail->isHTML(true);
		$mail->Subject    = $email_subject;
		$mail->Body      = "
            <html>
            <head>
                <title>Title</title>
            </head>
            <body>
				$email_text
            </body>
            </html>
        ";
		$destino = $email_to; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
			$return= 0;
		} else {
			$return= 1;
		}
		if($return=='1'){
			$data['msg']="Email sent successfully!";
			$data['msg_type']="success";
		}

		elseif($return==0){
			$data['msg']="Email Sending faild!!";
			$data['msg_type']="danger";
		}

		$data['email']='email';
		$data['email_settings']=$this->Mdl_admin->email_settings();
		$this->load->view('admin/vw_admin',$data);
    }
	public function change_email()
	{
		$update=$this->Mdl_admin->email_update();

		if($update ==1)
		{
			$data['msg'] = 'Email Updated succesfully';
			$data['msg_type'] = 'success';
		}

		else
		{
			$data['msg'] = 'Sorry!! update faild!!';
			$data['msg_type'] = 'danger';
		}
		$data['email']='email';
		$data['email_settings']=$this->Mdl_admin->email_settings();
		$this->load->view('admin/vw_admin',$data);
	}

/*----------------------------- Aim and Objective ----------------------------------*/

   	public function aim_and_objective()
	{

		$msg=$this->uri->segment(3);
		$data['msg']='';
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='updated_aim')
			$data['msg']="Aim is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Updating aim is unsuccessfull! Please try again!";
		elseif($msg=='inserted_objective')
			$data['msg']="New objective is added successfully!";
		elseif($msg=='not_inserted')
			$data['msg']="New objective insertion unsuccessfull! Please try again!";
		elseif($msg=='deleted_objective')
			$data['msg']="Selected objective is deleted successfully!";
		elseif($msg=='not_deleted')
			$data['msg']="Objective deletion unsuccessfull! Please try again!";

		$data['aim_and_objective'] = 'aim_and_objective';
		$data['select_aim'] = $this->Mdl_admin->select_aim();
		$data['select_objective'] = $this->Mdl_admin->select_objective();

		$this->load->view('admin/vw_admin',$data);
	}

    public function update_aim()

    	{
    		$update = $this->Mdl_admin->update_aim();
	    	if($update)
			
			{
				$data['msg'] = 'updated_aim';
				$data['msg_type'] = 'success';
			}
			else
			{
				$data['msg']='not_updated';
				$data['msg_type']='danger';	
			}

			redirect(base_url().'admin/aim_and_objective/'.$data['msg'].'/'.$data['msg_type']);

    	}

    	public function insert_objective()
		{
			$insert = $this->Mdl_admin->insert_objective();
	    	if($insert)
			
			{
				$data['msg'] = 'inserted_objective';
				$data['msg_type'] = 'success';
			}
			else
			{
				$data['msg']='not_inserted';
				$data['msg_type']='danger';	
			}
			redirect(base_url().'admin/aim_and_objective/'.$data['msg'].'/'.$data['msg_type']);
		}


	public function delete_objective($objective_id)
	{
		$delete=$this->Mdl_admin->delete_objective($objective_id);
		if($delete)
		{
			$data['msg']='deleted_objective';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/aim_and_objective/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function update_objective_by_id($objective_id)
	{
		$update=$this->Mdl_admin->update_objective_by_id($objective_id);

    	if($update)
		{
			$data['msg'] = 'updated_objective';
			$data['msg_type'] = 'success';
		}
		
		else
		{
			$data['msg'] = 'not_updated';
			$data['msg_type'] = 'danger';
		}
		redirect(base_url().'admin/objective_by_id/'.$objective_id.'/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function objective_by_id()
	{
		$data['msg']='';
		$objective_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_objective')
			$data['msg']="Selected objective is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Object updating is unsuccessfull! Please try again!";

		$data['aim_and_objective_by_id']='aim_and_objective_by_id';
		$data['select_objective_by_id']=$this->Mdl_admin->select_objective_by_id($objective_id);
		$data['select_objective']=$this->Mdl_admin->select_objective();
		$data['select_aim']=$this->Mdl_admin->select_aim();

		$this->load->view('admin/vw_admin',$data);
	}



/*----------------------------- Timeline ----------------------------------*/
 
	public function timeline()
	{

		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_timeline')
			$data['msg']="Timeline row insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="New timeline row insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_timeline')
			$data['msg']="Selected timeline row is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected timeline row deletion is unsuccessfull! Please try again!";

		$data['timeline']='timeline';
		$data['select_timeline']=$this->Mdl_admin->select_timeline();
		$this->load->view('admin/vw_admin',$data);
	}
	public function timeline_by_id($timeline_id)
	{

		$data['msg']='';
		$objective_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_timeline')
			$data['msg']="Selected timeline row is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected timeline row updating is unsuccessfull! Please try again!";

		$data['timeline_by_id']='timeline_by_id';
		$data['select_timeline']=$this->Mdl_admin->select_timeline();
		$data['select_timeline_by_id']=$this->Mdl_admin->select_timeline_by_id($timeline_id);
		$this->load->view('admin/vw_admin',$data);
	}
	public function insert_timeline()
	{
		$insert=$this->Mdl_admin->insert_timeline();
		if($insert)
		{
			$data['msg']='inserted_timeline';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/timeline/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function delete_timeline($timeline_id)
	{
		$delete=$this->Mdl_admin->delete_timeline($timeline_id);
		if($delete)
		{
			$data['msg']='deleted_timeline';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/timeline/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function update_timeline($timeline_id)
	{
		$update=$this->Mdl_admin->update_timeline($timeline_id);
		if($update)
		{
			$data['msg']='updated_timeline';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_updated';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/timeline_by_id/'.$timeline_id.'/'.$data['msg'].'/'.$data['msg_type']);
	}


/*----------------------------- News ----------------------------------*/

	public function news()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_news')
			$data['msg']="New news insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="News insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_news')
			$data['msg']="Selected news is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected news deletion is unsuccessfull! Please try again!";

		$data['news']='news';
		$data['select_news']=$this->Mdl_admin->select_news();
		$this->load->view('admin/vw_admin',$data);
	}


	public function news_by_id()
	{

		$data['msg']='';
		$news_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_news')
			$data['msg']="Selected news is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected news updation is unsuccessfull! Please try again!";

		$data['news_by_id']='news_by_id';
		$data['select_news_by_id']=$this->Mdl_admin->select_news_by_id($news_id);
		$data['select_news']=$this->Mdl_admin->select_news();
		$this->load->view('admin/vw_admin',$data);
	}

	public function insert_news()
	{
    	$target_file = $this->news_photo();
		$insert = $this->Mdl_admin->insert_news($target_file);
		if($insert)
		{
			$data['msg']='inserted_news';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';
		}
		redirect(base_url().'admin/news/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function delete_news($news_id)
	{
		$delete=$this->Mdl_admin->delete_news($news_id);
		if($delete)
		{
			$data['msg']='deleted_news';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';
		}
		redirect(base_url().'admin/news/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function update_news_by_id($news_id)
	{
		$target_file=$this->news_photo();
		$name=$_FILES['news_photo']['name'];
		$update = $this->Mdl_admin->update_news($target_file,$name,$news_id);
    	if($update)
		{
			$data['msg'] = 'updated_news';
			$data['msg_type'] = 'success';
		}

		else
		{
			$data['msg'] = 'not_updated';
			$data['msg_type'] = 'danger';
		}
		redirect(base_url().'admin/news_by_id/'.$news_id.'/'.$data['msg'].'/'.$data['msg_type']);
	}

    private function news_photo()
    {

			if($_FILES['news_photo']['name']!='')
			{
		   		$name = $_FILES['news_photo']['name'];
		   		$name_ext = explode('.',$name );
				$ext = end($name_ext);
				$target_name = uniqid(rand()).".".$ext;
				$target_file = "asset/upload/news_photo/".$target_name;
				$allowed_types = array("jpeg","JPEG","jpg","JPG","gif","GIF","png","PNG");
				$file_type = $_FILES['news_photo']['type'];

				if(in_array($ext, $allowed_types))
				{
					if(is_uploaded_file($_FILES['news_photo']['tmp_name']))
					{
						if(move_uploaded_file($_FILES['news_photo']['tmp_name'], $target_file))
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
    /*----------------------------- Blog----------------------------------*/

    public function blog()
    {
        $data['msg']='';
        $msg=$this->uri->segment(3);
        $data['msg_type']=$this->uri->segment(4);

        if($msg=='inserted_blog')
            $data['msg']="New blog insertion is successfull!";
        elseif($msg=='not_inserted')
            $data['msg']="Blog insertion is unsuccessfull! Please try again!";
        elseif($msg=='deleted_blog')
            $data['msg']="Selected blog is successfully deleted!";
        elseif($msg=='not_deleted')
            $data['msg']="Selected blog deletion is unsuccessfull! Please try again!";

        $data['blog']='blog';
        $data['select_blog']=$this->Mdl_admin->select_blog();
        $this->load->view('admin/vw_admin',$data);
    }


    public function blog_by_id($blog_id)
    {

        $data['msg']='';
        $news_id=$this->uri->segment(3);
        $msg=$this->uri->segment(4);
        $data['msg_type']=$this->uri->segment(5);

        if($msg=='updated_blog')
            $data['msg']="Selected blog is updated successfully!";
        elseif($msg=='not_updated')
            $data['msg']="Selected blog updation is unsuccessfull! Please try again!";

        $data['blog_by_id']='blog_by_id';
        $data['select_blog_by_id']=$this->Mdl_admin->select_blog_by_id($blog_id);
        $data['select_blog']=$this->Mdl_admin->select_blog();
        $this->load->view('admin/vw_admin',$data);
    }

    public function insert_blog()
    {

        $insert = $this->Mdl_admin->insert_blog();
        if($insert)
        {
            $data['msg']='inserted_blog';
            $data['msg_type']='success';
        }
        else
        {
            $data['msg']='not_inserted';
            $data['msg_type']='danger';
        }
        redirect(base_url().'admin/blog/'.$data['msg'].'/'.$data['msg_type']);
    }

    public function delete_blog($blog_id)
    {
        $delete=$this->Mdl_admin->delete_blog($blog_id);
        if($delete)
        {
            $data['msg']='deleted_blog';
            $data['msg_type']='success';
        }
        else
        {
            $data['msg']='not_deleted';
            $data['msg_type']='danger';
        }
        redirect(base_url().'admin/blog/'.$data['msg'].'/'.$data['msg_type']);
    }

    public function update_blog_by_id($blog_id)
    {


        $update = $this->Mdl_admin->update_blog($blog_id);
        if($update)
        {
            $data['msg'] = 'updated_blog';
            $data['msg_type'] = 'success';
        }

        else
        {
            $data['msg'] = 'not_updated';
            $data['msg_type'] = 'danger';
        }
        redirect(base_url().'admin/blog_by_id/'.$blog_id.'/'.$data['msg'].'/'.$data['msg_type']);
    }



/*----------------------------- Publication ----------------------------------*/

    public function category()
    {

        $data['category'] = 'category';
        $data['msg'] = '';

        $data['all_category'] = $this->Mdl_admin->all_category();
       $data['parent'] = $this->Mdl_admin->load_category();

        $this->load->view('admin/vw_admin',$data);
    }
    // ## Category Insert
    public function insert_cat()
    {
        $data['category'] = 'category';

       
        $result = $this->Mdl_admin->cat_insert();
        if($result==1)
        {
            $data['msg'] = 'Successfully Added Category!!';
            $data['msg_type'] = 'success';
        }
        else
        {
            $data['msg'] = 'Sorry!! Category wast not added!!Try Again';
            $data['msg_type'] = 'danger';
        }
        $data['parent'] = $this->Mdl_admin->load_category();
        $data['all_category'] = $this->Mdl_admin->all_category();
        $this->load->view('admin/vw_admin',$data);
    }


    public function update_cat($id)
    {

        $this->load->model('Mdl_admin');
        $data['category'] = 'category';
        $data['all_category'] = $this->Mdl_admin->all_category();
        $result = $this->Mdl_admin->cat_update($id);
        if($result==1)
        {
            $data['msg'] = 'Successfully Updated Category!!';
            $data['msg_type'] = 'success';
        }
        else
        {
            $data['msg'] = 'Sorry!! Category wast not updated!!Try Again';
            $data['msg_type'] = 'danger';
        }
        $data['parent'] = $this->Mdl_admin->load_category();
        $data['all_category'] = $this->Mdl_admin->all_category();
        $this->load->view('admin/vw_admin',$data);
    }
    // ## Category Delete
    public function category_delete($id)
    {

        $data['category'] = 'category';
        $data['msg'] = '';

        $query = $this->Mdl_admin->delete_cat($id);
        if($query==1)
        {
            $data['msg'] = 'Successfully Deleted Category!!';
            $data['msg_type'] = 'success';
        }
        else{
            $data['msg'] = 'Sorry!! Category wast not deleted!!Try Again';
            $data['msg_type'] = 'danger';
        }
        $data['all_category'] = $this->Mdl_admin->all_category();
        $data['parent'] = $this->Mdl_admin->load_category();
        $this->load->view('admin/vw_admin',$data);

    }
	public function publication()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_publication')
			$data['msg']="New publication insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="Publication insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_publication')
			$data['msg']="Selected publication is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected publication deletion is unsuccessfull! Please try again!";
        $data['all_category'] = $this->Mdl_admin->all_category();
        $data['parent'] = $this->Mdl_admin->load_category();
		$data['publication']='publication';
        $data['select_researcher']=$this->Mdl_admin->select_researcher();
		$data['select_publication']=$this->Mdl_admin->select_publication();
		$this->load->view('admin/vw_admin',$data);
	}

    public function insert_publication()
	{
		$target_file = $this->publication_file();
		$insert=$this->Mdl_admin->insert_publication($target_file);
		if($insert)
		{
			$data['msg']='inserted_publication';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/publication/'.$data['msg'].'/'.$data['msg_type']);
	}


	public function delete_publication($publication_id)
	{
		$delete=$this->Mdl_admin->delete_publication($publication_id);
		if($delete)
		{
			$data['msg']='deleted_publication';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/publication/'.$data['msg'].'/'.$data['msg_type']);
	}


	public function update_publication_by_id($publication_id)
	{
		$target_file=$this->publication_file();
		$name=$_FILES['publication_file']['name'];
		$update = $this->Mdl_admin->update_publication($target_file,$name,$publication_id);
    	if($update)
		{
			$data['msg'] = 'updated_publication';
			$data['msg_type'] = 'success';
		}
		else
		{
			$data['msg'] = 'not_updated';
			$data['msg_type'] = 'danger';
		}
		
		redirect(base_url().'admin/publication_by_id/'.$publication_id.'/'.$data['msg'].'/'.$data['msg_type']);


	}


	public function publication_by_id()
	{

		$data['msg']='';
		$publication_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_publication')
			$data['msg']="Selected publication is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected publication updation is unsuccessfull! Please try again!";

		$data['publication_by_id']='publication_by_id';
		$data['select_publication_by_id']=$this->Mdl_admin->select_publication_by_id($publication_id);
		$data['select_publication']=$this->Mdl_admin->select_publication();
        $data['select_researcher']=$this->Mdl_admin->select_researcher();
        $data['all_category'] = $this->Mdl_admin->all_category();
		$this->load->view('admin/vw_admin',$data);
	}

    private function publication_file()
    {
   		$name = $_FILES['publication_file']['name'];
   		$name_ext = explode('.',$name );
		$ext = end($name_ext);
		$target_name = uniqid(rand()).".".$ext;
		$target_file = "asset/upload/publication_file/".$target_name;
		$allowed_types = array("pdf","doc","docx","xml");
		$file_type = $_FILES['publication_file']['type'];

		if(in_array($ext, $allowed_types))
		{
			if(is_uploaded_file($_FILES['publication_file']['tmp_name']))
			{
				if(move_uploaded_file($_FILES['publication_file']['tmp_name'], $target_file))
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


/*----------------------------- Contact ----------------------------------*/



		public function contact()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='updated_contact')
			$data['msg']="Contact is successfully updated!";
		elseif($msg=='not_updated')
			$data['msg']="Updating contact is unsuccessfull! Please try again!";

		$data['contact']='contact';
		$data['select_contact']=$this->Mdl_admin->select_contact();
		$this->load->view('admin/vw_admin',$data);
	}


		public function update_contact()
	{
		$update=$this->Mdl_admin->update_contact();
		if($update)
		{
			$data['msg']='updated_contact';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_updated';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/contact/'.$data['msg'].'/'.$data['msg_type']);
	}



/*----------------------------- Event ----------------------------------*/



		public function event()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_event')
			$data['msg']="New event insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="Event insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_event')
			$data['msg']="Selected event is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected event deletion is unsuccessfull! Please try again!";

		$data['event']='event';
		$data['select_event']=$this->Mdl_admin->select_event();
		$this->load->view('admin/vw_admin',$data);
	}


		public function event_by_id()
	{

		$data['msg']='';
		$event_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_event')
			$data['msg']="Selected event is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected event updation is unsuccessfull! Please try again!";

		$data['event_by_id']='event_by_id';
		$data['select_event']=$this->Mdl_admin->select_event();
		$data['select_event_by_id']=$this->Mdl_admin->select_event_by_id($event_id);
		$this->load->view('admin/vw_admin',$data);
	}


	 public function insert_event()
	{
		$insert=$this->Mdl_admin->insert_event();
		if($insert)
		{
			$data['msg']='inserted_event';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/event/'.$data['msg'].'/'.$data['msg_type']);
	}


		public function update_event($event_id)
	{
		$update=$this->Mdl_admin->update_event($event_id);
		if($update)
		{
			$data['msg']='updated_event';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_updated';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/event_by_id/'.$event_id.'/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function delete_event($event_id)
	{
		$delete=$this->Mdl_admin->delete_event($event_id);
		if($delete)
		{
			$data['msg']='deleted_event';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/event/'.$data['msg'].'/'.$data['msg_type']);
	}

/*----------------------------- Researcher ----------------------------------*/

		public function researcher()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_researcher')
			$data['msg']="New researcher profile is added successfully!";
		elseif($msg=='not_inserted')
			$data['msg']="New researcher profile adding is unsuccessfull! Please try again!";
		elseif($msg=='not_validated')
			$data['msg']="Validation ERROR! Please try again!";
		elseif($msg=='deleted_researcher')
			$data['msg']="Selected researcher profile is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected researcher profile deletion is unsuccessfull! Please try again!";
		elseif($msg=='adminship_authorization')
			$data['msg']="Adminship authorization is successfully changed!";
		elseif($msg=='unauthorized')
			$data['msg']="Adminship authorization is unsuccessfull! Please try again!";

		$data['researcher']='researcher';
		$data['select_researcher']=$this->Mdl_admin->select_researcher();
        $data['email_settings']=$this->Mdl_admin->email_settings();
		$this->load->view('admin/vw_admin',$data);
	}

	public function insert_researcher()

	{	
		$target_file = $this->researcher_photo();
        $data['email_settings']=$this->Mdl_admin->email_settings();
        $link =base_url().'researcher_login';
        $researcher_name = $this->input->post('researcher_name');
        $researcher_username = $this->input->post('researcher_username');
        $researcher_email = $this->input->post('researcher_email');
        $researcher_password = $this->input->post('researcher_password');
        $email_name = $this->input->post('email_name');
        $email_email = $this->input->post('email_email');
        $email_password = $this->input->post('email_password');

	    $this->form_validation->set_rules('researcher_name','Full Name','trim|xss_clean|min_length[3]');
	    $this->form_validation->set_rules('researcher_username','Username','trim|xss_clean|min_length[3]|is_unique[researcher.researcher_username] ');
		$this->form_validation->set_rules('researcher_email','Email','trim|xss_clean|min_length[9]|valid_email|is_unique[researcher.researcher_email]');
		$this->form_validation->set_rules('researcher_password','Password','trim|xss_clean|min_length[5]');
		$this->form_validation->set_rules('researcher_confirm_password','Confirmation Password','trim|xss_clean|min_length[5]|matches[researcher_password]');
		if($this->form_validation->run() == FALSE)
		{
			$data['researcher']='researcher';
			$data['select_researcher']=$this->Mdl_admin->select_researcher();
		    $data['msg']='not_validated';
		    $data['msg_type']='danger';
		    $this->load->view('admin/vw_admin',$data);
		}
		else
		{
			$insert= $this->Mdl_admin->insert_researcher($target_file);	
			if($insert)
			{
				$data['msg']='inserted_researcher';
				$data['msg_type']='success';
                ## Confirm Email!!


                $email_to = $researcher_email;
                $email_subject ="Welcome!!";
                $email_text = "kghhkgk";
                require_once(APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php');
                $mail = new PHPMailer();
                $mail->IsSMTP(); // we are going to use SMTP
                $mail->SMTPAuth   = true; // enabled SMTP authentication
                $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
                $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
                $mail->Port       = 465;                   // SMTP port to connect to GMail
                $mail->Username   = $email_email;  // user email address
                $mail->Password   = $email_password;            // password in GMail
                $mail->SetFrom($email_email, $email_name);  //Who is sending
                $mail->isHTML(true);
                $mail->Subject    = $email_subject;
                $mail->Body      = "
            <html>
            <head>
                <title>Title</title>
            </head>
            <body>
            Hello <b>$researcher_name</b>,<br>
            Welcome to our team.Please <a href=".$link.">Log In</a> and update your profile.<br>
			Username: <b>$researcher_username</b><br>
			Password: <b>$researcher_password</b>
			<br>Thank You.
            </body>
            </html>
        ";
                $destino = $email_to; // Who is addressed the email to
                $mail->AddAddress($destino, "Receiver");
                if(!$mail->Send()) {
                    $return= 0;
                } else {
                    $return= 1;
                }

            }
			else
			{
				$data['msg']='not_inserted';
				$data['msg_type']='danger';
			}
		}
		redirect(base_url().'admin/researcher/'.$data['msg'].'/'.$data['msg_type']);
	}




		public function delete_researcher($researcher_id)
	{
		$delete=$this->Mdl_admin->delete_researcher($researcher_id);
		if($delete)
		{
			$data['msg']='deleted_researcher';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/researcher/'.$data['msg'].'/'.$data['msg_type']);
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
		else
		    {
		    return 1;
        }
    }


	/*----------------------------- Other links and uploads ----------------------------------*/

	public function other()
	
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='updated_logo')
			$data['msg']="Logo updation for site cover is successfull!";
		elseif($msg=='not_updated_logo')
			$data['msg']="Logo updation for site cover is unsuccessfull! Please try again!";
		if($msg=='updated_link')
			$data['msg']="Social media link updation for research team site is successfull!";
		elseif($msg=='not_updated_link')
			$data['msg']="Social media link updation for research team site is unsuccessfull! Please try again!";

		$data['other']='other';
		$data['select_logo']=$this->Mdl_admin->select_logo();
		$data['select_link']=$this->Mdl_admin->select_link();
		$this->load->view('admin/vw_admin',$data);
	}
		public function update_logo()
	{

		$target_file=$this->logo_link();
		$name=$_FILES['logo_link']['name'];
		$update = $this->Mdl_admin->update_logo($target_file,$name);
    	if($update)
		{
			$data['msg'] = 'updated_logo';
			$data['msg_type'] = 'success';
			
		}
		
		else
		{
			$data['msg'] = 'not_updated_logo';
			$data['msg_type'] = 'danger';
		}
		
		redirect(base_url().'admin/other/'.$data['msg'].'/'.$data['msg_type']);
	}

		public function update_link()
	{

		$update=$this->Mdl_admin->update_link();
    	if($update)
		{
			$data['msg'] = 'updated_link';
			$data['msg_type'] = 'success';
			
		}
		
		else
		{
			$data['msg'] = 'not_updated_link';
			$data['msg_type'] = 'danger';
		}		
		redirect(base_url().'admin/other/'.$data['msg'].'/'.$data['msg_type']);
	}

    private function logo_link()
    {

		if($_FILES['logo_link']['name']!='')
		{
	   		$name = $_FILES['logo_link']['name'];
	   		$name_ext = explode('.',$name );
			$ext = end($name_ext);
			$target_name = uniqid(rand()).".".$ext;
			$target_file = "asset/upload/logo_link/".$target_name;
			$allowed_types = array("jpeg","JPEG","jpg","JPG","gif","GIF","png","PNG");
			$file_type = $_FILES['logo_link']['type'];

			if(in_array($ext, $allowed_types))
			{
				if(is_uploaded_file($_FILES['logo_link']['tmp_name']))
				{
					if(move_uploaded_file($_FILES['logo_link']['tmp_name'], $target_file))
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

/*------------------- Funding --------------------------*/

    public function funding()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_sponsor')
			$data['msg']="New Sponsor insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="Sponsor insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_sponsor')
			$data['msg']="Selected Sponsor is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected Sponsor deletion is unsuccessfull! Please try again!";

		$data['funding']='funding';
		$data['select_funding']=$this->Mdl_admin->select_funding();
		$this->load->view('admin/vw_admin',$data);
	}


	public function funding_sponsor_by_id()
	{

		$data['msg']='';
		$funding_sponsor_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_sponsor')
			$data['msg']="Selected Sponsor is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected Sponsor updation is unsuccessfull! Please try again!";

		$data['funding_sponsor_by_id']='funding_sponsor_by_id';
		$data['select_funding_sponsor_by_id']=$this->Mdl_admin->select_funding_sponsor_by_id($funding_sponsor_id);
		$data['select_funding']=$this->Mdl_admin->select_funding();
		$this->load->view('admin/vw_admin',$data);
	}

	public function insert_funding_sponsor()
	{
    	$target_file = $this->funding_sponsor_logo();
		$insert = $this->Mdl_admin->insert_funding_sponsor($target_file);
		if($insert)
		{
			$data['msg']='inserted_sponsor';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/funding/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function delete_funding_sponsor($funding_sponsor_id)
	{
		$delete=$this->Mdl_admin->delete_funding_sponsor($funding_sponsor_id);
		if($delete)
		{
			$data['msg']='deleted_sponsor';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/funding/'.$data['msg'].'/'.$data['msg_type']);
	}

	public function update_funding_sponsor_by_id($funding_sponsor_id)
	{
		$target_file=$this->funding_sponsor_logo();
		$name=$_FILES['funding_sponsor_logo']['name'];
		$update = $this->Mdl_admin->update_funding_sponsor($target_file,$name,$funding_sponsor_id);
    	if($update)
		{
			$data['msg'] = 'updated_sponsor';
			$data['msg_type'] = 'success';
		}
		
		else
		{
			$data['msg'] = 'not_updated';
			$data['msg_type'] = 'danger';
		}
		redirect(base_url().'admin/funding_sponsor_by_id/'.$funding_sponsor_id.'/'.$data['msg'].'/'.$data['msg_type']);
	}

    private function funding_sponsor_logo()
    {

			if($_FILES['funding_sponsor_logo']['name']!='')
			{
		   		$name = $_FILES['funding_sponsor_logo']['name'];
		   		$name_ext = explode('.',$name );
				$ext = end($name_ext);
				$target_name = uniqid(rand()).".".$ext;
				$target_file = "asset/upload/funding_logo/".$target_name;
				$allowed_types = array("jpeg","JPEG","jpg","JPG","gif","GIF","png","PNG");
				$file_type = $_FILES['funding_sponsor_logo']['type'];

				if(in_array($ext, $allowed_types))
				{
					if(is_uploaded_file($_FILES['funding_sponsor_logo']['tmp_name']))
					{
						if(move_uploaded_file($_FILES['funding_sponsor_logo']['tmp_name'], $target_file))
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

    /*----------------------*/

	public function project()
	{
		$data['msg']='';
		$msg=$this->uri->segment(3);
		$data['msg_type']=$this->uri->segment(4);

		if($msg=='inserted_project')
			$data['msg']="New project insertion is successfull!";
		elseif($msg=='not_inserted')
			$data['msg']="project insertion is unsuccessfull! Please try again!";
		elseif($msg=='deleted_project')
			$data['msg']="Selected project is successfully deleted!";
		elseif($msg=='not_deleted')
			$data['msg']="Selected project deletion is unsuccessfull! Please try again!";
		$data['project']='project';
				$data['select_researcher']=$this->Mdl_admin->select_researcher();

		$data['select_project']=$this->Mdl_admin->select_project();
		$this->load->view('admin/vw_admin',$data);
	}

    public function insert_project()
	{
		$insert=$this->Mdl_admin->insert_project();
		if($insert)
		{
			$data['msg']='inserted_project';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_inserted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/project/'.$data['msg'].'/'.$data['msg_type']);
	}


	public function delete_project($project_id)
	{
		$delete=$this->Mdl_admin->delete_project($project_id);
		if($delete)
		{
			$data['msg']='deleted_project';
			$data['msg_type']='success';
		}
		else
		{
			$data['msg']='not_deleted';
			$data['msg_type']='danger';	
		}
		redirect(base_url().'admin/project/'.$data['msg'].'/'.$data['msg_type']);
	}


	public function update_project_by_id($project_id)
	{
		$update = $this->Mdl_admin->update_project($project_id);
    	if($update)
		{
			$data['msg'] = 'updated_project';
			$data['msg_type'] = 'success';
		}
		else
		{
			$data['msg'] = 'not_updated';
			$data['msg_type'] = 'danger';
		}
		
		redirect(base_url().'admin/project_by_id/'.$project_id.'/'.$data['msg'].'/'.$data['msg_type']);


	}


	public function project_by_id()
	{

		$data['msg']='';
		$project_id=$this->uri->segment(3);
		$msg=$this->uri->segment(4);
		$data['msg_type']=$this->uri->segment(5);

		if($msg=='updated_project')
			$data['msg']="Selected project is updated successfully!";
		elseif($msg=='not_updated')
			$data['msg']="Selected project updation is unsuccessfull! Please try again!";

		$data['project_by_id']='project_by_id';
		$data['select_project_by_id']=$this->Mdl_admin->select_project_by_id($project_id);
		$data['select_project']=$this->Mdl_admin->select_project();
		$data['select_researcher']=$this->Mdl_admin->select_researcher();
		$this->load->view('admin/vw_admin',$data);
	}

}

?>