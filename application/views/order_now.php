<body  class="page  page-template-default header_2">
<?php echo $top_menu; ?>
<div class="top_wrapper">
<div class="header_page">
<div class="container">
<div class="row-fluid">
<div class="breadcrumbss">
<h3 class="all_heading">Order Now</h3>
</div>
</div>
</div>

</div> 

<section id="content" class="page-dynamic_template-contactpa sequentialchildren section_first ">
<div class="row-fluid">
<div class="row-fluid row-dynamic-el " style="">
<div class="container">
<div class="row-fluid">
<div class="span8 contact_frm">
<div class="header">
<dl class="dl-horizontal">
<dt>
<i class="moon-pen-5"></i>
</dt>
<dd style="margin-left:55px !important; margin-top:10px;">
<h4>Place your order</h4>
</dd>
</dl>
</div>

<div class="row-fluid">

<div class="span12">
<form name="contactForm" id="contactform" method="POST" action="">
 <div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputname">Your Name(*)</label>
        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Please enter your name">
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email Id(*)</label>
        <input type="text" class="form-control" id="eMail" name="eMail" placeholder="Please enter your Email Id">
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputTitle">Project Title</label>
        <input type="text" class="form-control" id="projecTitle" name="projecTitle" placeholder="Please enter project title">
    </div>
</div>

<div class="span6 m5">   
    <div class="form-group">
        <label for="exampleInputservice">Service Needed(*)</label>
        <div class="select-wrapper">
            <select class="selectorderservice" tabindex="1"  name="service" id="service">
                <option value="">Please select Service </option>
                <option value="">Please select Service </option>
                <option value="">Please select Service </option>
                <option value="">Please select Service </option>
               
            </select>
        </div>
    </div>
</div>

<div class="span6 m5 pull-right">
    <div class="form-group">
    <label for="exampleInputservice">Homepage + No of pages</label>
        <div class="select-wrapper">
            <select  tabindex="1" class="selectorderpagesize"  name="noOfPages" id="noOfPages">
                <?php for($i=1; $i<51;$i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputTitle">HTML Type</label>
        <div class="html_type_radio">
            <input type="radio" class="form-control m0"  name="htmlType" checked value="1">  Responsive
            <input type="radio" class="form-control m0"  name="htmlType" value="2">  Non-Responsive
        </div>
    </div>
</div>    

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputFile">Upload File</label>
        <input id="uploadfile1" class="w236" placeholder="Choose File" disabled="disabled" />
        <div class="fileUpload btn btn-primary">
            <span>Upload</span>
            <input id="uploadBtn1" type="file" class="upload" />
        </div> 

        <input id="uploadfile2" class="w236" placeholder="Choose File" disabled="disabled" />
        <div class="fileUpload btn m0 btn-primary">
            <span>Upload</span>
            <input id="uploadBtn2" type="file" class="upload" />
        </div> 
        <input type="text" class="form-control w90" name="pathToFile" id="pathToFile" placeholder="Paste URL (Path)">
     </div>
</div>
<span id="loaderimg" style="display:none"><img alt="" src="content/img/loading.gif"></span>
<span id="errormsg" style="display:none;color:red;"></span> 
<span id="successmsg" style="display:none;color:green;"></span>

<div id="ajaxresponse"></div>
</div>
</div>
</div>


<div class="span4 post_page_cont">
    <div class="header">
        <dl class="dl-horizontal">
            <dt>
               <i class="moon-file-2"></i>
            </dt>

            <dd style="margin-left:55px !important; margin-top:10px;">
                <h4>Order Summery</h4>
            </dd>

        </dl>
    </div>
    <div class="row-fluid"> 
     <div class="order_summery span12">
        <h5>Selected Package</h5>
            <p class="m0">
                <span id="selectedPackage">PSD to HTML</span>
            </p>
        <div class="border-bottom"></div>
      
        <h5>Inner Pages</h5>
             <p class="m0">
                <span id="orderPages">0</span>
            </p>
        
        <div class="border-bottom"></div>
    
        <h5>Turnaround Time</h5>
             <p class="m0">
                <span id="turnaroundTime">2 to 3 days</span>
            </p>

        <div class="border-bottom"></div>
  
        <h5>Discount Amount</h5>
            <p class="m0">
                <span id="descountAmount">$0</span>
            </p>
        
        <div class="border-bottom"></div>
   
        <h5>Total</h5>
            <p class="m0">
                <span id="totalAmount">$0</span>
            </p>

        <div class="border-bottom"></div>
        
        <div class="contact_adr">
           <input type="button" id="submit" class="w100 btnsubmit" name="btnsubmit" value="Place Order">
        </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>                
</div>

</section>

<a href="#" class="scrollup">Scroll</a> 
<!-- Social Profiles -->
<!-- Footer -->
</div>

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"> </script>
<script type="text/javascript">
$(document).ready(function() {
$('#submit').on('click',function() {

var formData = new FormData();
formData.append("customername", $("#customername").val());
formData.append("email", $("#email").val());
formData.append("service", $("#service").val());
formData.append("country", $("#country").val());
formData.append("messContact", $("#messContact").val());
formData.append("pathtofile", $("#pathtofile").val());
formData.append('uploadfile1', $('input[type=file]')[0].files[0]);
formData.append('uploadfile2', $('input[type=file]')[1].files[0]);

var error = 0;
$("#customername").css('border', '1px solid #dbdbdb');
$("#email").css('border', '1px solid #dbdbdb');
$("#service").css('border', '1px solid #dbdbdb');
$("#country").css('border', '1px solid #dbdbdb');
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
                                  if ($("#service").val() == "") {
                                    $("#service").css('border', '1px solid red');                       
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
                        $("#submit").prop('disabled', true);
                        $("#loaderimg").show();
                        $.ajax({
                            url: '<?php echo base_url(); ?>home/submit_contact_form',
                            type: 'post',
                            mimeType: "multipart/form-data",
                            contentType: false,
                            cache: false,
                            processData: false,
                            data: formData,
                            success: function (data) {
                                if (data == 1) {
                                   $("#loaderimg").hide();
                                   $('#successmsg').text("Enquiry submitted successfully.").show();
                                   $('#successmsg').fadeIn('5000', function() {
                                   $('#successmsg').fadeOut(10000);
                                   window.location.replace("thank-you");
                            });
                                     
                                    $("#contactform").find("input[type=text],input[type=file],textarea").val("");
                                    $("#country").val();  
                                    $("#service").val();  
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

document.getElementById("uploadBtn1").onchange = function () {
    document.getElementById("uploadfile1").value = this.value;
};

document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadfile2").value = this.value;
};
</script>


