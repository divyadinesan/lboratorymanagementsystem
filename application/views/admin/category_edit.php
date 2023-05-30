<?php
$this->load->view('admin/layout/header');
?>
<section class="panel">
	<?php
    foreach($category as $row)
    ?>

                        <header class="panel-heading">
                            Edit Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admin/updatecat')?>" method="POST" role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit category</label>
                                     <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $row->id?>" name="id">
                                    
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->category?>" name="category">

                                </div>
                                
                                <button type="submit" class="btn btn-info" name="submit">upadte</button>
                            </form>
                            </div>

                        </div>
                    </section>

<?php
$this->load->view('admin/layout/footer');
?>