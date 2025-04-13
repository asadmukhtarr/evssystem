<?php 
     $name = $_POST['name']; // name ..
     $email = $_POST['email']; // email ...
     $dob = $_POST['dob']; // date of birth ...
     $gender = $_POST['gender']; // gender ...
     $id = $_GET['id']; // passing id ..
     include('cn.php'); // connection ..
     $query = "UPDATE `users` SET name='$name',email='$email',dob='$dob',gender='$gender' WHERE id='$id'";
     mysqli_query($cn,$query) or die('cant update data');
     $success = "User Updated Succesfully";
     header('Location:../home.php?success='.$success);  