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
        $this->load->template('entity/listview',['breadcrumb'=>'Entity']);
        
    }    
    
}