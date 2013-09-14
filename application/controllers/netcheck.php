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
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $account_id = $session_data['id'];
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            $data['echo'] = $this->netcheck_model->scan($_SERVER['REMOTE_ADDR']);
            $this->load->view('dashboard/netcheck', $data);
        } else {
            redirect('home', 'refresh');
        }
    }
    public function deepscan(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $offset = $this->input->post('offset');
            $account_id = $session_data['id'];
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            $data['echo'] = '';
            $this->netcheck_model->deepScan($_SERVER['REMOTE_ADDR'], $offset * 10);
            $this->load->view('dashboard/netcheck', $data);
        } else {
            redirect('home', 'refresh');
        }
    }
    public function targetedScan(){
        $remoteIP = ($this->input->post('ip') != FALSE)?$this->input->post('ip'):$_SERVER['REMOTE_ADDR'];  
        $data['clientIP'] = $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
        $data['echo'] = $this->netcheck_model->scan($remoteIP);
        $this->load->view('dashboard/netcheck', $data);
        
    }
    public function targetedDeepScan(){
        $offset = $this->input->post('offset');
        $remoteIP = ($this->input->post('ip') != FALSE)?$this->input->post('ip'):$_SERVER['REMOTE_ADDR'];        
        $data['clientIP'] = $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
        $data['echo'] = '';
        $this->netcheck_model->deepScan($remoteIP, $offset * 10);
        $this->load->view('dashboard/netcheck', $data);
    }
}
?>
