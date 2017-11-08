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
<form name="contactForm" id="contactform" method="POST" action="<?php echo base_url(); ?>checkout" enctype="multipart/form-data">
 <div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputname">Your Name(*)</label>
        <input type="text" class="form-control err-c-name" id="customerName" name="customerName" placeholder="Please enter your name">
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email Id(*)</label>
        <input type="text" class="form-control err-email-id" id="eMail" name="eMail" placeholder="Please enter your Email Id">
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputTitle">Project Title</label>
        <input type="text" class="form-control " id="projecTitle" name="projecTitle" placeholder="Please enter project title">
    </div>
</div>
<input type="hidden" name="homepage_price" id="homepage_price">
<input type="hidden" name="innerpage_price" id="innerpage_price">
<input type="hidden" name="order_total" id="order_total">
<div class="span6 m5">   
    <div class="form-group">
        <label for="exampleInputservice">Service Needed(*)</label>
        <div class="select-wrapper">
            <select class="selectorderservice err-service" tabindex="1"  name="service" id="service">
                <?php 
                    echo '<option selected value="0">Please Select</option>';
                    foreach ($service_needed as $key => $value) {
                        # code...
                        echo '<option value="'.$value['id'].'">'.$value['service_name'].'</option>';
                    }
                ?>               
            </select>
        </div>
    </div>
</div>

<div class="span6 m5 pull-right">
    <div class="form-group">
    <label for="exampleInputservice">Homepage + No of pages</label>
        <div class="select-wrapper">
            <select  tabindex="1" class="selectorderpagesize"  name="noOfPages" id="noOfPages">
                <?php for($i=0; $i<51;$i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputFile">Upload File</label>
        <input id="uploadfile1" name="row_files" class="w236" placeholder="Choose File" disabled="disabled" />
        <div class="fileUpload btn btn-primary">
            <span>Upload</span>
            <input id="uploadBtn1" name="row_files" id="row_files" type="file" class="upload" />
        </div> 
        
        <input id="uploadfile2" name="row_files1" class="w236" placeholder="Choose File" disabled="disabled" />
        <div class="fileUpload btn m0 btn-primary">
            <span>Upload</span>
            <input id="uploadBtn2" name="row_files1" id="row_files1" type="file" class="upload" />
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
                <span id="selectedPackage">NA</span>
            </p>
        <div class="border-bottom"></div>
      
        <h5>Inner Pages</h5>
             <p class="m0">
                <span id="orderPages">NA</span>
            </p>
        
        <div class="border-bottom"></div>
    
        <h5>Turnaround Time</h5>
             <p class="m0">
                <span id="turnaroundTime">NA</span>
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
           <input type="button" id="place_order" class="w100 btnsubmit" name="place_order" value="Place Order">
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
   
    function ValidateEmail(email) {
       var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
       return expr.test(email);
   };

    $("#place_order").on('click' ,function () {
        var customerName = $('#customerName').val();
        var eMail        = $('#eMail').val();
        var service      = $('#service').val();
        var projecTitle  = $('#projecTitle').val();
        var noOfPages    = $('#noOfPages').val();
        var pathToFile   = $('#pathToFile').val();
        var error        = false;
        $(".err-c-name,.err-c-name-text").css({"border":"1px solid #c4c4c4","color":"#333334"});
        $(".err-email-id,.err-email-id-text").css({"border":"1px solid #c4c4c4","color":"#333334"});
        $(".err-service,.err-service-text").css({"border":"1px solid #c4c4c4","color":"#333334"});
        if ( typeof customerName =="undefined" || customerName == "" ) {
            //$(".err-c-name").after("<span err-c-name-text>Your Name Please</span>");
            $(".err-c-name,.err-c-name-text").css({"border":"1px solid red","color":"red"});
            error = true;
        }
        if ( typeof eMail =="undefined" || eMail == "" ) {
            //$(".err-email-id").append("<span err-email-id-text>Your Name Please</span>");
            $(".err-email-id,.err-email-id-text").css({"border":"1px solid red","color":"red"});
            error = true;
        }else if (!ValidateEmail(eMail)) {
           $(".err-email-id,.err-email-id-text").css({"border":"1px solid red","color":"red"});
           error = true;
       }
        if ( typeof service =="undefined" || service == "0" ) {
            //$(".err-service").append("<span err-service-text>Your Name Please</span>");
            $(".err-service,.err-service-text").css({"border":"1px solid red","color":"red"});
            error = true;
        }

        if(error) {
            return false
        }

        $( "#contactform" ).submit();

        return false;
    });
    
    $("#service").change(function(){
        $("#homepage_price").val("");
        $("#innerpage_price").val("");
        $("#selectedPackage").text("NA");
        $("#orderPages").text("0");
        $("#turnaroundTime").text("NA");
        $("#descountAmount").text("$0");
        $(".err-service,.err-service-text").css({"border":"1px solid #c4c4c4","color":"#333334"});
        if($(this).val()==0) {
            $("#noOfPages").val(0);
            $("#totalAmount").text("$0");
            $(".err-service,.err-service-text").css({"border":"1px solid red","color":"red"});
            return false;
        }   

        var postdata = {}
        postdata.service_id = $(this).val();

        $.ajax({
            url: '<?php echo base_url(); ?>index.php/order/get_services_info',
            type: 'post',
            data: postdata,
            success: function (data) {
                var data = JSON.parse(data);
                var selected_package = $("#service option:selected").text();
                $("#selectedPackage").text(selected_package);
                $("#homepage_price").val(data.homepage_price);
                $("#innerpage_price").val(data.innerpage_price);
                $("#turnaroundTime").text(data.turnaround_time);
                var order_total  = parseInt(data.homepage_price)+(parseInt(data.innerpage_price)*parseInt($("#noOfPages").val()));
                var descount_amount  =  order_total - ((order_total * <?php echo CHARGE_PERCENTAGE; ?>)/100);
                $("#descountAmount").text("$"+Math.floor(descount_amount));
                $("#order_total").val(order_total);
                $("#totalAmount").text("$"+order_total);
            }
        });
        return false;
    });

    $("#noOfPages").change(function() {
        $(".err-service,.err-service-text").css({"border":"1px solid #c4c4c4","color":"#333334"});
        if($("#service").val()==0) {
            $(".err-service,.err-service-text").css({"border":"1px solid red","color":"red"});
            return false;
        }
        var homepage_price = $("#homepage_price").val();
        var innerpage_price = $("#innerpage_price").val();
        var order_total  = parseInt(homepage_price)+(parseInt(innerpage_price)*parseInt($(this).val()));
        var descount_amount  =  order_total - ((order_total * <?php echo CHARGE_PERCENTAGE; ?>)/100);
        $("#descountAmount").text("$"+Math.floor(descount_amount));
        $("#order_total").val(order_total);
        $("#totalAmount").text("$"+order_total);
        $("#orderPages").text(parseInt($(this).val()));
        return false;
    });

    $(".row_files_btn").click(function(){
        var file_data = $("#row_files").prop('files')[0]; 
        var form_data = new FormData();                  
        form_data.append('file', file_data);         
        $.ajax({
                    url: '<?php echo base_url(); ?>index.php/order/pupload', // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    success: function(php_script_response){
                        // display response from the PHP script, if any
                        $("#row_files_text").val("row_files");
                    }
         }); 
    });

    $(".row_files_btn1").click(function(){
        var file_data = $("#row_files1").prop('files')[0]; 
        var form_data = new FormData();                  
        form_data.append('file', file_data);        
        $.ajax({
                    url: '<?php echo base_url(); ?>index.php/order/pupload', // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    success: function(php_script_response){
                         // display response from the PHP script, if any
                         $("#row_files_text1").val("row_files");
                    }
         }); 
    });

});

document.getElementById("uploadBtn1").onchange = function () {
    document.getElementById("uploadfile1").value = this.value;
};

document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadfile2").value = this.value;
};
</script>


