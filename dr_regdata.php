<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$ano = $_POST['ano'];
$pno = $_POST['pno'];
$ino = $_POST['ino'];
$passwordd = $_POST['passwordd'];
$password = $_POST['password'];

$con = mysqli_connect('localhost','root','','reg');

$query = "INSERT INTO `registration`(`name`, `email`, `ano`, `pno`, `ino`, `passwordd`,'password') VALUES ('$name','$email' ,'$ano','$pno','$ino','$passwordd','$password')";

$run = mysqli_query($con, $query);

if($run == TRUE)
    echo "Data insert Successfully";
else
    echo "Error !";
?>