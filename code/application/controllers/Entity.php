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

    /* use login */
    public function entity_list()
    {
        $listofentity = $this->mdl_common->getItemsfromTable('tbl_entity');
        
        $this->load->template('entity/listview',['breadcrumb'=>'Entity',"entitylist"=> $listofentity]);
        
    }    
    
}