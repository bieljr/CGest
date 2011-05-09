<?php

class Error extends CI_Controller {
    public function index($message,$code){
        $data['message'];        
        $this->load->view('common/error',$data);
    }
}

?>