<?php namespace Parsidev\Sms;

use Illuminate\Support\Facades\Config;
use SoapClient;


class Sms {
    
    
    	protected $confg;
        protected $client;
    
    public function __construct($config, $client) {
        $this->confg = $config;
        $this->client = $client;
    }
    
    public function send($to, $text, $isFlash=FALSE){
        $param = $this->confg;
        
        !is_array($to) ? $to = array($to) : false;
        
        $isFlash ? $param['isflash']=TRUE : $param['isflash']=FALSE;
        
        $param['to'] = $to;
        $param['text'] = iconv('UTF-8', 'UTF-8//TRANSLIT', $text);
        
        return $this->client->SendSms($param)->SendSmsResult;
    }
    
    
    public function getCredit(){
        return ($this->client->GetCredit($this->confg)->GetCreditResult);
    }
}
