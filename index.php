<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if(isset($_POST['login']))
    {
        $adminuser=$_POST['username'];
        $password=md5($_POST['password']);

        $query=mysqli_query($con,"SELECT ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
        $ret=mysqli_fetch_array($query);

        if($ret>0){
            $_SESSION['avmsaid']=$ret['ID'];
            header('location:dashboard.php');
        } else {
            $msg="Invalid Details, Please Try Again!";}
    }
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tenant X : Rental Property Management</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Tenant X</b><br>Rental Property Management System</br></a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Log In to start your session</p>

    <form method="POST">

    <?php if($msg){ echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";}  ?>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-success btn-block btn-flat">Login</button>
        </div>
      </div>
    </form>

   

    <a href="forgotpw.php">I forgot my password</a><br>

  </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' 
    });
  });
</script>
</body>
</html>
