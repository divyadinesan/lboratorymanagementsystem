<style type="text/css">
    
    body {
            background-image: url('<?php echo base_url('Assets/Labouratory/images/14.jpg')?>'); background-size: 1400px 999px;
  background-repeat: no-repeat;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        }
        .card {
            border: 1px solid #28a745;
        }
        .card-login {
            margin-top: 130px;
            padding: 18px;
            max-width: 30rem;
        }

        .card-header {
            color: #fff;
            /*background: #ff0000;*/
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 600 !important;
            margin-top: 10px;
            border-bottom: 0;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #ff0000;
            color: #fff;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn{
            width: 130px;
        }

        .login_btn:hover{
            color: #fff;
            background-color: #ff0000;
        }

        .btn-outline-danger {
            color: #fff;
            font-size: 18px;
            background-color: #28a745;
            background-image: none;
            border-color: #28a745;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #28a745;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid #28a745;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0;
        }
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <!-- <span> <img src="<?php echo base_url('Assets/Labouratory/images/14.jpg')?>" class="w-75" alt="Logo" style="height: 130px;width: 130px"> </span><br/> -->
                        <span class="logo_title mt-5"> Register Here </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->

        </div>
        <div class="card-body">
            <form action="<?php echo base_url('index.php/Lab/lab_reg_insert')?>" method="post" enctype="multipart/form-data">
                <div class="input-group form-group">
                    
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="email" class="form-control" placeholder="email">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="phone" class="form-control" placeholder="phone">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="experience" class="form-control" placeholder="experience">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="address" class="form-control" placeholder="address">
                </div>
                 <label style="color: white">Experience certificate</label>
                   <div class="input-group form-group">

                   
                    <input type="file" name="experience_certificate" class="form-control" placeholder="experience_certificate">
                </div>
                 <label style="color: white">Image</label>
                   <div class="input-group form-group">
                   
                    <input type="file" class="form-control" placeholder="experience_certificate" name="images">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="lab_boy" class="form-control" placeholder="lab_boy">
                </div>
                   <div class="input-group form-group">
                    
                    <input type="text" name="lab_boy_email" class="form-control" placeholder="lab_boy_email">
                </div>
                   <div class="input-group form-group">
                   
                    <input type="text" name="lab_boy_pass" class="form-control" placeholder="lab_boy_pass">
                </div>

               <br>

                <div class="form-group">
                    <input type="submit" name="btn" value="Register" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form><br><br>
              <div style="padding-right: 150px"><i style="color: white">Already Registered !! </i>
                    <a href="<?php echo base_url('Lab/lab_login')?>" > <b style="color: white">Login Now</b></a>
                    </div><br>
            <div style="padding-right: 150px">
                    <a href="<?php echo base_url('Index/indexindex')?>" ><img src="<?php echo base_url('Assets/Labouratory/images/home.png')?>" style="height:90px;width:90px;padding-right: 15px;padding-top: 15px" align="right"></a>
                    </div>
        </div>
    </div><br><br><br>
    <br>
</div>