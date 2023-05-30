<?php
$this->load->view('admin/layout/header');
?><br><br><br><br>
<section class="panel">
                        <header class="panel-heading">
                            Add Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admin/category_add')?>" method="POST" role="form" enctype=multipart/form-data>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Add category</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="category">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Category Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Add Category" name="image">
                                </div>
                                
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

<?php
$this->load->view('admin/layout/footer');
?>