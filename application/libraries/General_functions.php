<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class General_functions {

    public $CI;

    function __construct() {
        $this->CI = &get_instance();
    }

    public function send_mail($to,$subject,$message) {
        //echo $message; exit;
        $mail = new PHPMailer();
        $mail->IsSMTP(); // send via SMTP
        $mail->Host = "mail.psd2html4u.com";
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "info@psd2html4u.com"; // SMTP username
        $mail->Password = "deo123nath"; // SMTP password
        $mail->Port = 25;
        $mail->FromName = "Psd2Html4u Enquiry";
        $mail->From = 'info@psd2html4u.com';
        $email = $to; // Recipients email ID
        $mail->AddAddress($email);
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        $mail->Body = $message; //HTML Body
        $mail->AltBody = "This is the body when user views in plain text format"; //Text Body
        if(is_array($_FILES)) {
        if(isset($_FILES['uploadfile1']['name'])) {
            $mail->AddAttachment($_FILES['uploadfile1']['tmp_name'],$_FILES['uploadfile1']['name']);
        }
         if(isset($_FILES['uploadfile2']['name'])) {
            $mail->AddAttachment($_FILES['uploadfile2']['tmp_name'],$_FILES['uploadfile2']['name']); 
        }
        }
        if ($mail->Send()) {
           return true;
        } else {
          return false;
        }
    }

    function get_service_details($service_id)
    {
        $servieDetails = array();
        $CI = &get_instance();
        $CI->db->select('homepage_price, innerpage_price,turnaround_time');
        $CI->db->where('active', 1);
        $CI->db->where('service_id',$service_id);
        $servieDetails = $CI->db->get('tbl_pth_service_price');
        if($servieDetails->num_rows() > 0)
        {
            $servieDetails       = $servieDetails->row_array();
            return $servieDetails;
        }
        return $servieDetails;
    }
	
	    
}

?>