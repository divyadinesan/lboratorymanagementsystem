
<?php
$this->load->view('admin/layout/header');
?>
<br><br><br>
<div class="table-agile-info">
 <div class="panel panel-default">
 <div class="panel-heading">
     VIEW CATEGORY
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
            <th data-breakpoints="xs">ID</th>
            <th>Category Name</th>
            <th>Edit</th>
            <th data-breakpoints="xs">Delete</th>
           
            
          </tr>
        </thead>
        <tbody>
        	<?php
        	$i=1;
        	foreach($cat as $row)
        	{
        	?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->category?></td>
            <td><a href="<?php echo base_url('index.php/Admin/editcat/'.$row->id)?>"><img src="<?php echo base_url('Assets/admin/images/edit.png')?>" style="height: 50px;width: 50px"></a></td>
            <td><a href="<?php echo base_url('index.php/Admin/delcat/'.$row->id)?>"><img src="<?php echo base_url('Assets/admin/images/delete.png')?>" style="height: 50px;width: 50px"></a></td>
            
           
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
</div>

<?php
$this->load->view('admin/layout/footer');
?>