<?php

class Banks extends CI_Controller
{

    public function index()
    {
        if (!$this->session->userdata('userID')) {

            $config = array('userID' => 1);
            $this->load->library('acl', $config);
            $acl_test = $this->uri->segment(1) . '_';
            $acl_test .= ($this->uri->segment(2) != "") ? $this->uri->segment(2) : 'view';

            if (!$this->acl->hasPermission($acl_test)) {
                show_error('You need permission ' . $acl_test . ' to do this.', 500,
                    'Insuficient permissions');
            }

        } else {
            redirect('/login');
        }
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