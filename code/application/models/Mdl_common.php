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
    
    /* save in audit log */
    public function saveAuditLog($type,$rowid,$tblname){
        $auditsaveflag = GLOBAL_FLAG_TRUE;
        $allmasterdb = $this->load->database('masterdb', TRUE);
        $data = array();
        switch($type){
            case AUDITLOG_INSERT:
                $data = array(
                        'tablename' => $tblname,
                        'rowid' => $rowid,
                        'created' => GLOBAL_FLAG_TRUE,
                        'createdby' => $_SESSION['nameofuser']
                );
                
                $result = $allmasterdb->insert('tbl_auditlog', $data);
                if (!$result) {
                    $auditsaveflag = GLOBAL_FLAG_FALSE;
                }
                break;
            
            case AUDITLOG_UPDATE:
                $data = array(
                        'tablename' => $tblname,
                        'rowid' => $rowid,
                        'updated' => GLOBAL_FLAG_TRUE,
                        'updatedby' => $_SESSION['nameofuser']
                );

                $result = $allmasterdb->insert('tbl_auditlog', $data);
                if (!$result) {
                    $auditsaveflag = GLOBAL_FLAG_FALSE;
                }
                break;
        }
        
        return $auditsaveflag;
    }


    /* get list of all entities */
    public function getItemsfromTable($tablename){
        $query = $this->db->get($tablename)->result_array();
        
        return $query;
    }
    
    /*get items for table belongs to master */
    public function getMasterDetails($type){
                
        $masterdb = $this->load->database('mysqlmasterdb', TRUE);
        $masterdb->select('id');
        $masterdb->select('childvaluename');
        $sqlquery = $masterdb->get_where('tbl_masterdetails', array('parentkeyname' => $type))->result_array();
        
        return $sqlquery;
    }
    
    /* save entries in table */
    public function saveTableEntries($arrdata,$tblname){
        $flag = GLOBAL_FLAG_TRUE;
        $result = $this->db->insert($tblname, $arrdata);
        //print_r($result);exit;
        if ($result != '1') {
        // error in qurery execution
            $flag = GLOBAL_FLAG_FALSE;
        } else {
            $insert_id = $this->db->insert_id();
            $auditflag = $this->saveAuditLog(AUDITLOG_INSERT,$insert_id,$tblname);  
            
            if($auditflag == GLOBAL_FLAG_FALSE){
                $flag = GLOBAL_FLAG_FALSE;
            }            
        }
        
        return $flag;
        
    }
   
}