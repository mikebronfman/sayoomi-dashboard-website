<?php

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
    }
    
    public function index()
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $account_id = $session_data['id'];

            $data['title'] = 'Oomi Dashboard';
            $activity['activity'] = $this->dashboard_model->get_activity_for_account();
            $overview['overview'] = $this->dashboard_model->get_overview_for_account();
            $systems['systems'] = $this->dashboard_model->get_systems_for_account($account_id);
            $users['users'] = $this->dashboard_model->get_users_for_account($account_id);
            $devices['devices'] = $this->dashboard_model->get_devices_for_account($users['users']);
            $history['history'] = $this->dashboard_model->get_history_for_account($users['users']);


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
		if(!file_exists('application/views/dashboard/'.$page.'.tpl'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/'.$page, $data);
		$this->load->view('dashboard/footer', $data);
		
	}
}
?>