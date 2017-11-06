
<body  class="page  page-template-default header_2">
<?php echo $top_menu; ?>
<div class="top_wrapper">
<div class="header_page">
<div class="container">
<div class="row-fluid">
<div class="breadcrumbss">
<h3 class="all_heading">Checkout</h3>
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
<!-- <dt>
<i class="moon-pen-5"></i>
</dt> -->
<dd style="margin-left:55px !important; margin-top:10px;">
<h2>You are just one step away from placing your order.</h2>
</dd>
</dl>
</div>

<div class="row-fluid">

<div class="span12">
<!-- <form name="contactForm" id="contactform" method="POST" action=""> -->
 <div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputname">Your Name(*)</label>
        TestName 
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email Id(*)</label>
        test@gmail.com
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputTitle">Project Title</label>
        Test project title
    </div>
</div>

<div class="span6 m5">   
    <div class="form-group">
        <label for="exampleInputservice">Service Needed(*)</label>
        <div class="select-wrapper">
            <select class="selectorderservice" tabindex="1"  name="service" id="service" disabled>
                <option value="1" selected>Please select Service </option>
                
               
            </select>
        </div>
    </div>
</div>

<div class="span6 m5 pull-right">
    <div class="form-group">
    <label for="exampleInputservice">Homepage + No of pages</label>
        <div class="select-wrapper">
            <select  tabindex="1" class="selectorderpagesize"  name="noOfPages" id="noOfPages" disabled>
                <option value="5" selected>5</option>
            </select>
        </div>
    </div>
</div>

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputTitle">HTML Type</label>
        <div class="html_type_radio">
            <input type="radio" class="form-control m0"  name="htmlType" checked value="1" disabled>  Responsive
            <input type="radio" class="form-control m0"  name="htmlType" value="2" disabled>  Non-Responsive
        </div>
    </div>
</div>    

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputFile">Uploaded File name</label>
        1: File1 name

        2 : File2 name <br/>
        File Path : www.eeeee.ddd
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
                <h4>Payment Details</h4>
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
           
        </div>
</div>
</div>
<!-- </form> -->
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
<!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> -->

  <!-- Saved buttons use the "secure click" command -->
  <!-- <input type="hidden" name="cmd" value="_s-xclick"> -->

  <!-- Saved buttons are identified by their button IDs -->
 <!--  <input type="hidden" name="hosted_button_id" value="ASWWNF3CM4KAS">
  <input type="hidden" id="itemPrice" name="item_price" value="50">
  <input type="hidden" name="currency_code" value="USD">
<input type=”hidden” name=”amount” value=”10.00″>
<input type=”hidden” name=”currency_code” value=”USD”> -->
  <!-- Saved buttons display an appropriate button image. -->
 <!--  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form> -->


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7G6K5NM7X4FPW">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>




<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RWS7DM4VTRZT4">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form> -->


<!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ASWWNF3CM4KAS">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->

<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RWS7DM4VTRZT4">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form> -->


<!-- <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"> </script> -->
