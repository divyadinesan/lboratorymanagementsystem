<?php
$this->load->view('user/layout/loginheader');
?>
	

<div class="team all_pad">
	<div class="container">
		<h3 class="title">Tests Category</h3>
		<div class="team-grids">
			<?php
			foreach ($category as $fetch) {
				
			?>
			<div class="col-md-3 team-grid agile">
				<div class="team-img">
					<?php
					foreach ($lab as $lb) 
					 
					?>
					<div class="view second-effect">
						<a href="<?php echo base_url('User/test/'.$fetch->id.'/'.$lb->lab_id)?>">
						<img src="<?php echo base_url('Assets/admin/category/'.$fetch->image)?>" alt="" class="img-responsive" / style="height: 100%;width: 100%"></a>
						
					</div>
				</div>
				<h4><?php echo $fetch->category?></h4>
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