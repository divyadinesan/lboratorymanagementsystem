<?php
$this->load->view('user/layout/loginheader');
?>

<?php
foreach ($test as $fetch) 
?>
<div class="about all_pad">
	<div class="container">
		<h3 class="title"><?php echo $fetch->test_name?></h3><br><br>
		<div class="services-grids w3layouts">
			<div class="col-md-6 ser-right-page">
				<div class="port-2 effect-3">
                	<div class="image-box w3">
                    	<img src="<?php echo base_url('Assets/admin/lab/'.$fetch->test_image)?>" alt=" "/ style="height: 300px;width: 500px">
                    </div>
                    <div class="text-desc">
                    	
                        <p><?php echo $fetch->test_description?></p>
                    </div>
                </div>
			</div>
			<div class="col-md-6 ser-left-page">
				<div class="services-grid w3l">
					<div class="services-left w3ls">
						<p></p>
					</div>
					<div class="services-right agileits">
						<h4>Decription</h4>
						<p><?php echo $fetch->test_description?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="services-grid agileinfo">
					<div class="services-left wthree">
						<p></p>
					</div>
					<div class="services-right w3-agileits">
						<h4>price</h4>
						<p>₹<?php echo $fetch->test_price?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	<br>
	<div class="contact_w3agile">
	<div class="container">
		<h2 class="title w3">Book Now</h2>
		<div class="strip"></div><br>
		
		<form action="<?php echo base_url('User/booking_insrt')?>" method="post">
			
			<input type="text" value="<?php echo $fetch->lab_name?>" name="lab_Name" style="width: 300px">
			<input type="hidden" value="<?php echo $fetch->lab_id?>" name="lab_id" >
			<input type="hidden" value="<?php echo $fetch->test_id?>" name="test_id">
			<input type="hidden" value="<?php echo $fetch->lab_email?>" name="lab_email" >
			<?php
			foreach ($user as $user) {
				# code...
			}
			?>
			<input type="hidden" value="<?php echo $user->id?>" name="user_id">
			<input type="hidden" value="<?php echo $user->email?>" name="user_email">
			<input type="text" value="<?php echo $fetch->test_name?>" name="test_name">
			<input type="text" value="₹<?php echo $fetch->test_price?>" name="price" style="width: 300px">
			<input type="text" value="Lab Boy : <?php echo $fetch->lab_boy?>" name="lab_boy">
			<input type="hidden" value="<?php echo $fetch->lab_boy_email?>" name="lab_boy_email" ><br><br>
			<label style=" color: white">Choose Time : </label>
			<select style="width: 850px;height: 50px" name="time">
				<option>9.00am - 11.00am</option>
				<option>10.00am - 12.00pm</option>
				<option>11.00am - 1.00pm</option>
				<option>1.00pm - 3.00pm</option>
				<option>2.00pm - 4.00pm</option>
				<option>3.00pm - 5.00pm</option>
				<option>4.00pm - 6.00pm</option>
			</select><br><br>
			<input type="text" value="Enter Booking Date (dd/mm/yy)" name="b_date" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter Booking Date (dd/mm/yy)';}"><br><br>
			<br>
			<!-- <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Message</textarea> -->
			<div class="con-form text-center">
				<input type="submit" value="Book Now">
			</div>
		</form>
		
	</div>
</div><br><br>
	<?php
$this->load->view('user/layout/footer');
?>
	