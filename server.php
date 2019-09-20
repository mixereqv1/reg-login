<?php
    session_start();

    $username = '';
    $email = '';
    $errors = array();

    $connect = mysqli_connect('localhost','root','encoded','accounts');

    //registration
    if (isset($_POST['reg_user'])) {
        $login = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);

        //Validation form
        if (empty($login)){ 
            array_push($errors, 'Login jest wymagany'); 
        }
        if (empty($email)) { 
            array_push($errors, "Email jest wymagany"); 
        }
        if (empty($password_1)) { 
            array_push($errors, "Hasło jest wymagane"); 
        }
        if($password_1 != $password_2) {
            array_push($errors, 'Hasła muszą być identyczne');
        }


        //Checking if user exists
        $user_check = "SELECT * FROM users WHERE username = '$login' OR email = '$email'";
        $result = mysqli_query($connect,$user_check);
        $user = mysqli_fetch_assoc($result);

        if($user['username'] === $login) {
            array_push($errors,'Login jest zajęty');
        }
        if($user['email'] === $email) {
            array_push($errors,'Email jest zajęty');
        }


        //Adding user to database
        if(count($errors) == 0) {
            $password = md5($password_1);

            $query = "INSERT INTO users VALUES(null,'$login','$email','$password')";
            mysqli_query($connect,$query);
            $_SESSION['username'] = $login;
            $_SESSION['success'] = 'Jesteś zalogowany';
            header('location: index.php');
        }
    }
    


    //login
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        if(empty($username)) {
            array_push($errors,'Login jest wymagany');
        }
        if(empty($password)) {
            array_push($errors,'Hasło jest wymagane');
        }

        if(count($errors) == 0) {
            $password = md5($password);
            
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($connect,$query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = 'Jesteś zalogowany';
                header('location: index.php');
            }
            else{
                array_push($errors,'Konto z takim loginem/hasłem nie istnieje');
            }
        }
    }

?>
