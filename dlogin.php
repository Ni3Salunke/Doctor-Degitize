<?php
session_start();
include('config/dbcon/conncetion.php');

if(isset($_POST['doctorlogin.php']))
{
    $IMR_Number = $_POST['email'];
    $Password = $_POST['password']

    $log_query = "SELECT * FROM doctor_registration WHERE Email='$email' AND password='$Password' LIMIT 1";
    $log_query_run = mysqli_query($conn, $log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $rows){
            $user_Name = $rows['Name'];
            $user_Email = $rows['Email'];
            $user_IMR_Number = $rows['IMR_Number'];
        }   
        
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_Name'=> $user_Name,
            'user_Email'=> $user_Email,
            'user_IMR_Number'=> $user_IMR_Number,
        ];

        $_SESSION['status'] = "Logged in Sucessfully";
        header('location: index.php');
    }
    else{
        $_SESSION['status'] = "Invalid Password or Email";
        header('location: doctorlogin.php');
    }

}
else{
    $_SESSION['status'] = " ACCESS DENIED";
    header('location: doctorlogin.php');
}

?>