<?php
$this->load->view('admin/layout/header');
?>


<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Add Test
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form enctype="multipart/form-data" action="<?php echo base_url('Admin/product_insert')?>" method="POST" role="form">
                                	<div class="form-group">
                                		<label for="exampleInputEmail1">Choose category</label>
                                		<select name="cid" style="display: block;
    width: 100%;
    height: 34px;padding: 6px 12px;font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;border-radius: 4px;">
                                			<?php
                                			foreach($cat as $row)
                                			{
                                			?>
                                			<option value="<?php echo $row->id?>"><?php echo $row->category?></option>
                                			<?php
                                		}
                                		?>
                                		</select>
                                	</div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEST NAME</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">PRICE</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="Password">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Password">
                                </div>
                               
                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">IMAGE</label>
                                    <input type="file" id="exampleInputFile" name="image">
                                    
                                </div> -->
                               
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

<?php
$this->load->view('admin/layout/footer');
?>