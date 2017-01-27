<?php 
	class Mdl_admin extends CI_Model {



    public function validate($username, $enc_password)
    {
        
        $query_admin = $this->db->get_where('researcher',array('researcher_username'=>$username,'researcher_password'=>$enc_password, 'researcher_designation'=>1));
        if($query_admin->num_rows()>0)
        {
        
           foreach ($query_admin->result_array() as $a => $b) {
                $this->session->set_userdata(array(
                        'admin_id' => $b['researcher_id'],
                        'admin_username' => $b['researcher_username'],
                        'admin_name' => $b['researcher_name'],
                        'admin_photo' => $b['researcher_photo'],
                        'admin_logged_in' => true
                    )
                   );
            }

            return $query_admin;
        }
        
    }

 public function validate_researcher($username, $enc_password)
    {
        
        $query_researcher = $this->db->get_where('researcher',array('researcher_username'=>$username,'researcher_password'=>$enc_password));
        if($query_researcher->num_rows()>0)
        {
        
           foreach ($query_researcher->result_array() as $a => $b) {
                $this->session->set_userdata(array(
                        'researcher_id' => $b['researcher_id'],
                        'researcher_username' => $b['researcher_username'],
                        'researcher_name' => $b['researcher_name'],
                        'researcher_photo' => $b['researcher_photo'],
                        'researcher_logged_in' => true
                    )
                   );
            }

            return $query_researcher;
        }
        
    }


        public function select_home()
            {
                $query=$this->db->get('home');
                return $query->result();
            }

        public function update_home()
            {
                $home_title = $this->input->post('home_title');
                $home_text = $this->input->post('home_text');
                $this->db->set('home_title', $home_title);
                $this->db->set('home_text',$home_text);
                $query=$this->db->update('home');
                return $query;
            }

        /*------ Admin_aim_and_objective_By_Rahul --------*/

        	public function update_aim()
		{

			$aim_text= $this->input->post('aim_text');

			$attr = array(
				'aim_text'=> $aim_text
						 );
			$query=0;

			if($aim_text!="")
			$query = $this->db->update('aim',$attr);

			if($query)
			{
				return 1;
			}
			else
			{
				return false;
			}


        }


        public function select_aim()

        	{
        		$query=$this->db->get('aim');
        		return $query->result();
        	}



        public function select_objective()

        	{
        		$this->db->order_by('objective_id DESC');
				$query=$this->db->get('objective');
        		return $query->result();
        	}

        public function select_objective_by_id($objective_id)

            {
                $this->db->where('objective_id',$objective_id);
                $query=$this->db->get('objective');
                return $query->result();
            }


        public function insert_objective()

        	{
        		$data['objective_text']=$this->input->post('objective_text');
        		$data['objective_id']=$this->input->post('objective_id');
        		$query=$this->db->insert('objective',$data);
        		return $query;
        	}

        public function update_objective_by_id($objective_id)

        	{
        		$objective_text = $this->input->post('objective_text');
        		$this->db->set('objective_text', $objective_text);
				$this->db->where('objective_id', $objective_id);
				$query=$this->db->update('objective');
        		return $query;
        	}


        public function delete_objective($objective_id)
        	{
        		$this->db->where('objective_id', $objective_id);
				$query=$this->db->delete('objective');
        		return $query;
        	}
        	/*-----------------------------------------*/


        	
        /*------ Admin_timeline_By_Saif --------*/

        public function select_timeline()

            {
                $this->db->order_by('timeline_start_date ASC, timeline_id ASC');
                $query=$this->db->get('timeline');
                return $query->result();
            }
        public function select_timeline_by_id($timeline_id)

            {
                $this->db->order_by('timeline_start_date ASC, timeline_id ASC');
                $this->db->where('timeline_id',$timeline_id);
                $query=$this->db->get('timeline');
                return $query->result();
            }

        public function insert_timeline()

        	{
        		$data['timeline_start_date']=$this->input->post('timeline_start_date');
        		$data['timeline_activity']=$this->input->post('timeline_activity');
        		$query=$this->db->insert('timeline',$data);
        		return $query;
        	}
        	
        public function delete_timeline($timeline_id)
        	{
        		$this->db->where('timeline_id', $timeline_id);
				$query=$this->db->delete('timeline');
        		return $query;
        	}

        public function update_timeline($timeline_id)

        	{
        		$timeline_start_date = $this->input->post('timeline_start_date');
        		$timeline_activity = $this->input->post('timeline_activity');
        		$this->db->set('timeline_start_date', $timeline_start_date);
        		$this->db->set('timeline_activity', $timeline_activity);
				$this->db->where('timeline_id', $timeline_id);
				$query=$this->db->update('timeline');
        		return $query;
        	}

        /*------ Email --------*/

        public function email_settings()

        {

            $query=$this->db->get('email');
            return $query->result();
        }
        public function email_update(){

            $email_id= $this->input->post('email_id');
            $email_name = $this->input->post('email_name');
            $email_email = $this->input->post('email_email');
            $email_password = $this->input->post('email_password');
            $this->db->set('email_password', $email_password);
            $this->db->set('email_name',$email_name);
            $this->db->set('email_email', $email_email);
            $this->db->where('email_id', $email_id);
            $query=$this->db->update('email');

            if($query)
            {
                $query2 = $this->db->get('email');
                return 1;
            }
            else
            {
                return 0;
            }


        }

	
        /*------ Admin_News_By_Rahul & Saif --------*/

        public function select_news()

            {
                $this->db->order_by('news_date_and_time DESC');
                $query=$this->db->get('news');
                return $query->result();
            }

        public function select_news_by_id($news_id)

            {
                $this->db->where('news_id',$news_id);
                $query=$this->db->get('news');
                return $query->result();
            }

        public function insert_news($target_file)

        	{

                $data['news_photo']=$target_file;

/*
        		$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
				$time = time();*/
        		//$data['news_date_and_time']= now($timezone=null);
        		$data['news_headline']=$this->input->post('news_headline');
        		$data['news_text']=$this->input->post('news_text');
        		$query=$this->db->insert('news',$data);
        		return $query;
        	}
        	
        public function delete_news($news_id)
        {

            $query=$this->db->get_where('news',array('news_id' => $news_id));
            if($query)
            {
                $result = $query->result();
                foreach ($result as $value) 
                {
                    if(file_exists( $value->news_photo))
                        {
                            unlink($value->news_photo);

                        }
                }
                
            }
            $this->db->where('news_id', $news_id);
            $delete = $this->db->delete('news');
            if ($this->db->affected_rows() > 0)
                 return 1;
            else
        		return $query;
        }

        public function update_news($target_file,$name,$news_id)
        	{
                $news_date_and_time = $this->input->post('news_date_and_time');
        		$news_headline = $this->input->post('news_headline');
        		$news_text = $this->input->post('news_text');
        		$this->db->set('news_headline', $news_headline);
                $this->db->set('news_date_and_time',$news_date_and_time);
        		$this->db->set('news_text', $news_text);
				$this->db->where('news_id', $news_id);
				$query=$this->db->update('news');

                $news_photo = $target_file;
                if($name!='')
                {
                    $query = $this->db->get_where('news',array('news_id'=>$news_id));
                    $photo_url = $query->result();
                    foreach ($photo_url as $value) 
                    {
                        if(file_exists($value->news_photo))
                        {
                            unlink($value->news_photo);
                        }
                    }
                    $attr2  = array(    
                    
                    'news_photo' => $news_photo,
                        
                    );
                    $this->db->where('news_id',$news_id);
                    $query = $this->db->update('news',$attr2);
                }
                if($query)
                {
                    $query2 = $this->db->get('news');
                    return $query2->result();
                }
                else
                {
                    return 0;
                }

                return $query;
        }

        /*------ Admin_Blog --------*/

        public function select_blog()

        {
            $this->db->order_by('blog_id DESC');
            $query=$this->db->get('blog');
            return $query->result();
        }

        public function latest_blog()

        {
            $this->db->order_by('blog_id DESC');
            $this->db->limit(1);
            $query=$this->db->get('blog');
            return $query->result();
        }


        public function select_blog_by_id($blog_id)

        {
            $this->db->where('blog_id',$blog_id);
            $query=$this->db->get('blog');
            return $query->result();
        }

        public function insert_blog()

        {



            /*
                            $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
                            $time = time();*/
            //$data['news_date_and_time']= now($timezone=null);
            $data['blog_headline']=$this->input->post('blog_headline');
            $data['blog_text']=$this->input->post('blog_text');
            $query=$this->db->insert('blog',$data);
            return $query;
        }

        public function delete_blog($blog_id)
        {


            $this->db->where('blog_id', $blog_id);
            $this->db->delete('blog');
            if ($this->db->affected_rows() > 0)
                return 1;
            else
                return 0;
        }

        public function update_blog($blog_id)
        {

            $blog_headline = $this->input->post('blog_headline');
            $blog_text = $this->input->post('blog_text');
            $this->db->set('blog_headline', $blog_headline);

            $this->db->set('blog_text', $blog_text);
            $this->db->where('blog_id', $blog_id);
            $query=$this->db->update('blog');


            if($query)
            {
                $query2 = $this->db->get('blog');
                return $query2->result();
            }
            else
            {
                return 0;
            }

            return $query;
        }




        /*------ Admin_publication_By_Rahul & Saif --------*/

        public function cat_insert()
        {
            $category_name = $this->input->post('category_name');
            $category_parent= $this->input->post('category_parent');

            $attr = array(
                'category_name' => $category_name,
                'category_parent' => $category_parent,

            );
            $query = $this->db->insert('category',$attr);
            if($query)
            {
                return 1;
            }
            else
            {
                return false;
            }

        }
        // ## Load Parent Category
        public function load_category()
        {
            $query = $this->db->get_where('category',array('category_parent'=>'0'));
            return $query->result();
        }
        public function load_subcategory($id)
        {
            $query = $this->db->get_where('category',array('category_parent'=>$id));
            return $query->result();
        }
        public function all_category()
        {
            $query = $this->db->get('category');
            return $query->result();
        }
        public function show_parent($parent_id)
        {
            $query = $this->db->get_where('category',array('category_id'=>$parent_id));
            return $query->result();
        }
        public function delete_cat($id)
        {
            $this->db->where('category_id', $id);
            $query = $this->db->delete('category');
            if ($this->db->affected_rows() > 0)
            {
                return 1;
            }
        }
        public function cat_update($id)
        {

            $category_name = $this->input->post('category_name');
            $category_parent= $this->input->post('category_parent');

            $attr = array(
                'category_name' => $category_name,
                'category_parent' => $category_parent,

            );
            $this->db->where('category_id',$id);
            $query = $this->db->update('category',$attr);
            if($query)
            {
                return 1;
            }
            else
            {
                return false;
            }
        }
         public function insert_publication($target_file)

                {
                        $time = $this->input->post('publication_date');
                        list($year, $month, $d) = explode('-', $time);
                        $data['publication_file']=$target_file;
                        $data['publication_author'] = implode(",",$_POST['publication_author']);
                        $data['publication_title']=$this->input->post('publication_title');
                        $data['publication_category_fkey']=$this->input->post('publication_category_fkey');
                        $data['publication_type']=$this->input->post('publication_type');
                        $data['publication_summary']=$this->input->post('publication_summary');
                        $data['publication_isbn_13']=$this->input->post('publication_isbn_13');
                        $data['publication_book_title']=$this->input->post('publication_book_title');
                        $data['publication_open_access']=$this->input->post('publication_open_access');
                        $data['publication_language']=$this->input->post('publication_language');
                        $data['publication_additional_information']=$this->input->post('publication_additional_information');
                        $data['publication_date']=  $time;
                        $data['publication_month'] = $month;
                        $data['publication_year'] = $year;
                        $query=$this->db->insert('publication',$data);
                        return $query;
                }
        public function select_publication()

        {
            $this->db->order_by('publication_id','DESC');
            $query=$this->db->get('publication');
            return $query->result();
        }
        public function select_publication_archieve($year,$month)

        {
            $this->db->order_by('publication_id','DESC');
            $this->db->where(array('publication_year'=>$year,'publication_month'=>$month));
            $query=$this->db->get('publication');
            return $query->result();
        }
        public function select_publication_category($id)

        {
            $this->db->order_by('publication_id','DESC');
            $this->db->where('publication_category_fkey',$id);
            $query=$this->db->get('publication');
            return $query->result();
        }

      /*  public function load_publication_page($per_page,$offset)
        {
            $page = ($offset-1)*$per_page;
            $this->db->order_by('publication_id','DESC');
            $this->db->limit($per_page,$page);
            $query =$this->db->get('publication');
            if($query)
            {
                return $query->result();
            }
        }*/

        public function select_publication_by_id($publication_id)

            {
                $this->db->where('publication_id',$publication_id);
                $query=$this->db->get('publication');
                return $query->result();
            }

          public function update_publication($target_file,$name,$publication_id)

                {
                    $time = $this->input->post('publication_date');
                    list($year, $month, $d) = explode('-', $time);
                        $publication_type = $this->input->post('publication_type');
                    if(!isset($_POST['publication_author'])){
                        $publication_author = $_POST['publication_author_old'];
                    }
                    else {
                        $publication_author = implode(",",$_POST['publication_author']);
                    }
                        $publication_title = $this->input->post('publication_title');
                        $publication_category_fkey = $this->input->post('publication_category_fkey');
                        $publication_book_title = $this->input->post('publication_book_title');
                        $publication_open_access = $this->input->post('publication_open_access');
                        $publication_summary = $this->input->post('publication_summary');
                        $publication_language = $this->input->post('publication_language');
                        $publication_isbn_13 = $this->input->post('publication_isbn_13');
                        $publication_additional_information = $this->input->post('publication_additional_information');
                        $publication_date=  $time;
                        $publication_month= $month;
                        $publication_year = $year;

                        $this->db->set('publication_author', $publication_author);
                        $this->db->set('publication_isbn_13', $publication_isbn_13);
                        $this->db->set('publication_type', $publication_type);
                        $this->db->set('publication_category_fkey', $publication_category_fkey);
                        $this->db->set('publication_title', $publication_title);
                        $this->db->set('publication_book_title', $publication_book_title);
                        $this->db->set('publication_open_access', $publication_open_access);
                        $this->db->set('publication_language', $publication_language);
                        $this->db->set('publication_additional_information', $publication_additional_information);
                        $this->db->set('publication_summary', $publication_summary);
                        $this->db->set('publication_date', $publication_date);
                        $this->db->set('publication_month', $publication_month);
                        $this->db->set('publication_year', $publication_year);

                        $this->db->where('publication_id', $publication_id);
                        $query=$this->db->update('publication');


                        $publication_file = $target_file;
                        if($name!='')
                        {
                            $query = $this->db->get_where('publication',array('publication_id'=>$publication_id));
                            $publication_url = $query->result();
                            foreach ($publication_url as $value) 
                            {
                                if(file_exists($value->publication_file))
                                {
                                    unlink($value->publication_file);
                                }
                            }
                            $attr2  = array(    
                            
                            'publication_file' => $publication_file,
                                
                            );
                            $this->db->where('publication_id',$publication_id);
                            $query = $this->db->update('publication',$attr2);
                        }
                        if($query)
                        {
                            $query2 = $this->db->get('publication');
                            return $query2->result();
                        }
                        else
                        {
                            return 0;
                        }

                        return $query;

                }


        public function delete_publication($publication_id)
                {
                    $query=$this->db->get_where('publication',array('publication_id' => $publication_id));
                        if($query)
                        {
                            $result = $query->result();
                            foreach ($result as $value) 
                            {
                                if(file_exists( $value->publication_file))
                                    {
                                        unlink($value->publication_file);

                                    }
                            }
                            
                        }
                        $this->db->where('publication_id', $publication_id);
                        $delete = $this->db->delete('publication');
                        if ($this->db->affected_rows() > 0)
                             return 1;
                        else
                            return $query;
                }


                  /*------ Admin_contact_By_Rahul --------*/

         public function insert_contact()

                {
                        $data['contact_general_inquiries']=$this->input->post('contact_general_inquiries');
                        $data['contact_website']=$this->input->post('contact_website');
                        $data['contact_getting_involved']=$this->input->post('contact_getting_involved');
                        $data['contact_write_to_us']=$this->input->post('contact_write_to_us');
                        $data['contact_email']=$this->input->post('contact_email');
                        $data['contact_cell']=$this->input->post('contact_cell');
                       


                        $query=$this->db->insert('contact',$data);
                        return $query;
                }

         public function select_contact()

                {
                        $this->db->order_by('contact_id');
                        $query=$this->db->get('contact');
                        return $query->result();
                }

          public function update_contact()

                {
                        $contact_id = $this->input->post('contact_id');
                        $contact_general_inquiries = $this->input->post('contact_general_inquiries');
                        $contact_website = $this->input->post('contact_website');
                        $contact_getting_involved = $this->input->post('contact_getting_involved');
                        $contact_write_to_us = $this->input->post('contact_write_to_us');
                        $contact_email = $this->input->post('contact_email');
                        $contact_cell = $this->input->post('contact_cell');


                        $this->db->set('contact_general_inquiries', $contact_general_inquiries);
                        $this->db->set('contact_website', $contact_website);
                        $this->db->set('contact_getting_involved', $contact_getting_involved);
                        $this->db->set('contact_write_to_us', $contact_write_to_us);
                        $this->db->set('contact_email', $contact_email);
                        $this->db->set('contact_cell', $contact_cell);
                                $this->db->where('contact_id', $contact_id);
                                $query=$this->db->update('contact');
                        return $query;
                }


        public function delete_contact()
                {
                        $contact_id = $this->input->post('contact_id');
                        $this->db->where('contact_id', $contact_id);
                                $query=$this->db->delete('contact');
                        return $query;
                }


                  /*------ Admin_event_By_Saif --------*/

         public function insert_event()

                {
                        $data['event_name']=$this->input->post('event_name');
                        $data['event_date']=$this->input->post('event_date');
                        $data['event_place']=$this->input->post('event_place');
                        $data['event_details']=$this->input->post('event_details');
                       


                        $query=$this->db->insert('event',$data);
                        return $query;
                }

         public function select_event()

                {
                        $this->db->order_by('event_date','ASC');
                        $query=$this->db->get('event');
                        return $query->result();
                }
         public function select_event_by_id($event_id)

                {
                        $this->db->order_by('event_date','ASC');
                        $this->db->where('event_id',$event_id);
                        $query=$this->db->get('event');
                        return $query->result();
                }

          public function update_event($event_id)

                {
                        $event_name = $this->input->post('event_name');
                        $event_date = $this->input->post('event_date');
                        $event_place = $this->input->post('event_place');
                        $event_details = $this->input->post('event_details');
                        $event_status = $this->input->post('event_status');
                        $event_expired = $this->input->post('event_expired');


                        $this->db->set('event_name', $event_name);
                        $this->db->set('event_date', $event_date);
                        $this->db->set('event_place', $event_place);
                        $this->db->set('event_details', $event_details);
                        $this->db->set('event_status', $event_status);

                                $this->db->where('event_id', $event_id);
                                $query=$this->db->update('event');
                        return $query;
                }


        public function delete_event($event_id)
                {
                        $this->db->where('event_id', $event_id);
                        $query=$this->db->delete('event');
                        
                        return $query;
                }


           public function insert_researcher($target_file)

                {   
                        $data['researcher_photo']=$target_file;
                        $data['researcher_bio'] = "Nothing to show";
                        $data['researcher_name']=$this->input->post('researcher_name');
                        $data['researcher_email']=$this->input->post('researcher_email');
                        $data['researcher_username']=$this->input->post('researcher_username');
                        $data['researcher_password']=md5($this->input->post('researcher_password'));
                        


                        $query=$this->db->insert('researcher',$data);
                        return $query;
                }

             public function select_researcher()

                {
                        $this->db->order_by('researcher_id','ASC');
                        $query=$this->db->get('researcher');
                        return $query->result();
                }

             public function select_original_name($researcher_id)

                {
                        $this->db->select('researcher_username');
                        $this->db->where('researcher_id',$researcher_id);
                        $query=$this->db->get('researcher');
                        return $query->result();
                }



     public function update_researcher_by_id($target_file,$name,$researcher_id)

                {
                        $researcher_username = $this->input->post('researcher_username');
                    if(!isset($_POST['researcher_fieldsite'])){
                        $researcher_fieldsite = $_POST['researcher_fieldsite_old'];
                    }
                    else{
                        $researcher_fieldsite = implode(",",$_POST['researcher_fieldsite']);
                    }

                        $researcher_name = $this->input->post('researcher_name');
                        $researcher_country = $this->input->post('researcher_country');
                        $researcher_email = $this->input->post('researcher_email');
                        $researcher_address = $this->input->post('researcher_address');
                        $researcher_join_date = $this->input->post('researcher_join_date');
                        $researcher_bio = $this->input->post('researcher_bio');
                        $researcher_about = $this->input->post('researcher_about');
                        $researcher_publications = $this->input->post('researcher_publications');
                        $researcher_projects = $this->input->post('researcher_projects');
                        $researcher_others = $this->input->post('researcher_others');
                        $researcher_phone = $this->input->post('researcher_phone');
                        $researcher_facebook_link = $this->input->post('researcher_facebook_link');
                        $researcher_linkedin_link = $this->input->post('researcher_linkedin_link');
                        $researcher_designation_post = $this->input->post('researcher_designation_post');

                        

                        $this->db->set('researcher_username', $researcher_username);
                    if(empty($researcher_fieldsite)== false){
                        $this->db->set('researcher_fieldsite', $researcher_fieldsite);
                    }

                        $this->db->set('researcher_name', $researcher_name);
                        $this->db->set('researcher_country', $researcher_country);
                        $this->db->set('researcher_email', $researcher_email);
                        $this->db->set('researcher_address', $researcher_address);
                        $this->db->set('researcher_join_date', $researcher_join_date);
                        $this->db->set('researcher_bio', $researcher_bio);
                        $this->db->set('researcher_about', $researcher_about);
                        $this->db->set('researcher_publications', $researcher_publications);
                        $this->db->set('researcher_others', $researcher_others);
                        $this->db->set('researcher_projects', $researcher_projects);
                        $this->db->set('researcher_phone', $researcher_phone);
                        $this->db->set('researcher_facebook_link', $researcher_facebook_link);
                        $this->db->set('researcher_linkedin_link', $researcher_linkedin_link);
                        $this->db->set('researcher_designation_post', $researcher_designation_post);

                        

                        $this->db->where('researcher_id', $researcher_id);
                        $query=$this->db->update('researcher');


                        $researcher_photo = $target_file;
                        if($name!='')
                        {
                            $query = $this->db->get_where('researcher',array('researcher_id'=>$researcher_id));
                            $researcher_url = $query->result();
                            foreach ($researcher_url as $value) 
                            {
                                if(file_exists($value->researcher_photo))
                                {
                                    unlink($value->researcher_photo);
                                }
                            }
                            $attr2  = array(    
                            
                            'researcher_photo' => $researcher_photo,
                                
                            );
                            $this->db->where('researcher_id',$researcher_id);
                            $query = $this->db->update('researcher',$attr2);
                        }
                        if($query)
                        {
                            $query2 = $this->db->get('researcher');
                            return $query2->result();
                        }
                        else
                        {
                            return 0;
                        }

                        return $query;

                }

             public function select_researcher_by_id($researcher_id)

                {
                        $this->db->where('researcher_id',$researcher_id);
                        $query=$this->db->get('researcher');
                        return $query->result();
                }

             public function update_researcher_adminship($data)
                {       
                        $researcher_id=$data['target_id'];
                        foreach ($data['select_researcher_by_id'] as $select) {
                                 $researcher_designation=(1-($select->researcher_designation));
                        }
                        $this->db->set('researcher_designation', $researcher_designation);
                        $this->db->where('researcher_id', $researcher_id);
                        $query=$this->db->update('researcher');
                        return $query;
                }

             public function delete_researcher($researcher_id)
                {
                        $query=$this->db->get_where('researcher',array('researcher_id' => $researcher_id));
                        if($query)
                        {
                            $result = $query->result();
                            foreach ($result as $value) 
                            {
                                if(file_exists( $value->researcher_photo))
                                    {
                                        unlink($value->researcher_photo);

                                    }
                            }
                            
                        }
                        $this->db->where('researcher_id', $researcher_id);
                        $delete = $this->db->delete('researcher');
                        if ($this->db->affected_rows() > 0)
                            return 1;
                        else
                            return $query;
                }
        public function password_edited($id,$enc_password,$enc_old_password)
        {

            $query = $this->db->get_where('researcher',array('researcher_id'=>$id,'researcher_password'=>$enc_old_password));
            if($query->num_rows()>0) {
                $attr = array(

                    'researcher_password' => $enc_password,

                );

                $this->db->where('researcher_id', $id);
                $query = $this->db->update('researcher', $attr);
               if($query)
                   return 1;
            }

        }
        // ## search
        public function search_result()
        {
           $search_value = $this->input->post('search_value');

            $this->db->select('*');
            $this->db->from('publication');
            $this->db->or_like(array('publication_title' => $search_value, 'publication_author' => $search_value));
            
            // Execute the query.
            $query = $this->db->get();

            // Return the results.
            if($query)
            {
                return $query->result_array();
            }
            else
            {
                return 0;
            }
        }
 /*********************Slideshow upload***************************/

   public function insert_slideshow($target_file)
    {
        $attr = array(
            'slideshow_photo' => $target_file
            );
        
        $insert = $this->db->insert('slideshow',$attr);
        if($insert)
        {
            return 1;
        }
        else
        {
            return false;
        }
    }
    public function select_slideshow()
    {
        $query =$this->db->get('slideshow');
        if($query)
        {
            return $query->result();
        }
    }
    public function delete_slideshow($id)
        {
            $query=$this->db->get_where('slideshow',array('slideshow_id' => $id,));
            if($query)
            {
                $result=$query->result();
                foreach ($result as $value) 
                {
                    if(file_exists($value->slideshow_photo))
                        {
                            unlink($value->slideshow_photo);

                        }
                }
                
            }
            $this->db->where('slideshow_id', $id);
            $delete = $this->db->delete('slideshow');
            if ($this->db->affected_rows() > 0)
            {
                 return 1;
            }
        }

    /******************************/


         public function select_logo()

                {
                        $query=$this->db->get('logo');
                        return $query->result();
                }

  /*         public function insert_logo($target_file)

                {   
                        $data['logo_link']=$target_file;
                        $query=$this->db->insert('logo',$data);
                        return $query;
                }
*/



          public function update_logo($target_file,$name)

                {
                        $logo_id = $this->input->post('logo_id');


                        $logo_link = $target_file;
                        if($name!='')
                        {
                            $query = $this->db->get_where('logo',array('logo_id'=>$logo_id));
                            $logo_url = $query->result();
                            foreach ($logo_url as $value) 
                            {
                                if(file_exists($value->logo_link))
                                {
                                    unlink($value->logo_link);
                                }
                            }
                            $attr2  = array(    
                            
                            'logo_link' => $logo_link,
                                
                            );
                            $this->db->where('logo_id',$logo_id);
                            $query = $this->db->update('logo',$attr2);
                        }
                        if($query)
                        {
                            $query2 = $this->db->get('logo');
                            return $query2->result();
                        }
                        else
                        {
                            return 0;
                        }

                        return $query;

                }

/*
        public function delete_logo($logo_id)
                {
                    $query=$this->db->get_where('logo',array('logo_id' => $logo_id));
                        if($query)
                        {
                            $result = $query->result();
                            foreach ($result as $value) 
                            {
                                if(file_exists( $value->logo_link))
                                    {
                                        unlink($value->logo_link);

                                    }
                            }
                            
                        }
                        $this->db->where('logo_id', $logo_id);
                        $delete = $this->db->delete('logo');
                        if ($this->db->affected_rows() > 0)
                             return 1;
                        else
                            return $query;
                }
*/


        /*-----------------------------------------*/

        public function select_link()

            {
                $query=$this->db->get('link');
                return $query->result();
            }
      


        public function update_link()

            {
                $link_id=1255;
                $link_facebook = $this->input->post('link_facebook');
                $link_twitter = $this->input->post('link_twitter');
                $link_google_plus = $this->input->post('link_google_plus');
                $link_linkedin = $this->input->post('link_linkedin');
                $this->db->set('link_facebook', $link_facebook);
                $this->db->set('link_twitter', $link_twitter);
                $this->db->set('link_google_plus', $link_google_plus);
                $this->db->set('link_linkedin', $link_linkedin);
                $this->db->where('link_id', $link_id);
                $query=$this->db->update('link');
                return $query;
            }



              /*------ Admin_News_By_Rahul & Saif --------*/

        public function select_funding()

            {
                $this->db->order_by('funding_sponsor_name DESC');
                $query=$this->db->get('funding');
                return $query->result();
            }

        public function select_funding_sponsor_by_id($funding_sponsor_id)

            {
                $this->db->where('funding_sponsor_id',$funding_sponsor_id);
                $query=$this->db->get('funding');
                return $query->result();
            }

        public function insert_funding_sponsor($target_file)

            {

                $data['funding_sponsor_logo']=$target_file;

/*
                $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
                $time = time();*/
                //$data['news_date_and_time']= now($timezone=null);
                $data['funding_sponsor_name']=$this->input->post('funding_sponsor_name');
                $data['funding_sponsor_contact']=$this->input->post('funding_sponsor_contact');
                $query=$this->db->insert('funding',$data);
                return $query;
            }
            
        public function delete_funding_sponsor($funding_sponsor_id)
        {

            $query=$this->db->get_where('funding',array('funding_sponsor_id' => $funding_sponsor_id));
            if($query)
            {
                $result = $query->result();
                foreach ($result as $value) 
                {
                    if(file_exists( $value->funding_sponsor_logo))
                        {
                            unlink($value->funding_sponsor_logo);

                        }
                }
                
            }
            $this->db->where('funding_sponsor_id', $funding_sponsor_id);
            $delete = $this->db->delete('funding');
            if ($this->db->affected_rows() > 0)
                 return 1;
            else
                return $query;
        }

        public function update_funding_sponsor($target_file,$name,$funding_sponsor_id)
            {
                $funding_sponsor_name = $this->input->post('funding_sponsor_name');
                $funding_sponsor_contact = $this->input->post('funding_sponsor_contact');
                $this->db->set('funding_sponsor_name', $funding_sponsor_name);
                $this->db->set('funding_sponsor_contact', $funding_sponsor_contact);
                $this->db->where('funding_sponsor_id', $funding_sponsor_id);
                $query=$this->db->update('funding');

                $funding_sponsor_logo = $target_file;
                if($name!='')
                {
                    $query = $this->db->get_where('funding',array('funding_sponsor_id'=>$funding_sponsor_id));
                    $photo_url = $query->result();
                    foreach ($photo_url as $value) 
                    {
                        if(file_exists($value->funding_sponsor_logo))
                        {
                            unlink($value->funding_sponsor_logo);
                        }
                    }
                    $attr2  = array(    
                    
                    'funding_sponsor_logo' => $funding_sponsor_logo,
                        
                    );
                    $this->db->where('funding_sponsor_id',$funding_sponsor_id);
                    $query = $this->db->update('funding',$attr2);
                }
                if($query)
                {
                    $query2 = $this->db->get('funding');
                    return $query2->result();
                }
                else
                {
                    return 0;
                }

                return $query;
        }




              /*------ Admin_Project by Saif --------*/



         public function insert_project()

                {
                        $data['project_title']=$this->input->post('project_title');
                        $data['project_member'] = implode(",",$_POST['project_member']);
                        $data['project_start_date']=$this->input->post('project_start_date');
                        $data['project_end_date']=$this->input->post('project_end_date');
                        $data['project_funding']=$this->input->post('project_funding');
                        $data['project_remarks']=$this->input->post('project_remarks');
                        $query=$this->db->insert('project',$data);
                        return $query;
                }

        public function select_project()

        {
            $this->db->order_by('project_id','DESC');
            $query=$this->db->get('project');
            return $query->result();
        }


        public function select_project_by_id($project_id)

            {
                $this->db->where('project_id',$project_id);
                $query=$this->db->get('project');
                return $query->result();
            }

          public function update_project($project_id)

                {
                     if(!isset($_POST['project_member'])){
                        $project_member = $_POST['project_old_member'];
                    }
                    else {
                        $project_member = implode(",",$_POST['project_member']);
                    }
                        $project_title=$this->input->post('project_title');
                        $project_start_date = $this->input->post('project_start_date');
                        $project_end_date = $this->input->post('project_end_date');
                        $project_funding=$this->input->post('project_funding');
                        $project_remarks=$this->input->post('project_remarks');

                        $this->db->set('project_title',$project_title);
                        $this->db->set('project_member',$project_member);
                        $this->db->set('project_start_date',$project_start_date);
                        $this->db->set('project_end_date',$project_end_date);
                        $this->db->set('project_funding',$project_funding);
                        $this->db->set('project_remarks',$project_remarks);
                        $this->db->where('project_id', $project_id);
                        $query=$this->db->update('project');
                        return $query;

                }


        public function delete_project($project_id)
                {

                        $this->db->where('project_id', $project_id);
                        $delete = $this->db->delete('project');
                        if ($this->db->affected_rows() > 0)
                             return 1;
                        else
                            return $query;
                }





	}
?>