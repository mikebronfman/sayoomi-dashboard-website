<?php

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
        $wsparams = array(  'host' => '127.0.0.1', 'port' => '6060');
        $this->load->library('WebSocketClient', $wsparams);
    }
    
    public function index()
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $account_id = $session_data['id'];
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            $data['title'] = 'Oomi Dashboard';
            $activity['activity'] = $this->dashboard_model->get_activity_for_account();
            $overview['overview'] = $this->dashboard_model->get_overview_for_account();
            $systems['systems'] = $this->dashboard_model->get_systems_for_account($account_id);
            $users['users'] = $this->dashboard_model->get_users_for_account($account_id);
            $devices['devices'] = $this->dashboard_model->get_devices_for_account($users['users']);
            $history['history'] = $this->dashboard_model->get_history_for_account($users['users']);
            
            
            $WSresp = $this->websocketclient->sendData(json_encode(array('request' => 'isOnline', 'ip' => $_SERVER['REMOTE_ADDR'], 'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
            $data['isOnline'] = json_decode($WSresp, true);

            $this->load->view('dashboard/header', $data);
            $data['activity'] = $this->load->view('dashboard/modules/activity', $activity, true);
            $data['overview'] = $this->load->view('dashboard/modules/device_overview', $overview, true);
            $data['systems'] = $this->load->view('dashboard/modules/systems', $systems, true);
            $data['users'] = $this->load->view('dashboard/modules/users', $users, true);
            $data['devices'] = $this->load->view('dashboard/modules/devices', $devices, true);
            $data['history'] = $this->load->view('dashboard/modules/history', $history, true);
            $data['devicemanager'] = $this->load->view('dashboard/modules/device_manager', '', true);
            $this->load->view('dashboard/home', $data);
            $this->load->view('dashboard/footer', $data);
        } else {
            redirect('home', 'refresh');
        }
    }
    
    
	
	public function view($page = 'home')
	{
        if ($this->session->userdata('logged_in')) {
            $WSresp = $this->websocketclient->sendData(json_encode(array('request' => 'isOnline', 'ip' => $_SERVER['REMOTE_ADDR'], 'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
            $data['isOnline'] = json_decode($WSresp, true);
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $account_id = $session_data['id'];
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            if (!file_exists('application/views/dashboard/' . $page . '.tpl')) {
                show_404();
            }

            $data['title'] = ucfirst($page);
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/' . $page, $data);
            $this->load->view('dashboard/footer', $data);
        } else {
            redirect('home', 'refresh');
        }
	}
        
        public function devicemanager(){
            if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            
            $account_id = $session_data['id'];
            $data['system_types'] = $this->dashboard_model->get_system_types();
            $data['systems'] = $this->dashboard_model->get_systems_for_account($account_id);
            
            $data['clientIP'] = $_SERVER['REMOTE_ADDR'];
            $data['title'] = "Device Management";
            
            $WSresp = $this->websocketclient->sendData(json_encode(array('ident'=>'IAMSERVER', 'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
            $data['wsresp'] = json_decode($WSresp, true);
            $WSresp = $this->websocketclient->sendData(json_encode(array('request' => 'isOnline', 'ip' => $_SERVER['REMOTE_ADDR'], 'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
            $data['isOnline'] = json_decode($WSresp, true);
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/devicemanager', $data);
            $this->load->view('dashboard/footer', $data);
            } else {
            redirect('home', 'refresh');
            }
        }
}
?>