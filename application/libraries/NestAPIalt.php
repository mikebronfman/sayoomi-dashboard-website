<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class NestAPI{
    
    private $nestSession = Array();
    private $defaultNestUserAgent = 'Nest/3.0.15 (iOS) os=6.0 platform=iPad3,1';
    
    private $fanModes = Array(
        'auto' => 'auto',
        'on' => 'on'
    );
    
    private $temperatureTypes = Array(
      'cool' => 'cool',
      'heat' => 'heat',
      'range' => 'range'
    );  
}
?>
