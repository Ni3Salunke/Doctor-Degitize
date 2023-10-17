<?php
session_start();
include('config/dbcon/conncetion.php');

if(isset($_POST['paitent_existing.php']))
{
    $Email = $_POST['name'];
    $password = $_POST['age']

    $log_query = "SELECT * FROM paitent_registration WHERE Email='$Email' AND password='$password' LIMIT 1";
    $log_query_run = mysqli_query($conn, $log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $rows){
            $user_Name = $rows['Name'];
            $user_Sex = $rows['Sex'];
            $user_Age = $rows['Age'];
        }   
        
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_Name'=> $user_Name,
            'user_Sex'=> $user_Sex,
            'user_Age'=> $user_Age,
        ];

        $_SESSION['status'] = "Logged in Sucessfully";
        header('location: index.php');
    }
    else{
        $_SESSION['status'] = "Invalid Password or Email";
        header('location: paitent_existing.php');
    }

}
else{
    $_SESSION['status'] = " ACCESS DENIED";
    header('location: paitent_existing.php');
}

?>