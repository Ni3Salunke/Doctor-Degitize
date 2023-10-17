<?php

include('dbcon/conncetion.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$dob = $_POST['date'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bp = $_POST['bp'];
$bg = $_POST['bg'];
$occ = $_POST['occ'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = "INSERT INTO paitent_registration (Name, Sex, Age, DOB, Email, MoNumber, Height, Weight, BloodPressure, BloodGroup, Occupation, password, cpassword) VALUES ('$name','$sex','$age','$dob','$email','$mobile','$height','$weight','$bp','$bg','$occ','$password','$cpassword')";
$query_run= mysqli_query($conn, $query);

if($query_run)
{
    echo "<script>alert('Information save succesfully')</script>";
    header('Location: paitent_existing.php');
}
else{
    echo "Something went wrong";
}
}
?>