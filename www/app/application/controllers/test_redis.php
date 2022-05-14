<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Test_redis extends CI_Controller {
	
		public function index()
		{
			$this->load->library('redis');

			// create redis object
			$redis = $this->redis->config();
			$redis->set('TEST_Redis_RICARDO_3','RICARDO N,LUIS MATEOS');
			echo "\n*****************************\n";
			echo "REDIS GET\n";
			echo $redis->get('TEST_Redis_RICARDO_3');
			echo "\n*****************************\n";
			echo $redis->get('text');
		}
	
	}
	
	