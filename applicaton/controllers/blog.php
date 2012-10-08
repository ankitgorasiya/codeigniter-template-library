<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
         //set content
        $this->template->set_content('blog/addpost', $data);

        $this->template->render(); 
    }

    public function addPost()
    {
        $data=array();
        //load theme
        $this->template->set_theme('foundation');
        $this->template->set_layout('template');

        //set regions
        $this->template->set_region('sidebar_nav', 'region/sidebar_nav', array(), TRUE, TRUE);
        $this->template->set_region('top_nav', 'region/top_nav', array(), TRUE, TRUE);
        $this->template->set_region('notices', 'region/notices', array(), TRUE, TRUE);
        
       //set content
        $this->template->set_content('blog/addpost', $data);

        $this->template->render(); 
       
    }

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */