<?php namespace Parsidev\Sms;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Config;
use SoapClient;

>>>>>>> origin/master
class Sms {
    
    
    	protected $confg;
        protected $client;
    
    public function __construct($config, $client) {
<<<<<<< HEAD
        $this->confg = $config;
        $this->client = $client;
=======
        /*if(!self::$singleton){
            $instance = new self();
            $instance->config = config('sms');
            self::$singleton = $instance;
        }
        return self::$singleton;*/
        $this->confg = $config;
        $this->client = $client;
        
>>>>>>> origin/master
    }
    
    public function send($to, $text, $isFlash=FALSE){
        $param = self::$singleton->config;
        
        !is_array($to) ? $to = array($to) : false;
        
        $isFlash ? $param['isflash']=TRUE : $param['isflash']=FALSE;
        
        $param['to'] = $to;
        $param['text'] = iconv('UTF-8', 'UTF-8//TRANSLIT', $text);
        
        return $this->client->SendSms($param)->SendSmsResult;
    }
    
    
    public function getCredit(){
<<<<<<< HEAD
        return ($this->client->GetCredit($this->confg)->GetCreditResult);
=======
        dd($this->confg);
        $client = new SoapClient(self::$singleton->config['webserviceUrl']);
        
        return ($client->GetCredit(self::$singleton->config)->GetCreditResult);
>>>>>>> origin/master
        
    }
}
