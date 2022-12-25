<!DOCTYPE html>
<html>
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
    <div class = "container-fluid2 bg-2 text-center">
        <h1>Create New User</h1>
        <form method="POST" action="adduser.php">
        <div class = "row">
            <div class = "col">
                <label >Create Username:</label><br>
                <input type="text" name="uname" id="box"><br>
                <br>
                <label >Create Password:</label><br>
                <input type="password" name="pass" id="box"><br><br>
                <label >Confirm Password:</label><br>
                <input type="password" name="confirm" id="box"><br><br>
            </div>
            <input type="submit" value="Submit">
        </form>
        <br>
        <br>
        <a href="dashboard.php" class="btn btn-primary">
        <i class='fas fa-chalkboard'></i> Homepage
        </a>
    </div>
    <div class="container-fluid bg-5 text-center">
        <p>Send suggestions by mail: <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrkVrPMhbcMnQPggTpQsgqkcLBtBmprnLvPTwPxljCctjKxZDfhwLJLlLKnvrChfTZFsJV">shrikant.bhosle@somaiya.edu</a></p>
</div>

</body>
</html>
