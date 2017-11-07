<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function index()
	{
		$this->load->model("order_model");
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['service_needed'] = $this->order_model->get_services();
		$this->load->view('commonfiles/header');
		$this->load->view('order_now',$data);
		$this->load->view('commonfiles/footer');
	}

	public function checkout()
	{
		$this->load->model("order_model");
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['service_needed'] = $this->order_model->get_services();
		$this->load->view('commonfiles/header');
		$this->load->view('checkout',$data);
		$this->load->view('commonfiles/footer');
	}

	public function checkout1 ()
	{
		$this->load->model("order_model");
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['service_needed'] = $this->order_model->get_services();
		$this->load->view('commonfiles/header');
		$this->load->view('checkout',$data);
		$this->load->view('commonfiles/footer');
	}

	

}
