<?php
$this->load->view('user/layout/loginheader');
?>
	
<div class="team all_pad">
	<div class="container">
		<h3 class="title">Tests Category</h3>
		<div class="team-grids">
			<?php
			foreach ($test as $fetch) {
				
			?>
			<div class="col-md-3 team-grid agile">
				<div class="team-img">
					
					<div class="view second-effect">
						<a href="<?php echo base_url('User/single/'.$fetch->test_id)?>">
						<img src="<?php echo base_url('Assets/admin/lab/'.$fetch->test_image)?>" alt="" class="img-responsive" / style="height: 100%;width: 100%"></a>
						
					</div>
				</div>
				<h4><?php echo $fetch->test_name?></h4>
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
	