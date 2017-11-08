<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("order_model");
        $this->load->library(array('General_functions'));
    }
	
	public function index()
	{
		$this->load->model("order_model");
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['service_needed'] = $this->order_model->get_services();
		$this->load->view('commonfiles/header');
		$this->load->view('order_now',$data);
		$this->load->view('commonfiles/footer');
	}


	public function get_services_info() {
		$service_id    = $this->input->post('service_id');
		$response_data = $this->order_model->get_services_info($service_id);
		echo json_encode($response_data); exit;
	}

	public function checkout() {
		ini_set('display_errors', 1);
		$order_data['input_data'] = $this->input->post();
		$order_data['file_data'] = $_FILES;
		$response_data = $this->order_model->place_order($order_data);
		if($response_data['status']==1){
			$data['top_menu']        = $this->load->view('commonfiles/top_menu','', TRUE);
			$data['service_needed']  = $this->order_model->get_services();
			$data['message']         = $response_data['message'];
			$data['field_values']    = $response_data['field_values'];		

			$this->load->view('commonfiles/header');
			$this->load->view('checkout',$data);
			$this->load->view('commonfiles/footer');
		} else {
			
			redirect(base_url()."order-now");
	
		}		
		
	}

}
