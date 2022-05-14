<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Redis_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->library('redis');
    }
    
    public function send($key, $value){
        $redis = $this->redis->config();
        
        if(empty($key) && empty($value)){
            return "Key and Value required";
        }

        $redis->set($key, $value);
        
        $saved = [
            'key' => $key,
            'value' => $redis->get($key)
        ];
        
        return $saved;
    }
    
    public function get($key)
    {
        $redis = $this->redis->config();
        
        if(empty($key)){
            return "Key required";
        }
        
        $saved = [
            'key' => $key,
            'value' => $redis->get($key)
        ];

        return $saved;
    }
}