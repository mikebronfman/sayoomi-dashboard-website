<?php

class Command extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('command_model');
    }
    
    public function index()
    {
        
    }
    
    public function parse()
    {
        
    }
    
    public function sendRawCommand(){
        $ip = $this->input->post("ip");
        $url = $this->input->post("url");
        $method = $this->input->post("method");
        $params = $this->input->post("params");
        $data['response'] = $this->command_model->sendCommand($ip, $url, $method, $params);
        $this->load->view('command/command', $data);
        
    }
}
?>
