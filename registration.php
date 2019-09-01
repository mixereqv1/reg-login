<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

        <title>Rejestracja</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>

    <body>

        <div class="form-wrapper">
            <header>
                Rejestracja
            </header>
            <form method="POST" action="registration.php" class="form">
                <div class="form-group">
                    <label class="form-label" for="login">Podaj swój login...</label>
                    <input name="username" id="login" class="form-input" type="text" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Podaj swój email...</label>
                    <input name="email" id="email" class="form-input" type="email" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="pass1">Podaj swoje hasło...</label>
                    <input name="password_1" id="pass1" class="form-input" type="password" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="pass2">Potwierdź swoje hasło...</label>
                    <input name="password_2" id="pass2" class="form-input" type="password" />
                </div>
                <input name='reg_user' type="submit" id="form-submit" class="form-submit" value="Zarejestruj">
                <p>
                    Już masz konto? <a href="login.php">Zaloguj się</a>
                </p>
            </form>
        </div>

        <script src="main.js"></script>
    </body>

</html>