<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller {

    public function index() {
        
        $pageData['title'] = 'login';
        
        $this->load->view('common/HTML_TOP',$pageData);
        $this->load->view('login');
        $this->load->view('common/HTML_BOTTOM');
    }
}
