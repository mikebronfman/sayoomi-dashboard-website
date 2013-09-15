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
    
}

?>
