












<?php
$this->load->view('Labouratory/layout/lab_header');
?>



<style type="text/css">
  body {
  margin: 0;
  padding: 0;
  
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 1800px;
  height: 600px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-11">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" enctype="multipart/form-data" action="<?php echo base_url('Lab/test_insert')?>" method="post"><br><br>
                            <h3 class="text-center text-info">Add Test</h3><br><br>
                             <div class="form-group">
                                <label for="username" class="text-info">Choose Category:</label><br>
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
                                    </select><br><br>
                                         <?php
                                        foreach ($lab as $lab_fetch) 
                                        
                                        ?>
                                       <input type="hidden" name="lab_id" value="<?php echo $lab_fetch->lab_id?>">
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="username" class="form-control" >
                            </div>
                           
                            <div class="form-group">
                                <label for="password" class="text-info">Price</label><br>
                                <input type="text" name="price" id="password" class="form-control">
                            </div>
                           


                             <div class="form-group">
                                <label for="username" class="text-info">Image:</label><br>
                                <input type="file" name="image" id="username" class="form-control" >
                            </div>
                           
                            <div class="form-group">
                                <label for="password" class="text-info">Description:</label><br>
                                <input type="text" name="description" id="password" class="form-control" >
                            </div>
                            <div class="form-group" align="center" >
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br><br><br><br>
<br><br><br><br>
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

<h2 align="center">Manage Test</h2>
<br><br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>  Category Name</th>
      <th>Test Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($test as $fetch) {
      
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch->category?></td>
      <td><?php echo $fetch->test_name?></td>
      <td><?php echo $fetch->test_price?></td>
      <td><?php echo $fetch->test_description?></td>
      <td><img src="<?php echo base_url('Assets/admin/lab/'.$fetch->test_image)?>" style="height: 100px;width: 100px"></td>
       <td><img src="<?php echo base_url('Assets/admin/images/edit.png')?>" style="height: 50px;width: 50px"></td>
            <td><img src="<?php echo base_url('Assets/admin/images/delete.png')?>" style="height: 50px;width: 50px"></td>
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
$this->load->view('Labouratory/layout/lab_footer');
?>