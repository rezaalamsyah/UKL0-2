<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
    body{
      background-image: url("background.png");
    }
    .card{
        margin-top: 175px ;
        margin-left: 350px ;
        width: 25%;

      }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="card col-sm-4">
        <div class="card-header bg-info">
          <h1 align = "center">LOGIN</h1>
        </div>
        <div class="card-body">
          <form action="proses-login.php" method="post">
            ID    : <br><input type ="text" name="username" autocomplete="off" placeholder="USERNAME" > <br>
            PASSWORD : <br><input type ="password" name="password" autocomplete="off" placeholder="PASSWORD"> <br>
            <br><input type="submit" value="Login" name="btnlogin" class = "btn btn-success"><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
