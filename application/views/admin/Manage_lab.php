<?php
$this->load->view('admin/layout/header');
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
<br><br>
<h2 align="center"><b>Admin Registered Lab</b></h2><br><br>


<div style="overflow-x:auto;">
  <table>
     <th>Sl.no</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      
      <th>Lab Boy Name</th>
      <th>Image</th>
      <th>Lab Status</th>
      <th>Lab Type</th>
      <?php
      $i=1;
    	foreach ($Admin as $fetch) {
    	
    	?>
    <tr>
    	
      <td><?php echo $i?></td>
      <td><?php echo $fetch->lab_name?></td>
      <td><?php echo $fetch->lab_email?></td>
      <td><?php echo $fetch->lab_phone?></td>
      
      <td><?php echo $fetch->lab_boy?></td>
      <td><img src="<?php echo base_url('Assets/admin/lab/'.$fetch->image)?>" style="height:80px;width: 80px"></td>
      <td><?php echo $fetch->Lab_status?></td>
      <td><?php echo $fetch->Lab_type?></td>
      
    </tr>
    <?php
    $i++;
}
?>
  
  </table>
</div>

</body>
</html>
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
<h2 align="center"><b style="color: white">Admin Approved Lab</b></h2><br><br>



<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.no</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
     
      <th>Lab Boy Name</th>
      <th>Image</th>
      <th>Lab Status</th>
      <th>Lab Type</th>
     
    </tr>
     <?php
      $i=1;
    	foreach ($lab as $lab_fetch) {
    	
    	?>
    <tr>
    	
      <td><?php echo $i?></td>
      <td><?php echo $lab_fetch->lab_name?></td>
      <td><?php echo $lab_fetch->lab_email?></td>
      <td><?php echo $lab_fetch->lab_phone?></td>
      
      <td><?php echo $lab_fetch->lab_boy?></td>
      <td><img src="<?php echo base_url('Assets/admin/lab/'.$lab_fetch->image)?>" style="height:80px;width: 80px"></td>
      <td><?php echo $lab_fetch->Lab_status?></td>
      <td><?php echo $lab_fetch->Lab_type?></td>
      
    </tr>
    <?php
    $i++;
}
?>
   
  </table>
</div>

</body>
</html>
<br><br><br><br><br>
<?php
$this->load->view('admin/layout/footer');
?>
