<?php

class Home extends Controller {

   function Home()
   {
      parent::Controller();
      $this->output->enable_profiler(TRUE);	
   }

   function index()
   {
      $this->load->view('home');
   }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */