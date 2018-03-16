<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Common Model Class
 * 
 * 
 */

/*
 * Anant Prakash Singh
 * Code for Common Model
 * Started : 17th March 2018
 */
class Mdl_common extends CI_Model {
    
    /* get list of all entities */
    public function getItemsfromTable($tablename){
        $query = $this->db->get($tablename)->result_array();
        
        return $query;
    }
    
   
}