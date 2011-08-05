<?php

class Banks extends CI_Controller
{
    
    var $pageData;
    
     public function __construct() {
        parent::__construct();
        $this->pageData['title'] = 'Bancos';
        $this->output->enable_profiler();
    }

    public function index() {

            
        $query = $this->db->get('banks');
        $result = $query->result_array();
        
        $this->pageData['dbData'] = $result;
        
        $this->load->view('common/HTML_TOP',$this->pageData);
        $this->load->view('banks/list',$this->pageData);
        $this->load->view('common/JAVASCRIPT');
        $this->load->view('common/HTML_BOTTOM');

    }

    public function edit()
    {
        // Get the user's ID and add it to the config array
        $config = array('userID' => 1);

        // Load the ACL library and pas it the config array
        $this->load->library('acl', $config);

        // Get the perm key
        // I'm using the URI to keep this pretty simple ( http://www.example.com/test/this ) would be 'test_this'
        $acl_test = $this->uri->segment(1) . '_';
        $acl_test .= ($this->uri->segment(2) != "") ? $this->uri->segment(2) : 'view';

        // If the user does not have permission either in 'user_perms' or 'role_perms' redirect to login, or restricted, etc
        if (!$this->acl->hasPermission($acl_test)) {
            show_error('You need permission ' . $acl_test . ' to do this.', 500,
                'Insuficient permissions');
        }
    }

    public function add()
    {
        // Get the user's ID and add it to the config array
        $config = array('userID' => 1);

        // Load the ACL library and pas it the config array
        $this->load->library('acl', $config);

        // Get the perm key
        // I'm using the URI to keep this pretty simple ( http://www.example.com/test/this ) would be 'test_this'
        $acl_test = $this->uri->segment(1) . '_';
        $acl_test .= ($this->uri->segment(2) != "") ? $this->uri->segment(2) : 'view';

        // If the user does not have permission either in 'user_perms' or 'role_perms' redirect to login, or restricted, etc
        if (!$this->acl->hasPermission($acl_test)) {
            show_error('You need permission ' . $acl_test . ' to do this.', 500,
                'Insuficient permissions');
        }
    }

    public function delete()
    {
        // Get the user's ID and add it to the config array
        $config = array('userID' => 1);

        // Load the ACL library and pas it the config array
        $this->load->library('acl', $config);

        // Get the perm key
        // I'm using the URI to keep this pretty simple ( http://www.example.com/test/this ) would be 'test_this'
        $acl_test = $this->uri->segment(1) . '_';
        $acl_test .= ($this->uri->segment(2) != "") ? $this->uri->segment(2) : 'view';

        // If the user does not have permission either in 'user_perms' or 'role_perms' redirect to login, or restricted, etc
        if (!$this->acl->hasPermission($acl_test)) {
            show_error('You need permission ' . $acl_test . ' to do this.', 500,
                'Insuficient permissions');
        }
    }

}

?>