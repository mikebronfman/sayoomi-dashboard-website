<?php

class Netcheck extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('netcheck_model');
    }
    
    public function index(){
        $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
    }
    
    public function scan(){
        $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
        $data['echo'] = $this->netcheck_model->scan($_SERVER['REMOTE_ADDR']);
        $this->load->view('dashboard/netcheck', $data);
    }
}
?>
