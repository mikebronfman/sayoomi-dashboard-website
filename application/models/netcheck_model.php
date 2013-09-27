<?php

class Netcheck_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
        $wsparams = array(  'host' => '127.0.0.1', 'port' => '6060');
        $this->load->library('WebSocketClient', $wsparams);
        set_time_limit(0);
        }
        
    private function encode_array($args)
        {
        if(!is_array($args)) return false;
        $c = 0;
        $out = '';
        foreach($args as $name => $value)
        {
        if($c++!= 0) $out .= '&';
        $out .= urlencode("$name").'=';
        if(is_array($value))
        {
        $out .= urlencode(serialize($value));
        } else {
            $out .= urlencode("$value");
        }
        }
        return $out . "\n";
    }

    private function getcontent($server, $port, $file, $method, $args) {
        $cont = "";
        $ip = gethostbyname($server);
        $fp = fsockopen($ip, $port); //Need to trap this somehow.
        if (!$fp) {
            return "Unknown";
        } else {
            $com = "$method $file HTTP/1.1\r\n";
            $com .= "Accept: */*\r\n";
            $com .= "Accept-Language: de-ch\r\n";
            $com .= "Accept-Encoding: gzip, deflate\r\n";
            $com .= "User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)\r\n";
            $com .= "Host: $server:$port\r\n";
            $com .= "Connection: Keep-Alive\r\n";
            $com .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $com .= "Content-Length: " . strlen($args) . "\r\n\r\n";
            $com .= $args;

            fputs($fp, $com);
            while (!feof($fp)) {
                $cont .= fread($fp, 500);
            }
            fclose($fp);
            $cont = substr($cont, strpos($cont, "\r\n\r\n") + 4);
            return $cont;
        }
    }
    private function process($ret) {
        $mac_table = '';
        $mac_table_data = array();
        //print_r($lines);
        foreach (json_decode($ret, true) as $ip => $mac) {
            if(strpos($mac, '00:17:88') !== FALSE)
            $mac_table .= "Phillips Hue ==> ";
            if (strpos($mac, 'ec:1a:59') !== FALSE)
                $mac_table .= "Belkin WeMo ==> ";
            if (strpos($mac, '18:b4:30') !== FALSE)
                $mac_table .= "Nest Thermostat ==> ";
            $mac_table .= $ip . ' ' . $mac. "\n<br />";
            array_push($mac_table_data, array('ip' => $ip, 'MAC' => $mac));
        }
        return array('text' => $mac_table, 'data' => $mac_table_data);
    }
    private function processOne($ret, $hw) {
        $mac_table = '';
        $mac_table_data = array();
        print_r(json_decode($ret, true));
        foreach (json_decode($ret, true) as $ip => $mac) {
            if (strpos($mac, $hw) !== FALSE)
                array_push($mac_table_data, array('ip' => $ip, 'MAC' => $mac));
        }
        return array('text' => $mac_table, 'data' => $mac_table_data);
    }
    public function scan($ip) {
        //ARP Fetch
        //$ret = $this->getcontent($ip, 3030, "/", "POST", $this->encode_array(array( "o" => "1")));
        $ret = $this->websocketclient->sendData(json_encode(array('request' => 'sendOperation',
                                                                'ip'    => $ip,
                                                                'o' => '2',
                                                                's' => '0', //Not needed except to comply with protocol.
                                                                'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
        $tmp[] = json_decode($ret, true);
        if(isset($tmp[0]['response'])){
            if($tmp[0]['response'] == 'BAD'){
                //BAD Request
            }
            elseif($tmp[0]['response'] == 'OFFLINE'){
                //UNO OFFLINE
            }
            else{
                $mac_table = $this->process($tmp[0]['response']);
                return $mac_table['text'];
            }
        }
        return false;
    }
    public function scanOne($ip, $hw) {
        //ARP Fetch
        $ret = $this->websocketclient->sendData(json_encode(array('request' => 'sendOperation',
                                                                'ip'    => $ip,
                                                                'o' => '2',
                                                                's' => '0', //Not needed except to comply with protocol.
                                                                'secret' => 'C8aBCeiDmAY5GPzigONY2fiwoGHbyt77YuFICHsE6PF82TTHcXnDAxm6qr3CiPJ')));
        $tmp[] = json_decode($ret, true);
        if(isset($tmp[0]['response'])){
            if($tmp[0]['response'] == 'BAD'){
                //BAD Request
            }
            elseif($tmp[0]['response'] == 'OFFLINE'){
                //UNO OFFLINE
            }
            else{
                $mac_table = $this->processOne($tmp[0]['response'],$hw);
                return $mac_table['text'];
            }
        }
        return false;
    }

}

?>
