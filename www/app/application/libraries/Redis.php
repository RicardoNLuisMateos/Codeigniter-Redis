<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/third_party/predis/src/Autoloader.php';	

class Redis 
{
	        
	public function config()
	{
	Predis\Autoloader::register();

	$client = new Predis\Client([
            'scheme' => 'tcp',
            'host'   => '192.168.8.12',
            'port'   => 6379 // redis default port
        ]);

        return $client;
	}
}