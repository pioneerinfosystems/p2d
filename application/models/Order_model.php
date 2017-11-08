<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Order_model extends CI_model {
    function __construct() {
        parent::__construct();
        ini_set("post_max_size","40M");
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

    function get_services_info($service_id){
        $result_data = array();
        $this->db->select('a.service_id,a.homepage_price,a.innerpage_price,a.turnaround_time,b.service_name,b.payment_type');
        $this->db->join('tbl_pth_services as b','b.id = a.service_id');
        $this->db->where('a.service_id', $service_id);
        $this->db->where('a.active', 1);
        $result = $this->db->get("tbl_pth_service_price as a")->result_array();
        if($result) {
            foreach ($result as $key => $value) {
                $result_data['service_id']      =  $value['service_id'];
                $result_data['homepage_price']  =  $value['homepage_price'];
                $result_data['innerpage_price'] =  $value['innerpage_price'];
                $result_data['turnaround_time'] =  $value['turnaround_time'];
                $result_data['service_name']    =  $value['service_name'];
                $result_data['payment_type']    =  $value['payment_type'];
                }
        }
        return $result_data;
    }

    function place_order($order_data) {
        $response_data = [];   
        if(empty($order_data['input_data'])) {
            $response_data['status'] = 0;
            $response_data['message'] = "please enter data.";
            return $response_data;            
        }else{
            $error = false;
            if($order_data['input_data']['customerName']=="") {
                $error = true;
                $response_data['status'] = 0;
                $response_data['message']['customerName'] = "Please enter your name.";
            }
            if($order_data['input_data']['eMail']=="" || !filter_var($order_data['input_data']['eMail'], FILTER_VALIDATE_EMAIL)) {
                $error = true;
                $response_data['status'] = 0;
                $response_data['message']['eMail'] = "Please enter your valid Email ID.";
            }
            if($order_data['input_data']['service']=="0") {
                $error = true;
                $response_data['status'] = 0;
                $response_data['message']['service'] = "Please select service.";
            }
            if($error){
                return $response_data;
            }
            $insert_values = $order_data["input_data"];
            $file_values   = $order_data["file_data"];
            $filename_new  = '';
            $filename_new1 = '';
            if (!empty($file_values)) {                
                $uploads_dir   = APPPATH . '../public/upload/temp';
                if(!empty($file_values['row_files'])){
                    $filename      = $file_values['row_files']['name'];
                    $extestion     = explode(".",$filename);
                    $filename_new = $extestion[0]."_".date('m-d-Y_H:i:s').".".$extestion[1];
                    $tmp_name     = $_FILES["row_files"]["tmp_name"];
                    move_uploaded_file($tmp_name, "$uploads_dir/$filename_new");
                    
                }
                if(!empty($file_values['row_files1'])){                    
                    $filename1     = $file_values['row_files1']['name'];
                    $extestion1    = explode(".",$filename1);
                    $filename_new1 = $extestion1[0]."_".date('m-d-Y_H:i:s').".".$extestion1[1];
                    $tmp_name1     = $_FILES["row_files1"]["tmp_name"];
                    move_uploaded_file($tmp_name1, "$uploads_dir/$filename_new1");
                }
                /*$ext_type    = array('gif','jpg','jpe','jpeg','png',"zip");
                if (in_array($extestion[1], $ext_type)) {
                } else {

                }*/
            }           

            $insert_data["cust_name"]                = $insert_values["customerName"];
            $insert_data["cust_email"]               = $insert_values["eMail"];
            $insert_data["project_title"]            = $insert_values["projecTitle"];
            $insert_data["no_of_pages"]              = $insert_values["noOfPages"];
            $insert_data["image_file1"]              = $filename_new;
            $insert_data["image_file2"]              = $filename_new1;
            $insert_data["image_url"]                = $insert_values["pathToFile"];
            $insert_data["calculated_price"]         = $insert_values["order_total"];
            $insert_data["descount_percent_applied"] = $insert_values["order_total"];
            $insert_data["service_id"]               = $insert_values["service"];
            $insert_data["created_date"]             = date("Y-m-d H:i:s");
            $insert_data["created_ip"]               = $this->input->ip_address();
            $insert_data["created_agent"]            = $_SERVER['HTTP_USER_AGENT'];
            $insert_data["active"]                   = 0;

            $this->db->insert('tbl_pth_order',$insert_data);
            $id = $this->db->insert_id();

            if($id){
                $response_data['status']       = 1;
                $response_data['message']      = "order place successfully.";
                $response_data['field_values'] = $insert_data;
            } else {
                $response_data['status']       = 0;
                $response_data['message']      = "some thing went wrong while placing order.";
            }            
            
            return $response_data;
        }   
    }
}   
