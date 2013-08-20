<?php
class Dashboard_Model extends CI_Model{
    
    public function __construct() 
    {
       $this->load->database();
    }
        
    public function get_activity_for_account($account_id = NULL)
    {
//        if (!$account_id === FALSE) {
//            $qry = "SELECT * FROM `users` WHERE `account_id` LIKE ?";
//            $query = $this->db->query($qry, array($account_id));
//            return $query->result_array();
//        }
    }
    
    public function get_devices_for_account($users = FALSE)
    {
        if (!$users === FALSE) {
            $usersCount = count($users);
            $i=0;
            $userids = '';
            foreach($users as $user)
            {
                $userids .= $user['id'];
                if(!(++$i === $usersCount))
                {
                    $userids .= ', ';
                }
            }
            $qry = "SELECT * FROM `devices` WHERE `user_id` IN ($userids)";
            $query = $this->db->query($qry);
            return $query->result_array();
        }
    }
    
    public function get_systems_for_account($account_id = FALSE)
    {
        if (!$account_id === FALSE) {
            $qry = "SELECT * FROM `systems` WHERE `account_id` LIKE ?";
            $query = $this->db->query($qry, array($account_id));
            return $query->result_array();
        }
    }
    
    public function get_users_for_account($account_id = FALSE)
    {
        if (!$account_id === FALSE) {
            $qry = "SELECT * FROM `users` WHERE `account_id` LIKE ?";
            $query = $this->db->query($qry, array($account_id));
            return $query->result_array();
        }   
    }
    
    public function get_overview_for_account($account_id = NULL)
    {
//        if (!$account_id === FALSE) {
//            $qry = "SELECT * FROM `users` WHERE `account_id` LIKE ?";
//            $query = $this->db->query($qry, array($account_id));
//            return $query->result_array();
//        }
    }
    
    public function get_history_for_account($account_id = NULL)
    {
//        if (!$account_id === FALSE) {
//            $qry = "SELECT * FROM `users` WHERE `account_id` LIKE ?";
//            $query = $this->db->query($qry, array($account_id));
//            return $query->result_array();
//        }
    }
}
?>
