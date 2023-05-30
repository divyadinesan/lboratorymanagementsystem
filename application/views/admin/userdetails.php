<?php
$this->load->view('admin/layout/header');
?>



<div class="panel panel-default">
    <div class="panel-heading">
     USER DETAILS
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
            <th> NAME</th>
            <th>EMAIL</th>
            <th data-breakpoints="xs">PHONE</th>
           
           
          </tr>
        </thead>
        <?php
        $i=1;
          foreach($detail as $row)
          {
        ?>
        <tbody>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->phone?></td>
            
            
            
          </tr>
         <?php
            $i++;
            }
         ?>
        </tbody>
      </table>
    </div>
  </div>






<?php
$this->load->view('admin/layout/footer');
?>