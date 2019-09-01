<?php

    $username = $_POST['user-to-del'];
    $connect = mysqli_connect('localhost','root','Matiozo1w!','accounts');
    $sql = "DELETE FROM users WHERE username = '$username'";
    mysqli_query($connect,$sql);
    header('location:index.php');

?>