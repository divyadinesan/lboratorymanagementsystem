<?php
$this->load->view('admin/layout/header');
?>

<section class="panel">
	<?php
	foreach($pass as $row)

		?>
                        <header class="panel-heading">
                            EDIT PASSWORD
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admin/editpass')?>" method="post" role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value=<?php echo $row->email ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input  name="password" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value=<?php echo $row->password?>>
                                </div>
                               <div class="form-group">
                                    <label for="exampleInputPassword1">Change Password</label>
                                    <input name="changepass" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>


<?php
$this->load->view('admin/layout/footer');
?>