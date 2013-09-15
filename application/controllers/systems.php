<?php

class Systems extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('systems_model');
    }
    
    public function remove(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $account_id = $session_data['id'];
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            $system = $this->input->post("systemID");
            $this->systems_model->remove($system, $account_id);
        } else {
            redirect('home', 'refresh');
        }
    }
}
?>
