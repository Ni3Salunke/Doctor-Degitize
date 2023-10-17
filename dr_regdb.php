<?php

include('dbcon/conncetion.php');

if(isset($_POST['submits']))
{
$name=$_POST['name'];
$email = $_POST['email'];
$ano = $_POST['ano'];
$pno = $_POST['pno'];
$ino = $_POST['ino'];
$passwordd = $_POST['passwordd'];
$password = $_POST['password'];

$query = "INSERT INTO `doctor_registration`(Name, Email, AadharCard, PanCard, IMR_Number, Password, Confirm_Password) VALUES ('$name','$email','$ano','$pno','$ino','$passwordd','$password')";
$query_run = mysqli_query($conn, $query);

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