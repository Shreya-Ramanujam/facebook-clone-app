<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"DELETE from userdata WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/facebookclone");
    }
?>