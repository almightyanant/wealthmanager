<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Anant Prakash Singh
 * Code for Entity Controller
 * Started : 14th March 2018
 */


class Entity extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('entity_model');
    }

    /* get entity list screen */
    public function entity_list()
    {
        //$listofentity = $this->mdl_common->getItemsfromTable('tbl_entity');
        $listofentity = $this->entity_model->getEntityDetails();
        
        $this->load->template('entity/listview',['breadcrumb'=>'List Entity',"entitylist"=> $listofentity]);
        
    }    
    
    /* entity add screen */
    public function entity_add_screen($flag = '',$data = ''){
        
        $getEntitytypes = $this->mdl_common->getMasterDetails(MASTER_KEY_ENTITYTYPE);
        
        $this->load->template('entity/entityaddscreen',['breadcrumb'=>'Add Entity','entitytypes'=>$getEntitytypes,'flag'=>$flag,'data'=>$data]);
    }
    
    /* entity save */
    public function entity_add(){
        $form_data = $this->input->post(); 
        //echo $form_data['entityname'];exit;
        $save_flag = $this->mdl_common->saveTableEntries($form_data,'tbl_entity');
        
        //echo $save_flag;exit; 
        $this->entity_add_screen($save_flag,$form_data['entityname']);
    }
    
}