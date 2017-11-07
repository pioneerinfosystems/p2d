
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

<dd style="margin-left:55px !important; margin-top:10px;">
<h2>You are just one step away from placing your order.</h2>
</dd>
</dl>
</div>

<div class="row-fluid">

<div class="span12">
 <div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputname">Your Name(*)</label>
        <?php echo isset($field_values['cust_name']) ?  $field_values['cust_name'] : '-';  ?>
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email Id(*)</label>
        <?php echo isset($field_values['cust_email']) ?  $field_values['cust_email'] : '-';  ?>
    </div>
</div>

<div class="span4 m5">
    <div class="form-group">
        <label for="exampleInputTitle">Project Title</label>
        <?php echo isset($field_values['project_title']) ?  $field_values['project_title'] : '-';  ?>
    </div>
</div>

<div class="span6 m5">   
    <div class="form-group">
        <label for="exampleInputservice">Service Needed(*)</label
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
             <?php 
               if($field_values['project_title']==1) {
            ?>
                <input type="radio" class="form-control m0"  name="htmlType" checked value="1" disabled>  Responsive
                <input type="radio" class="form-control m0"  name="htmlType" value="2" disabled>  Non-Responsive
            <?php
               } else {
            ?>
                 <input type="radio" class="form-control m0"  name="htmlType" value="2" disabled>  Non-Responsive
                <input type="radio" class="form-control m0"  name="htmlType" checked value="2" disabled>  Non-Responsive
            <?php
               }  
            ?>           
            
        </div>
    </div>
</div>    

<div class="span12 m5">  
    <div class="form-group">
        <label for="exampleInputFile">Uploaded File name</label>
        1: <?php echo isset($field_values['image_file1']) ?  $field_values['image_file1'] : '-';  ?>

        2 : <?php echo isset($field_values['image_file2']) ?  $field_values['image_file2'] : '-';  ?> <br/>
        File Path : <?php echo isset($field_values['image_url']) ?  $field_values['image_url'] : '-';  ?>
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
                <span id="totalAmount">$<?php echo isset($field_values['calculated_price']) ?  $field_values['calculated_price'] : '-';  ?></span>
            </p>

        <div class="border-bottom"></div>
          <div class="contact_adr">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="22RTCPY7A63QC">
            <input type="hidden" name="lc" value="IN">
            <input type="hidden" name="button_subtype" value="services">
            <input type="hidden" name="no_note" value="0">
            <input type="hidden" name="cn" value="Add special instructions to the seller:">
            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="rm" value="1">
            <input type="hidden" name="amount" value="<?php echo $field_values['calculated_price']; ?>">
            <input type="hidden" name="item_name" value="PSD to WP Service">
            <input type="hidden" name="return" value="http://www.psd2html4u.com">
            <input type="hidden" name="cancel_return" value="http://www.psd2html4u.com">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
</div>
</div>
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
