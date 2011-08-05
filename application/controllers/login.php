<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller {
           
    public function index() {
        $pageData['title'] = 'login';
        $this->load->view('common/HTML_TOP');
        $this->load->view('login');
        $this->load->view('common/HTML_BOTTOM');
    }
    
    public function auth(){
        
        $this->output->enable_profiler();
        
        if($this->userauth->loginUser($this->input->post('username', TRUE),$this->input->post('password', TRUE))){
            redirect('/');
        } else {
            $this->load->view('common/HTML_TOP');
            $this->load->view('login');
            $this->load->view('common/HTML_BOTTOM');
        }
    }
}
