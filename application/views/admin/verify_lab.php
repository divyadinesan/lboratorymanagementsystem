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
<h2 align="center"><b style="color: white">Verify Lab</b></h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Lab Name</th>
      <th>Email id</th>
      <th>Phone Number</th>
      <th>Experience</th>
      <th>Image</th>
      <th>Experience Certificate</th>
      
      <th>Lab Status</th>
      <th>Lab Type</th>
      <th>Approve</th>
      <th>Reject</th>
    </tr>
    <?php
    foreach ($verify_lab as $fetch) {
   
    ?>
    <tr>
      <td><?php echo $fetch->lab_name?></td>
      <td><?php echo $fetch->lab_email?></td>
      <td><?php echo $fetch->lab_phone?></td>
      <td><?php echo $fetch->lab_experience?></td>
      <td><img src="<?php echo base_url('Assets/admin/lab/'.$fetch->image)?>" style="height: 100px;width: 100px"></td>
    <td><br><object data="<?php echo base_url('Assets/admin/experience_certificate/'.$fetch->experience_certificate)?>"  width="300px" height="300px" type="application/pdf"></object><br><br><br></td>
      <td><?php echo $fetch->Lab_status?></td>
      <td><?php echo $fetch->Lab_type?></td>
        <td><a href="<?php echo base_url('Admin/approve/'.$fetch->lab_id)?>"><button style="background-color: green;color: white">Approve</button></a></td>
      <td><a href="<?php echo base_url('Admin/reject/'.$fetch->lab_id)?>"><button style="background-color: red;color: white">Reject</button></a></td>
     
     
    </tr>
    <?php
  }
  ?>
  
  </table>
</div>

</body>
</html>






<?php
$this->load->view('admin/layout/footer');
?>