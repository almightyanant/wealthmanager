<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * User Managment Model Class
 * 
 * 
 */

/*
 * Anant Prakash Singh
 * Code for User Model
 * Started : 02nd March 2018
 */
class User_model extends CI_Model {
    
    /* check if user exists */
    public function checkUserExists($username,$password,$licensekey){
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('licensekey', $licensekey);
        $this->db->from('tbl_user');
        return $this->db->count_all_results();
    }
    
    /* get user details */
    public function getUserDetails($username,$password,$licensekey){
        $sqlquery = $this->db->get_where('tbl_user', array('username' => $username,'password' => $password, 'licensekey' =>$licensekey))->result_array();
        
        return $sqlquery;
    }

}