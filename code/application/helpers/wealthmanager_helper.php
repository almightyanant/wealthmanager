<?php

/*
 * Anant Prakash Singh
 * Helper file for wealthmanager
 * Started : 13th March 2018
 */

function getLicensetye($licensekey){
    
    $ci =& get_instance();
    $masterdb = $ci->load->database('masterdb', TRUE);
    $masterdb->select('type');
    $sqlquery = $masterdb->get_where('tbl_licensedetails', array('key' => $licensekey))->result_array();
    
    return $sqlquery[0]['type'];
    
}

//wealth manager view 
function screenViewWealthManager($screen){
    switch ($screen){
                    
        case 'Header':
            $showview = 'header';
            break;
    }
    
    return $showview;
}

//data entry view 
function screenViewDataEntry($screen){
    switch ($screen){
                    
        case 'Header':
            $showview = 'header-dataentry';
            break;
    }
    
    return $showview;
}

function screenViewApprover($screen){
    switch ($screen){
                    
        case 'Header':
            $showview = 'header-approver';
            break;
    }
    
    return $showview;
}

function redirectPages($screen,$licensekey,$rolename){
    
    //License type : SINGLEVIEW, SINGLEVIEWDATAENTRY, SINGLEVIEWDATAENTRYWITHAPPROVAL
    //Role Type : WEALTHMANAGER, DATAENTRY, APPROVER
    
    $licensetype = getLicensetye($licensekey);
    
    
    switch ($rolename){
        
        case 'WEALTHMANAGER':
            
            switch($licensetype){
            
                case 'SINGLEVIEWDATAENTRYWITHAPPROVAL':
                case 'SINGLEVIEW':
                case 'SINGLEVIEWDATAENTRY':
                    $view = screenViewWealthManager($screen);
                    break;
            
            }
            
            break;
        
        case 'DATAENTRY':
            
            switch ($licensetype){
                case 'SINGLEVIEWDATAENTRYWITHAPPROVAL':
                case 'SINGLEVIEWDATAENTRY':
                    $view = screenViewDataEntry($screen);
                    break;
                
                case 'SINGLEVIEW':
                    show_404();
                    break;
            }
            
            break;
        
        case 'APPROVER':
            
            switch ($licensetype){
                case 'SINGLEVIEWDATAENTRYWITHAPPROVAL':                
                    $view = screenViewApprover($screen);
                    break;
                
                case 'SINGLEVIEW':
                case 'SINGLEVIEWDATAENTRY':
                    show_404();
                    break;
            }
            
            break;
                
    }
    
    return $view;
    
    
}
