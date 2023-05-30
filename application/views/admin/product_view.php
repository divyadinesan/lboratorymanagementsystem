<?php
$this->load->view('admin/layout/header');
?>

		
 <div class="panel panel-default">
    <div class="panel-heading">
     TEST VIEW
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">SL NO</th>
            <th>CATEGORY</th>
            <th>TEST NAME</th>
            <th data-breakpoints="xs">PRICE</th>
            <th>DESCRIPTION</th>
           <!--  <th>IMAGE</th> -->
            <th>EDIT</th>
            <th>DELETE</th>
           
            
          </tr>
        </thead>
        <tbody>
        	<?php
        	$i=1;
        	foreach( $pro as $row)
        	{
        	?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->category?></td>
            <td><?php echo $row->p_name?></td>
            <td><?php echo $row->price?></td>
            <td><?php echo $row->description?></td>
            <!-- <td><img style="height:100px;width:100px" src="<?php echo base_url('Assets/admin/product/'.$row->image)?>"></td> -->
            <td><a href="<?php echo base_url('index.php/Admin/editpro/'.$row->pid)?>">EDIT</a></td>
            <td><a href="<?php echo base_url('index.php/Admin/delpro/'.$row->pid)?>">DELETE</a></td>
          </tr>
          <?php
			$i++;
			}
          ?>
          
          
        </tbody>
      </table>
    </div>
  </div>
</div>
 




<?php
$this->load->view('admin/layout/footer');
?>