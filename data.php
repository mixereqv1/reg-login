<?php
    $db = mysqli_connect('localhost', 'root', 'encoded', 'accounts');
    $sql = 'SELECT * FROM users';
    $result = mysqli_query($db,$sql);
    $users = [];
    while($row = mysqli_fetch_assoc($result)){
        $users[] = $row['username'];
    }
    $usersJSON = json_encode($users);
    echo $usersJSON;
?>
