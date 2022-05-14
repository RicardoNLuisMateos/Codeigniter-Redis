<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class REST_Base extends REST_Controller {

     public function __construct() {
        parent::__construct();
    } 

     /** 
      * Generic response message
     *  @author Ricardo N,Luis Mateos
     *  @return JSON
     */
    public function respose($data, $code = 200) {

        $response = array(
            "status" => TRUE,
            "data" => $data
        );
        $this->response($response, $code);   
    }

    /** 
      * Generic response message
     *  @author 
     *  @return JSON
     */
    public function error($error_message, $code = 500) {

        $response = array(
            "status" => TRUE,
            "data" => array(
                "error_message" => $error_message
            )
        );
        $this->response($response, $code);   
    }

    //metodo get by controllers
    /* public function get($parametro, $is_null = NULL, $is_required = NULL){
        //$red_social = (empty($_POST['red_social'])) ? '' : $_POST['red_social'];
        //$description = (empty($_GET['description'])) ? '' : $_GET['description'];

        //validate if is null  
        if(!$is_null == TRUE){
            exit("the paramter ${$parametro} no puede ser NULL");
        }

        //validate if if required
        if(empty($is_required)){
            exit("the paramter ${$parametro} is required");
 w       }


        if(empty($parametro)){
            $x = $_GET["${$parametro}"];
        

        return $x;
    } */
}