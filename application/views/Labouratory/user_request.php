<?php
$this->load->view('Labouratory/layout/lab_header');
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
						<th style="padding-left: 12px">Lab Name</th>
						<th style="padding-left: 12px"><?php echo $fetch->lab_Name?></th>
					</tr>
					<tr>
						<th  style="padding-left: 12px">Lab Boy </th>
						<th style="padding-left: 12px"><?php echo $fetch->lab_boy?></th>
					</tr>
					<tr>
						<th  style="padding-left: 12px">Test Name</th>
						<th style="padding-left: 12px"><?php echo $fetch->test_name?></th>
					</tr>
					<tr>
						<th  style="padding-left: 12px">Test Price</th>
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
					</tr>
						<tr>
						<th  style="padding-left: 10px">Test Status</th>
						<th style="padding-left: 10px"><?php echo $fetch->lab_updations?></th>
					</tr>
					</tr>
						<tr>

						<th  style="padding-left: 10px">
							<a href="<?php echo base_url('Lab/approve_booking/'.$fetch->book_id)?>"><button style="background-color: green;color: white">Booking Approved</button></a>
						</th>
						<th style="padding-left: 10px">
							<a href="<?php echo base_url('Lab/reject_booking/'.$fetch->book_id)?>"><button style="background-color: red;color: white">Booking Rejected</button></a>
						</th>
					</tr>
					<?php
					if($fetch->lab_updations=='Sample Reached the Lab')
					{
					?>

						<td colspan="2" style="padding-left: 10px"><label><br>Upload Test result</label><br><br>
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url('Lab/test_result')?>">
								<input type="hidden" name="book_id" value="<?php echo $fetch->book_id?>">
								<input type="hidden" name="lab_Name" value="<?php echo $fetch->lab_Name?>">
								<input type="hidden" name="lab_id" value="<?php echo $fetch->lab_id?>">
								<input type="hidden" name="test_id" value="<?php echo $fetch->test_id?>">
								<input type="hidden" name="lab_email" value="<?php echo $fetch->lab_email?>">

								<input type="hidden" name="user_id" value="<?php echo $fetch->user_id?>">
								<input type="hidden" name="user_email" value="<?php echo $fetch->user_email?>">
								<input type="hidden" name="test_name" value="<?php echo $fetch->test_name?>">
								<input type="file" name="report"><br>
								<input type="submit" name="">
								
							</form><br><br>
						</th>



					<?php
				}
				?>
				

				</table>
				
				
				
				
			</div>
			<?php
		}
			?>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
$this->load->view('Labouratory/layout/lab_footer');
?>