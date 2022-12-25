<!DOCTYPE html>
<html lang="en">
<head>
<!-- css -->
    <link rel="stylesheet" href="css.css">
<!-- bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- icons -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>

 <!-- nav bar -->
 <!--
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
-->

    <div class = "container-fluid1 bg-1 text-center">
        <h1>Welcome</h1><br><br>
        <!-- image aayega idhar -->
        <h4>What do you want to do?</h4><br>
        <h6>Scroll down for more info.</h6>
    </div>

    <!-- create new user -->
    <div class = "container-fluid1 bg-2 text-center">
        <h3>Creating new user</h3><br>
        <p>This will create a new user and make an entry in the database.<br>The user will be then able to login from the login button given below.</p>
        <a href="createuser.php" class="btn btn-primary">
        <i class='fas fa-user-plus'></i> Create new user
        </a>
    </div>

    <!-- login -->
    <div class = "container-fluid1 bg-3 text-center">
        <h3>Login Page</h3><br>
        <p>This will redirect you to a login page<br>On the login page you will enter your login credentials and login.<br>My system will verify it from the database and validate your login.</p>
        <a href="login.php" class="btn btn-primary">
        <i class='fas fa-user-check'></i> Login
        </a>
    </div>

    <!-- About me -->
    <div class = "container-fluid1 bg-4 text-center">
        <h3>About Me</h3><br><br><br>
        <div class = "row">
            <div class="col-sm-6">
                <p>My name is Shrikant Bhosle,<br>a SY-IT engineering student,</p>
            </div>
            <div class="col-sm-6">
                <p>who is working on this HTML,CSS(using bootstrap)<br>and PHP project to learn frontend developing.</p>
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-5 text-center">
        <p>Send suggestions by mail: <a href="shrikant.bhosle@somaiya.edu">shrikant.bhosle@somaiya.edu</a></p>
    </footer>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>