<?php
$this->load->view('user/layout/loginheader');
?>


<br><br><br><br><br>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="span12">
      <form class="form-horizontal span10" method="post" action="<?php echo base_url('user/payment_insert')?>">
        <fieldset>
          <legend align="center"><b>Payment</b></legend><br><br>
       <?php
       foreach ($booking as $bking) 
       ?>
     <input type="hidden" name="book_id" value="<?php echo $bking->book_id?>">
     <input type="hidden" name="lab_id" value="<?php echo $bking->lab_id?>">
     <input type="hidden" name="lab_email" value="<?php echo $bking->lab_email?>">
      <input type="hidden" name="test_id" value="<?php echo $bking->test_id?>">
      <input type="hidden" name="user_email" value="<?php echo $bking->user_email?>">
      <input type="hidden" name="user_id" value="<?php echo $bking->user_id?>">
          <div class="control-group">
            <label class="control-label">Card Holder's Name</label>
            <div class="controls">
              <input type="text" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name" required name="carh_holder_name">
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card Number</label>
            <div class="controls">
              <div class="row-fluid">
               <input type="text" class="input-block-level" autocomplete="off" title="Three digits at back of your card" required name="card_number">
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card Expiry Date</label>
            <div class="controls">
              <div class="row-fluid">
                 <input type="text" class="input-block-level" autocomplete="off" title="Three digits at back of your card" required name="expiry_date">
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card CVV</label>
            <div class="controls">
              <div class="row-fluid">
                  <div class="row-fluid">
                 <input type="text" class="input-block-level" autocomplete="off" title="Three digits at back of your card" required name="cvv">
              </div>
                <div class="span8">
                  <!-- screenshot may be here -->
                </div>
              </div>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label">Amount</label>
            <div class="controls">
              <div class="row-fluid">
                 <input type="text" class="input-block-level" autocomplete="off" title="Three digits at back of your card" required name="amount" value="<?php echo $bking->price?>">
              </div>
            </div>
          </div>
       
       <br><br>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
	
		<?php
$this->load->view('user/layout/footer');
?>