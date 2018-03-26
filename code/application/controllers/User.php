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
                    'rolename'  => $userdetails[0]['childvaluename'],
                    'roleid'  => $userdetails[0]['roleid'],
                    'licensekey' => $form_data['licensekey']
                    #'interests' => array('tennis', 'travelling')
            );
            $this->session->set_userdata($arraydata);
            #print_r($this->session->userdata()['nameofuser']);
            #$this->load->view('user/dashboard');
            
            // Redirecting screen on basis of license and user role
            //$view = redirectPages('Dashboard',$form_data['licensekey'],$userdetails[0]['rolename']);
            
            $this->load->template('user/dashboard',['breadcrumb'=>'Dashboard']);
            
            
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
    
    /* user list screen */
    public function user_list(){
        $listofuser = $this->user_model->getUserDetails();
        
        $this->load->template('user/listview',['breadcrumb'=>'List Users',"userlist"=> $listofuser]);
    }
    
    /* user add screen */
    public function user_add_screen($flag = '',$data = ''){
        $getUserRole = $this->mdl_common->getMasterDetails(MASTER_KEY_USERROLE);
        
        $this->load->template('user/useraddscreen',['breadcrumb'=>'Add User','userrole'=>$getUserRole,'flag'=>$flag,'data'=>$data]);
    }
    
    /* add user */
    public function user_add(){
        $form_data = $this->input->post(); 
        //echo $form_data['entityname'];exit;
        $save_flag = $this->mdl_common->saveTableEntries($form_data,'tbl_user');
        
        //echo $save_flag;exit; 
        $this->user_add_screen($save_flag,$form_data['name']);
    }
}
