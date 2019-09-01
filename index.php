<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Musisz najpierw się zalogować";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/home.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

        <title>Strona domowa</title>
    </head>

    <body>

        <main class='home-main'>
            <header>
                <h1>Strona domowa</h1>
            </header>
            <div class="content">
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
                <?php endif ?>

                <?php  if (isset($_SESSION['username'])) : ?>
                    
                    <span class='welcome'>Witaj <span><?php echo $_SESSION['username']; ?></span></span>
                    <a class='logout' href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Wyloguj</a>

                    <button class='show-users' id='show-users'>Pokaż wszystkich użytkowników</button>
                    <ol class='users-list'></ol>

                    <?php  if ($_SESSION['username'] == 'admin') : ?>
                        <form method='POST' action='user-del.php'>
                            <input class='name-del' type='text' name='user-to-del' placeholder='Podaj nazwę użytkownika...'>
                            <input class='submit-del' type='submit' value='Usuń'>
                        </form>
                    <?php endif ?>
                <?php endif ?>
            </div>
        </main>

        <script src='index.js'></script>
    </body>

</html>