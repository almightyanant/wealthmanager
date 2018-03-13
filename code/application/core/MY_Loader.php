<?php

/*
 * Anant Prakash Singh
 * Code for Header and Footer views
 * Started : 10th March 2018
 */

class MY_Loader extends CI_Loader {
    
    public function template($template_name, $vars = array(), $return = FALSE){
        
        $view = redirectPages('Header',$_SESSION['licensekey'],$_SESSION['rolename']);
        
        if($return) {
            //
            
            $content  = $this->view($view, $vars, $return);
            $content .= $this->view($template_name,$vars,$return);
            $content .= $this->view('footer', $vars, $return);
            
            return $content;
            
        } else {
            $this->view($view, $vars);
            $this->view($template_name, $vars);
            $this->view('footer', $vars);
        }
    }
}
