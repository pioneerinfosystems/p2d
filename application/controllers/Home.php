<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->library(array('General_functions'));
	}

	public function index()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['home_slider'] = $this->load->view('commonfiles/home_slider','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('home',$data);
		$this->load->view('commonfiles/footer');
	}

	public function about()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('about',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_html()
	{
		$data['service_details'] = $this->general_functions->get_service_details(1);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_html',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_html5()
	{
		$data['service_details'] = $this->general_functions->get_service_details(2);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_html5',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_wordpress()
	{
		$data['service_details'] = $this->general_functions->get_service_details(3);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_wordpress',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_responsive_wordpress()
	{
		$data['service_details'] = $this->general_functions->get_service_details(4);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_responsive_wordpress',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_megento()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_megento',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_email()
	{
		$data['service_details'] = $this->general_functions->get_service_details(5);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_email',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_responsive_email()
	{
		$data['service_details'] = $this->general_functions->get_service_details(6);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_responsive_email',$data);
		$this->load->view('commonfiles/footer');
	}

	public function psd_to_responsive()
	{
		$data['service_details'] = $this->general_functions->get_service_details(7);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/psd_to_responsive',$data);
		$this->load->view('commonfiles/footer');
	}

	public function html_to_responsive()
	{
		$data['service_details'] = $this->general_functions->get_service_details(8);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/html_to_responsive',$data);
		$this->load->view('commonfiles/footer');
	}

	public function html_to_wordpress()
	{
		$data['service_details'] = $this->general_functions->get_service_details(9);
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/html_to_wordpress',$data);
		$this->load->view('commonfiles/footer');
	}

	public function hire_php_programmer()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/hire_php_programmer',$data);
		$this->load->view('commonfiles/footer');
	}

	public function custom_php_development()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$data['right_sidebar'] = $this->load->view('commonfiles/right_sidebar','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('services/custom_php_development',$data);
		$this->load->view('commonfiles/footer');
	}

	public function portfolio()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('portfolio',$data);
		$this->load->view('commonfiles/footer');
	}

	public function blog()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('blog',$data);
		$this->load->view('commonfiles/footer');
	}

	public function faq()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('faq',$data);
		$this->load->view('commonfiles/footer');
	}

	public function testimonial()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('testimonial',$data);
		$this->load->view('commonfiles/footer');
	}

	public function contact_us()
	{
		
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('contact_us',$data);
		$this->load->view('commonfiles/footer');
	}

	public function thank_you()
	{
		
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('thank_you',$data);
		$this->load->view('commonfiles/footer');
	}

	public function submit_contact_form() {
		$this->load->library(array('Form_validation', 'PHPMailer'));
		$customername = $this->input->post('customername');
		$email = $this->input->post('email');
		$service = $this->input->post('service');
		$country = $this->input->post('country');
		$messContact = $this->input->post('messContact');
		$pathtofile = $this->input->post('pathtofile');
		if($pathtofile=="") { $pathtofile="N/A"; }
		$REGARDS = ' From Team';
		$subject = 'Psd2Html4u Enquiry';
		$to = "mayur.bhangale88@gmail.com";
		$message = '<table>';
		$message .= '<tr><td>';
		$message .= 'Name: ' . $customername;
		$message .= '</td></tr>'; 
		$message .= '<tr><td>';
		$message .= 'Email : ' . $email;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= 'Service : ' . $service;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= 'country : ' . $country;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= 'Path to File : ' . $pathtofile;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= '<tr><td>';
		$message .= 'Message : ' . $messContact;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= 'Regards,';
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= $REGARDS;
		$message .= '</td></tr>';
		$message .= '</table>';
		$body = $message;
		$this->load->helper(array('form','captcha'));
		$mail_sent_status = $this->general_functions->send_mail($to,$subject,$body);
		if($mail_sent_status){
			echo "1";
		}else{
			echo "0";
		}

	}

	public function submit_contact_form1() {
		$this->load->library(array('Form_validation', 'PHPMailer'));
		$customername = $this->input->post('customername');
		$email = $this->input->post('email');
		
		$messContact = $this->input->post('messContact');
		$REGARDS = ' From Team';
		$subject = 'Psd2Html4u Enquiry';
		$to = "mayur.bhangale88@gmail.com";
		$message = '<table>';
		$message .= '<tr><td>';
		$message .= 'Name: ' . $customername;
		$message .= '</td></tr>'; 
		$message .= '<tr><td>';
		$message .= 'Email : ' . $email;
		$message .= '</td></tr>';
		
		$message .= '<tr><td>';
		$message .= 'Message : ' . $messContact;
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= 'Regards,';
		$message .= '</td></tr>';
		$message .= '<tr><td>';
		$message .= $REGARDS;
		$message .= '</td></tr>';
		$message .= '</table>';
		$body = $message;
		$this->load->helper(array('form','captcha'));
		$mail_sent_status = $this->general_functions->send_mail($to,$subject,$body);
		if($mail_sent_status){
			echo "1";
		}else{
			echo "0";
		}

	}

	public function refund_policy()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('refund_policy',$data);
		$this->load->view('commonfiles/footer');
	}

	public function privacy_policy()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('privacy_policy',$data);
		$this->load->view('commonfiles/footer');
	}

	public function terms_and_conditions()
	{
		$data['top_menu'] = $this->load->view('commonfiles/top_menu','', TRUE);
		$this->load->view('commonfiles/header');
		$this->load->view('terms_and_conditions',$data);
		$this->load->view('commonfiles/footer');
	}

}
