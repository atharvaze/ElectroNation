<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    body{
    background: white url("back.jpg");
}
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<body>

<div class="login-form">
    <form action="register.php" method="post">
        <h2 class="text-center">User Registeration</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" required="required" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email_id">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="pwd">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            
        </div>
               
    </form>
    
</div>
</body>
</html>