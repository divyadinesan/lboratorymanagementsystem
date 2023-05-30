<?php
$this->load->view('Labouratory/layout/lab_header');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<br><br><br><br><br><br>
<h2 align="center">Payment Details</h2>
<br><br><br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.no</th>
      <th>Patient Name</th>
      <th>Labouratory Name</th>
      <th>Test Name</th>
      <th>Amount</th>
      
    </tr>
    <?php
    $i=1;
    foreach ($payment as $fetch) {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch->carh_holder_name?></td>
      <td><?php echo $fetch->lab_Name?></td>

      <td><?php echo $fetch->test_name?></td>
      <td><?php echo $fetch->amount?></td>
     
    </tr>
 <?php
}
?>
  </table>
</div>

</body>
</html>

<?php
$this->load->view('Labouratory/layout/lab_footer');
?>