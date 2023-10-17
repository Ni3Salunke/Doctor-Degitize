<?php 

$name = $_POST['name'];
$email = $_POST['radio'];
$aadhar = $_POST['age'];
$pan = $_POST['data'];
$certi = $_POST['email'];
$pass = $_POST['number'];
$aadhar = $_POST['height'];
$pan = $_POST['weight'];
$certi = $_POST['bp'];
$pass = $_POST['bg'];
$aadhar = $_POST['occ'];
$pan = $_POST['password'];
$certi = $_POST['cpassword'];

$con = mysqli_connect('localhost','root','','reg');

$query = "INSERT INTO `registration`(`name`, `radio`, `age`, `data`, `email`, `number``height`, `weight`, `bp`, `bg``occ`, `password`, `cpassword`) VALUES ('$name','$radio' ,'$age','$data ','$email','$number' '$height' ,'$weight','$bp ','$bg','$occ' '$password','$cpassword' )";

$run = mysqli_query($con, $query);

if($run == TRUE)
    echo "Data insert Successfully";
else
    echo "Error !";

?>