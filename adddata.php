<?php
   
        $conn = mysqli_connect("localhost","root","","forms","3307");

        if(!$conn)
        {
            echo "Can't Connect to the Database";
        
        }

        // $query1 = "SELECT uname from table1 where uname='$uname'";
        // $result1=mysqli_query($conn,$query1);
        // $row=mysqli_fetch_assoc($result1);
       
        // if($row['flag'] != 1)
        // {
            $uname = $_POST['uname'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $faname = $_POST['faname'];
            $moname = $_POST['moname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $nmail = $_POST['nmail'];
            $dept = $_POST['dept'];
            $flag = 0;
            $query = "INSERT INTO table1 (fname,lname,faname,moname,phone,email,nmail,dept,flag) VALUES('$fname','$lname','$faname','$moname','$phone','$email','$nmail','$dept','$flag');";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                echo "<script> alert('Info stored successfully');location.href = 'logout.php';</script>";                   
                exit();
            }
            else
            {
                echo "<script>alert('Info update failed');location.href = 'admin.php';</script>";
            }
        // }
?>