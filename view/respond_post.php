<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: occul_000
     * Date: 03/03/13
     * Time: 17:27
     * To change this template use File | Settings | File Templates.
     */

    require_once('../controller/PDOPostManager.php');

    session_start();
    if (!isset($_SESSION['email'])) {
        # code...
        header('Location:login.php');
    }

$user_publish = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
    $PDOPostManager = new PDOPostManager();
    $post = $PDOPostManager->findPostById();
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>AnfShift</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../docs/assets/css/bootstrap.css">
        <meta charset="utf-8">
        <link rel="stylesheet" href="../docs/assets/css/style.css">
    </head>
    <body>
    <header>
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Abercrombie & Fitch</a>
                    <ul class="nav pull-right">
                        <li><a href="profil.php" class="btn btn-link btn-large ">Profil</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="logout.php" class="btn btn-link btn-large ">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="respond-post">

        <div class="container">
            
            <div class="view-post">
                <p>
                    <?php
                    foreach($post as $posts){
                        echo $posts['user_publish'] . ' wants change his shift on ' ;
                        echo $posts['date_publish'] . ' at ' ;
                        echo $posts['time_publish'] .'<br>'.' <br>' ;
                        echo $posts['body'];
                    }
                    ?>
                </p>

            </div>

            <div class="respond-post">
                <form class="form-inline">

                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-pencil"></i></span>
                        <input type="text" name="body" class="input-small" placeholder="I want this against...">
                        <button type="submit" class="btn">Answer</button>
                    </div>

                </form>
            </div>

        </div>

    </section>

    </body>
    </html>