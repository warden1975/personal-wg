<?php

if (!defined('BASEPATH'))
    die();

class Frontpage extends Main_Controller {
    
    public function index() {
        $data = array('ap_title' => 'Airpush Audit Form');
        
        $this->load->view('include/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('include/footer');
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
