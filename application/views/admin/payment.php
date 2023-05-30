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
            <th>Lab Name</th>
            <th>Card Holder Name</th>
            <th>Card  Number</th>
           <!--  <th data-breakpoints="xs">Expiry Date</th> -->
            <th data-breakpoints="xs">Amount</th>
           
           
           
          </tr>
        </thead>
        <?php
        $i=1;
          foreach($payment as $row)
          {
        ?>
        <tbody>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
             <td><?php echo $row->lab_name?></td>
            <td><?php echo $row->carh_holder_name ?></td>
            <td><?php echo $row->card_number?></td>
            <!-- <td><?php echo $row->expirydate?></td> -->
            <td><?php echo $row->amount?></td>
             
           
            
            
            
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