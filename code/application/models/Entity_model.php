<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Entity Managment Model Class
 * 
 * 
 */

/*
 * Anant Prakash Singh
 * Code for Entity Model
 * Started : 14th March 2018
 */
class Entity_model extends CI_Model {
    
    /* get entity details */
    public function getEntityDetails($id = ''){
        
        $this->db->select('*');
        $this->db->from('tbl_entity');
        $this->db->join('db_master.tbl_masterdetails', 'tbl_masterdetails.id = tbl_entity.entitytypeid');
        //$this->db->where(array('tbl_user.username' => $username,'tbl_user.password' => $password, 'tbl_user.licensekey' =>$licensekey));
        
        $query = $this->db->get()->result_array();
        //print_r($query);exit;
        return $query;
        
    }
    
    
}