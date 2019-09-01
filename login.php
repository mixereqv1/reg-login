<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
        <link rel="shortcut icon" href="../img/Avatar.jpg">
        <title>Logowanie</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>

    <body>

        <div class="form-wrapper">
                <header>
                    Logowanie
                </header>
                <form method="POST" action="login.php" class="form">
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label class="form-label" for="login1">Podaj swój login...</label>
                        <input name="username" id="login1" class="form-input" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pass">Podaj swoje hasło...</label>
                        <input name="password" id="pass" class="form-input" type="password" />
                    </div>
                    <input name='login_user' type="submit" id="form-submit" class="form-submit" value="Zaloguj">
                    <p>
                        Nie masz jeszcze konta? <a href='registration.php'>Zarejestruj się</a>
                    </p>
                </form>
            </div>

        <script src="main.js"></script>
    </body>

</html>