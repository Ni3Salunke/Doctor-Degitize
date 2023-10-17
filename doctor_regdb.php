<?php

include('dbcon/conncetion.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$sex = $_POST['email'];
$age = $_POST['ano'];
$dob = $_POST['pno'];
$email = $_POST['ino'];
$mobile = $_POST['passwordd'];
$height = $_POST['password'];

$query = "INSERT INTO `doctor_registration`(`name`, `email`, `ano`, `pno`, `ino`, `passwordd`, `password`) VALUES ('$name','$email','$ano','$pno','$ino','$passwordd','$password')";
$query_run= mysqli_query($conn, $query);

if($query_run)
{
    echo "<script>alert('Information save succesfully')</script>";
    header('Location: dr_registration.php');
}
else{
    echo "Something went wrong";
}
}
?>