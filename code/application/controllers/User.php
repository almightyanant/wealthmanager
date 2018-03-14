<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Anant Prakash Singh
 * Code for User Controller
 * Started : 01st March 2018
 */


class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index($page = 'login')
    {
        if ( ! file_exists(APPPATH.'views/user/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $this->load->view('user/login');
    }
    
    /* use login */
    public function user_login()
    {
        $form_data = $this->input->post(); 
        
        
        $ifuserexists = $this->user_model->checkUserExists($form_data['username'],$form_data['password'],$form_data['licensekey']);
        
        if($ifuserexists == '1'){
            //User Exists
            //Get User Details
            $userdetails = $this->user_model->getUserDetails($form_data['username'],$form_data['password'],$form_data['licensekey']);
            
            // Set session in DB
            // Show Dashboard
            
            // set array of items in session
            $arraydata = array(
                    'nameofuser'  => $userdetails[0]['name'],
                    'userid'  => $userdetails[0]['id'],
                    'rolename'  => $userdetails[0]['rolename'],
                    'roleid'  => $userdetails[0]['roleid'],
                    'licensekey' => $form_data['licensekey']
                    #'interests' => array('tennis', 'travelling')
            );
            $this->session->set_userdata($arraydata);
            #print_r($this->session->userdata()['nameofuser']);
            #$this->load->view('user/dashboard');
            
            // Redirecting screen on basis of license and user role
            //$view = redirectPages('Dashboard',$form_data['licensekey'],$userdetails[0]['rolename']);
            
            $this->load->template('user/dashboard',['username'=>$userdetails[0]['name']]);
            
            
        } else {
            // User doesn't exists
            // Show error message, tell him to contact Wealth Manager Team
            $arrofdata['data'] = array("message"=>LOGIN_ERROR);
            $this->load->view('user/login',$arrofdata);
            
        }
        
    }
    
    /* user logout */
    public function user_logout(){
        $this->session->sess_destroy();
        $this->load->view('user/login');
    }
}
