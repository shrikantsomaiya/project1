<?php
   
        $conn = mysqli_connect("localhost","root","","forms","3307");

        if(!$conn)
        {
            echo "Can't Connect to the Database";
        
        }
       
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];
        
            $query1 = "SELECT uname from table1 where uname='$uname'";
            $result1=mysqli_query($conn,$query1);
            $row=mysqli_fetch_assoc($result1);

            if(!isset($row))
            {
                if($confirm==$pass)
                {
                    $crypt = password_hash($pass, PASSWORD_BCRYPT);
                    $query = "INSERT INTO login1 (uname,pass) VALUES('$uname','$crypt');";
                    $result = mysqli_query($conn,$query);

                    if($result)
                    {
                        echo "<script> alert('User added successfuly');location.href = 'dashboard.php';</script>";
                        exit();
                    }
                    else
                    {
                        echo "<script>alert('User creation failed');location.href = 'createuser.php;";
                    }
                }
                else{
                        echo "<script> alert('Passwords do not match'); location.href = 'createuser.php';</script>";
                }
            }
            else{
                echo "<script> alert('Username already exists'); location.href = 'createuser.php';</script>";
            }
?>
