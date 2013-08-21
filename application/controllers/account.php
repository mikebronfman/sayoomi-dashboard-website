<?php

class Account Extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('account_model', '', TRUE);
    }
    
    
    public function index(){
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard', 'refresh');
            
        }
            $this->load->helper(array('form'));        
            $data['title'] = "SayOomi -- Sign in";
            $this->load->view('templates/header.tpl', $data);
            $this->load->view('account/login.tpl');
            $this->load->view('templates/footer.tpl');
       
    }
    
    public function check_database($password)
    {
        $username = $this->input->post('username');
        
        $result = $this->account_model->login($username, $password);
        
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return FALSE;
        }
    }
    
    public function login(){
    
    }
    
    public function check_login(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "SayOomi -- Sign in";
            $this->load->view('templates/header.tpl', $data);
            $this->load->view('account/login.tpl');
            $this->load->view('templates/footer.tpl');
        } else {
            redirect('dashboard', 'refresh');
        }
        
    }
    
}
?>
