<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Order_model extends CI_model {
    function __construct() {
        parent::__construct();
    }

    function get_services(){
        $result_data = array();
        $this->db->select('id,service_name');
        $this->db->where('payment_type', 1);
        $this->db->where('active', 1);
        $result = $this->db->get("tbl_pth_services")->result_array();
        if($result)
        {
          $result_data = $result;   
        }
        return $result_data;
    }
}   
