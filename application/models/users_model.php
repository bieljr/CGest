<?php

class Users_model extends CI_Model {
    
    public function getUsers(){
        $query = $this->db->get('users');
        return $query->result();        
    }
        
    public function editUser($id){}
    public function addUser(){}
    public function deleteUser(){}
    
}

?>