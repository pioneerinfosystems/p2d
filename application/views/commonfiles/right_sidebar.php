<div id="text-4" class="widget widget_text">
	<h4 class="widget-title">Contact Us</h4>	
	<div class="textwidget side_contact_frm">
		<form name="contactform" id="contactform" method="POST" action="">
			<div class="form-group">
				<label for="customername">Your name</label>
				<input type="text" class="form-control" id="customername" placeholder="First and last name">
			</div>

			<div class="form-group">
				<label for="email">Your Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Email ID">
			</div>

			<div class="form-group">
				<label for="messContact">Message</label>
				<textarea class="message" name="messContact" id="messContact"></textarea>
			</div>
			<button type="button" id="submit" name="btnsubmit" class="btn btn-default side_contact_frm_btn">Send Your Message</button>
			<span id="loaderimg" style="display:none"><img alt="" src="content/img/loading.gif"></span>
			<span id="errormsg" style="display:show;color:red;"></span>	
            <span id="successmsg" style="display:none;color:green;"></span>
		</form>
	</div>
</div>
<div id="categories-3" class="widget widget_categories">
	<h4 class="widget-title">Our Services</h4>	
	<ul class="sub-menu">
		<li><a href="psd-to-html-conversion-service">PSD to HTML</a></li>
		<li><a href="psd-to-html5-conversion-service">PSD to HTML5</a></li>
		<li><a href="psd-to-wordpress-conversion-service">PSD to WordPress</a></li>
		<li><a href="psd-to-responsive-wordpress-conversion-service">PSD to Responsive WordPress</a></li>
		<!-- <li><a href="psd-to-megento-conversion-service">PSD to Magento</a></li> -->
		<li><a href="psd-to-email-conversion-service">PSD to Email</a></li>
		<li><a href="psd-to-responsive-email-conversion-service">PSD to Responsive Email</a></li>
		<li><a href="psd-to-responsive-conversion-service">PSD to Responsive</a></li>
		<li><a href="html-to-responsive-conversion-service">HTML to Responsive</a></li>
		<li><a href="html-to-wordpress-conversion-service">HTML to WordPress</a></li>
		<li><a href="hire-a-php-programmer">Hire a PHP Programmer</a></li>
		<li><a href="custom-php-development">Custom PHP Development</a></li>


	</ul>
</div>

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"> </script>
<script type="text/javascript">
$(document).ready(function() {
$('#submit').on('click',function() {

var formData = new FormData();
formData.append("customername", $("#customername").val());
formData.append("email", $("#email").val());
formData.append("messContact", $("#messContact").val());

var error = 0;
$("#customername").css('border', '1px solid #dbdbdb');
$("#email").css('border', '1px solid #dbdbdb');
$("#messContact").css('border', '1px solid #dbdbdb');
	 			  if ($.trim($("#customername").val()) == "") {
									$("#customername").css('border', '1px solid red');						
									error = 1;
								 }
								 var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;    
								  if ($.trim($("#email").val()) == "" || !emailPattern.test($("#email").val())) {
									$("#email").css('border', '1px solid red');						
									error = 1;
								 }

								   if ($("#messContact").val() == "") {
									$("#messContact").css('border', '1px solid red');						
									error = 1;
								 }
						   if (error == 1) {
                        $('#errormsg').text("Please fill all mandatory fields").show();
							
							$('#errormsg').fadeIn('5000', function() {
								$('#errormsg').fadeOut(10000);
							});
                        return false;
                    }

                    if (error == 0) {
                        $("#loaderimg").show();
                        $("#submit").prop('disabled', true);
                        $.ajax({
							url: '<?php echo base_url(); ?>home/submit_contact_form1',
							type: 'post',
							mimeType: "multipart/form-data",
							contentType: false,
							cache: false,
							processData: false,
							data: formData,
                            success: function (data) {
                                if (data == 1) {
                                $("#loaderimg").hide();
                                   $('#successmsg').text("Thank's we will contact you soon.").show();
							       $('#successmsg').fadeIn('5000', function() {
								    $('#successmsg').fadeOut(10000);
								    window.location.replace("thank-you");
							});

									$("#contactform").find("input[type=text],input[type=file],textarea").val("");  
                                }else{
                                	 
                                	 $("#errormsg").text("Something went wrong : Please resubmit the form.").show();
                                	 $('#errormsg').fadeIn('5000', function() {
								    $('#errormsg').fadeOut(10000);
							});
                                }

                                $("#loaderimg").hide();
                                	 $("#submit").prop('disabled', false);


                            }


                        });


                    } 
					
});
});
</script>