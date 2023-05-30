<?php
$this->load->view('user/layout/loginheader');
?>
	<div class="team all_pad">
	<div class="container">
		<h3 class="title">My Bookings</h3>
		<div class="team-grids">
			<?php
			foreach ($booking as $fetch) {
			
			?>
			<div class="col-md-3 team-grid agile">
				<div class="team-img">
					<div class="view second-effect">
						<img src="<?php echo base_url('Assets/admin/lab/'.$fetch->image)?>" alt="" class="img-responsive" / style="height: 100%;width: 100%">
						<div class="mask">
							
						</div>
					</div>
				</div><br>
				<table border="1px">
					<tr >
						<th style="padding-left: 10px">Lab Name</th>
						<th style="padding-left: 10px"><?php echo $fetch->lab_Name?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Lab Boy </th>
						<th style="padding-left: 10px"><?php echo $fetch->lab_boy?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Test Name</th>
						<th style="padding-left: 10px"><?php echo $fetch->test_name?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Test Price</th>
						<th style="padding-left: 10px"><?php echo $fetch->price?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Time</th>
						<th style="padding-left: 10px"><?php echo $fetch->time?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Date</th>
						<th style="padding-left: 10px"><?php echo $fetch->b_date?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Booking Status</th>
						<th style="padding-left: 10px"><?php echo $fetch->booking_status?></th>
					</tr>
						<tr>
						<th  style="padding-left: 10px">Payment Status</th>
						<th style="padding-left: 10px"><?php echo $fetch->payment_status?></th>
					</tr>
					<tr>
						<th  style="padding-left: 10px">Lab Status</th>
						<th style="padding-left: 10px"><?php echo $fetch->lab_updations?></th>
					</tr>

				</table>
				<br><br>
					<?php
					if($fetch->booking_status=='Approved' && $fetch->payment_status=='Pending')
					{
					?>
					<a href="<?php echo base_url('User/payment/'.$fetch->book_id)?>"><button style="width: 250px">Pay Now</button></a>
					<?php
				}
				?>
				
				
				
			</div>
			<?php
		}
			?>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
	<?php
$this->load->view('user/layout/footer');
?>
	