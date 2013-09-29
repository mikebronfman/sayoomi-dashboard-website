<?php

class Command_Model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $wsparams = array(  'host' => '127.0.0.1', 'port' => '6060');
        $this->load->library('WebSocketClient', $wsparams);
    }
    
    public function sendCommand($ip, $url, $method, $params){
        $ret = $this->websocketclient->sendData(json_encode(array('request' => 'sendCommand',
                                                                'ip'    => $ip,
                                                                'url' => $url,
                                                                'method' => $method, 
                                                                'params' => $params,
                                                                'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
        $tmp[] = json_decode($ret, true);
        
        return $tmp['response'];
    }
}
?>
