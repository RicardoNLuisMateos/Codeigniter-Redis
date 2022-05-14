<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Base.php';

class Test extends REST_Base {

    public function __construct() {
        parent::__construct();

        $this->load->model('redis_model');
    }
    
    public function index_get()
    {
        $data = [ 
            "uno" => 'number one',
            "two" => 'number two',
            "thrre" => 'number therr',
            "TEST" => 'Ricardo N,Luis Mateos'
        ];

        $this->respose($data);
    }

    public function set_post()
    {
        $key = $this->input->post('key');
        $value = $this->input->post('value');

        $saved = $this->redis_model->send($key, $value);

        $this->respose($saved);
    }

    public function get_get()
    {
        $key = $this->input->get('key');

        $saved = $this->redis_model->get($key);

        $this->respose($saved);
    }
}