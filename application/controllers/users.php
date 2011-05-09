<?php

class Users extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        //$this->output->enable_profiler(TRUE);
    }
    
    public function index() {
        $data['user_list'] = $this->Users_model->getUsers();
        $this->load->view('common/HTML_TOP');   
        $this->load->view('users/list',$data);
        $this->load->view('common/JAVASCRIPT');
        $this->load->view('common/HTML_BOTTOM');
    }
    
    public function edit($id) {
                            
        if(!is_numeric($id)){
            $data['error_message'] = 'O formato do parâmetro é inválido.';
            $this->load->view('common/error',$data);
            return false;
        }
        
        $this->load->view('common/HTML_TOP');                        
        $this->load->view('users/edit',$data);
        $this->load->view('common/HTML_BOTTOM');
    }
    
    public function add() {
        $this->load->view('users/add');
    }
    
    public function delete($id) {
        $data['user_id'] = $id;
        $this->load->view('users/delete');
    }
    
}

?>