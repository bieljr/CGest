<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserAuth {
    
    var $userID; //Integer : Stores the ID of the current user
    var $loggedId;
    var $CI;
    
    function __construct() {
        
        $this->CI =& get_instance();
		log_message('debug', "User Authentication library initialized.");
    }
    
    function loginUser($login,$password){
        if(!empty($login) || !empty($password)){            
            
            // determine if email or username where used to login
            $user = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            
            $this->CI->db->select('*');
            $this->CI->db->where($user,$login);
            $this->CI->db->where('password',$password);
            $query = $this->CI->db->get('users');
            
            if($query->num_rows()>0){
                $this->CI->sess_create();
                return true;
            } else {
                return false;
            }
        }           
    }
    
    function logoutUser($userId){
        
    }
    
    function registerUser($userId){
        
    }    
    
    function isLoggedIn($userId){
        
    }

    
}

?>