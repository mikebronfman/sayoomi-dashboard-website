<?php

class Account_Model Extends CI_Model{
    
    public function __construct() 
    {
       $this->load->database();
    }
    
    function login($username, $password){
        $this->db->select('id, username, password');
        $this->db->from('account');
        $this->db->where('username', $username);
        $this->db->where('password', SHA1($username.':'.$password));
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>
