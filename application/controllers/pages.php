 <?php

class Pages extends CI_Controller {
    
    public function view($page = 'home')
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }
        
        if (!file_exists('application/views/pages/'.$page.'.tpl'))
        {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['hide_logo'] = true;
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header.tpl', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer.tpl', $data);
        
    }
}
?>
