<?php

/*
 * Anant Prakash Singh
 * Helper file for wealthmanager
 * Started : 13th March 2018
 */

function getLicensetye($licensekey){
    
    $ci =& get_instance();
    //$this->ci->load->database();
    // connect to secondary database
    //echo $licensekey;exit;
    $masterdb = $ci->load->database('masterdb', TRUE);
    $masterdb->select('type');
    $sqlquery = $masterdb->get_where('tbl_licensedetails', array('key' => $licensekey))->result_array();
    
    return $sqlquery[0]['type'];
    
}

function screenViewWealthManager($screen){
    switch ($screen){
                    
        case 'Dashboard':
            $showview = 'user/dashboard';
            break;
    }
    
    return $showview;
}

function redirectPages($screen,$licensekey,$rolename){
    
    //SINGLEVIEWDATAENTRYWITHAPPROVAL
    //ABCDEF1167
    //$this->load->template('user/dashboard',['dataset'=>$userdetails[0]['name']]);
    
    $licensetype = getLicensetye($licensekey);
    
    switch ($licensetype){
        
        // for license system haing single view + data entry + approval
        case 'SINGLEVIEWDATAENTRYWITHAPPROVAL':
            
            switch ($rolename){
                
                //wealth manager view 
                case 'WEALTHMANAGER':
                    
                    $view = screenViewWealthManager($screen);
                    
                    break;
                
            
            }
            
            break;
    }
    
    return $view;
    
    
}
