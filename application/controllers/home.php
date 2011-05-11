<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        if (!$this->session->userdata('userID')) {
            redirect('/login');
        } else {
            $config = array('userID' => 1);
            $this->load->library('acl', $config);
            $acl_test = $this->uri->segment(1) . '_';
            $acl_test .= ($this->uri->segment(2) != "") ? $this->uri->segment(2) : 'view';

            if (!$this->acl->hasPermission($acl_test)) {
                show_error('You need permission ' . $acl_test . ' to do this.', 500,
                    'Insuficient permissions');
            }
        }
    }
}
