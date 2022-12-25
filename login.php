<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <div class = "container-fluid2 bg-3 text-center">
        <h1>Login</h1>
        <form method="POST" action="valid.php">
        
            <label >Username:</label><br>
            <input type="text" name="username" ><br>
            <br>
            <label >Password:</label><br>
            <input type="password" name="password" ><br><br>
            <input type="checkbox" name="check">
            <label> Keep me logged in? </label><br><br>
           <input type="submit" value="Submit">
        </form>
        <br>
        <a href="dashboard.php" class="btn btn-info">
        <i class='fas fa-chalkboard'></i> Homepage
        </a>
    </div>
    <footer class="container-fluid bg-5 text-center">
        <p>Send suggestions by mail: <a href="shrikant.bhosle@somaiya.edu">shrikant.bhosle@somaiya.edu</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
