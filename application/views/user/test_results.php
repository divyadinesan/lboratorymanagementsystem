<?php
$this->load->view('user/layout/loginheader');
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
<br><br><br><br>
<h2 align="center">Test Results</h2><br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Lab Name</th>
      <th>Test Name</th>
      <th>Test Report</th>
      
    </tr>
    <?php
    foreach ($test_result as $fetch) {
    	
    
    ?>
    <tr>
      <td><?php echo $fetch->lab_Name?></td>
      <td><?php echo $fetch->test_name?></td>
      <td><br><object data="<?php echo base_url('Assets/Labouratory/test_report/'.$fetch->report)?>"  width="100%" height="300px" type="application/pdf"></object></td>
      
    </tr>
   <?php
}
?>
   
  </table>
</div>

</body>
</html>









<?php
$this->load->view('user/layout/footer');
?>