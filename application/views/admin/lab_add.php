<?php
$this->load->view('admin/layout/header');
?>
<section class="panel">
                        <header class="panel-heading">
                            Add Lab
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admin/lab_insert')?>" method="post" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lab Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="phone">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Experience</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="experience">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="address">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Experience Certificate</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="experience_certificate">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Lab Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="image">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Lab Boy</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="lab_boy">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Lab Boy Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="lab_boy_email">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Lab Boy Password</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="lab_boy_pass">
                                </div>
                                
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

<?php
$this->load->view('admin/layout/footer');
?>