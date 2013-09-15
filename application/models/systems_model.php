<?php

class Systems_Model extends CI_Model{
    
    public function __construct() {
        $this->load->database();
        set_time_limit(0);
        }

    public function remove($system, $account){
        $qry = "DELETE FROM `systems` WHERE `systems`.`account_id` LIKE ? AND `systems`.`system_id` LIKE ?";
            $query = $this->db->query($qry, array($account, $system));
    }
    
    public function add($type, $ip, $hw, $description, $account_id){
        $qry = "INSERT INTO `systems`(`system_id`,`system_type`,`ip`,`hw`,`description`,`account_id`) VALUES ( NULL,'?','?','?','?','?')";
        $query = $this->db->query($qry, array($type, $ip, $hw, $description, $account_id));
    }
}

?>
