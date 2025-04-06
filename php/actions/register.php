<?php 
    $name = $_POST['name']; // name ..
    $email = $_POST['email']; // email ...
    $password = $_POST['password']; // password ...
    $cpassword = $_POST['confirm_password']; // confirm password ..
    $dob = $_POST['dob']; // date of birth ...
    $gender = $_POST['gender']; // gender ...
    // condition ...
    if($password == $cpassword){
        include('cn.php'); // for connection ...
        $result = mysqli_query($cn,"SELECT * FROM `users` WHERE email='$email'");
        $rows = mysqli_num_rows($result); // will count number of rows ..
        if($rows > 0){
             // redirect ..
            $warning = "Email is already exist";
            header('Location:../register.php?warning='.$warning);
        } else {
            $query = "INSERT INTO `users`(name,email,password,gender,dob) VALUES ('$name','$email','$password','$gender','$dob')";
            mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
             // redirect ..
             $success = "User Registered Succesfully";
             header('Location:../register.php?success='.$success);   
        }
    } else {
        // redirect ..
        $warning = "Password Did Not Matched";
        header('Location:../register.php?warning='.$warning);
    }
?>