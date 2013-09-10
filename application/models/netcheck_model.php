<?php

class Netcheck_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
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

    public function scan($ip) {
        //ARP Fetch
        $ret = $this->getcontent($ip, 3030, "/", "POST", $this->encode_array(array( "o" => "1")));
        return $ret;
    }

    public function deepScan($ip) {
        //Net Ping + ARP Fetch
        $ret = $this->getcontent($ip, 3030, "/", "POST", $this->encode_array(array( "o" => "2")));
        return $ret;
    }

}

?>
