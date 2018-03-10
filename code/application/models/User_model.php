<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * User Managment Model Class
 * 
 * 
 */

/*
 * Anant Prakash Singh
 * Code for User Controller
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


    /* Save bets option */
    public function saveBetsOptions($betsid,$optionid)
    {
        $this->db->set('iscorrect', '1', FALSE);
        $this->db->where('id', $optionid);
        $this->db->where('betsid', $betsid);
        $this->db->update('betsoption');
        
        return true;
    }
    
    /* Mark bets as done */
    public function updateBets($betsid)
    {
        $this->db->set('isdone', '1', FALSE);
        $this->db->where('id', $betsid);
        $this->db->update('bets');
        
        return true;
    }

    /* Get bets from database */
    public function getAllBets($betsid)
    {
        $sqlquery = $this->db->get_where('bets', array('id' => $betsid))->result_array();
        
        return $sqlquery;
    }
    
    /* Get bets options from database */
    public function getBetsOption($betsid)
    {
        $sqlquery = $this->db->get_where('betsoption', array('betsid' => $betsid))->result_array();
        
        return $sqlquery;
    }
    
    /* Get bets from database */
    public function getBets($isdone)
    {
        $this->db->select('bets.id,summary,points,enddate,option');
        $this->db->from('bets');
        $this->db->join('betsoption', 'bets.id = betsoption.betsid');
        $this->db->where('bets.isdone = ', $isdone);
        $this->db->order_by("datetime(enddate)", "asc");
        $sqlquery = $this->db->get()->result_array();
        
        $betsArray = array();

        foreach($sqlquery as $data) {
                if(isset($betsArray[$data['id']])) {
                    array_push($betsArray[$data['id']]['option'], $data['option']);
                } else {
                    $betsArray[$data['id']] = array_merge(array(), $data);
                    $betsArray[$data['id']]['option'] = array();
                    array_push($betsArray[$data['id']]['option'], $data['option']);
                }
        }
        
        return $betsArray;
        //print_r($betsArray);exit;
    }
}
