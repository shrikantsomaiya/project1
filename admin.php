<!DOCTYPE html>
<html>

<head>
  <!-- css -->
  <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<?php
session_start();
if(isset($_SESSION['user']))
{
    ?>
    <!-- Button trigger modal -->
<div class="container-fluid bg-2 text-right">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ikrama">
  Log Out!
</button><br><h1>THIS IS THE STUDENT INFO FORM</h1><br></div>


    <div class = "container-fluid bg-1 text-center";> 
        <form method = "POST" action = "adddata.php">
        <label >UserName:</label><br>
                <input type="text" name="uname" id="box"><br><br>
                <label >First Name:</label><br>
                <input type="text" name="fname" id="box"><br><br>
                <label >Last Name:</label><br>
                <input type="text" name="lname" id="box"><br><br>
                <label >Father's Name:</label><br>
                <input type="text" name="faname" id="box"><br><br>
                <label >Mother's Name:</label><br>
                <input type="text" name="moname" id="box"><br><br>
                <label >Mobile number:</label><br>
                <input type="tel" name="phone" id="box"><br><br>
                <label >Somaiya mail ID:</label><br>
                <input type="email" name="email" id="box"><br><br>
                <label >Email ID (non-somaiya if present):</label><br>
                <input type="text" name="nmail" id="box"><br><br>
                <label >Department:</label><br>
                        <input type="radio" id="cs" name="dept" value="1">
                        <label for="cs">Computer Science</label><br>
                        <input type="radio" id="it" name="dept" value="2">
                        <label for="it">Information Technology</label><br>
                        <input type="radio" id="extc" name="dept" value="3">
                        <label for="extc">Electronics and Telecommunications</label><br>
                        <input type="radio" id="aids" name="dept" value="4">
                        <label for="aids">Artificial Intelligence and Data science</label>
                        <br><br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
        </form>
        

    </div>



<!-- Modal -->
<div class="modal fade" id="ikrama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div id='info'>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='logout.php'">Log out</button>
      </div>
    </div>
  </div>
</div>
<?php
}
else{
    ?>
    <h1>THIS IS NOT THE ADMIN PAGE</h1>
<?php
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const {info} = require('./valid.php');
        username = info.uname;
        password = info.passw;
        document.getElementById('info').InnerHTML= username,password;

    </script>
</body>
</html>