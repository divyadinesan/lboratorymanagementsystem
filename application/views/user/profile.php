

<?php
$this->load->view('user/layout/loginheader');
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
  height: 500px;
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
                        <form id="login-form" class="form" action="<?php echo base_url('index.php/User/profileedit')?>" method="post"><br><br>
                            <h3 class="text-center text-info">My Profile</h3><br><br>
                            <?php
						foreach ($profile as $row) 
							?>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="username" class="form-control" value="<?php echo $row->name?>">
                            </div>
                           
                            <div class="form-group">
                                <label for="password" class="text-info">Phone:</label><br>
                                <input type="text" name="phone" id="password" class="form-control"value="<?php echo $row->phone?>">
                            </div>
                           


                             <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control" value="<?php echo $row->email?>">
                            </div>
                           
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" value="<?php echo $row->password?>">
                            </div>
                            <div class="form-group" align="center" >
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br><br><br>
<?php
$this->load->view('user/layout/footer');
?>