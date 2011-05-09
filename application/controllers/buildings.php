<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buildings extends CI_Controller {

	public function index()
	{
	   /*if(!$this->session->userdata('uid')){
	       redirect('login');
	   } else {
		$this->load->view('home');
       }*/
       
       $this->load->view('buildings/list');
	}
    
    public function edit(){
       $this->load->view('buildings/edit'); 
    }
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */