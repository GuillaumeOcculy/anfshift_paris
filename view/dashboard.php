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

    $PDOPostManager = new PDOPostManager();
    $post = $PDOPostManager->findPostByJob($_SESSION['job']);
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

    <section>
      <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <div class="hero-unit">
              <h4><?php echo $_SESSION['firstname'] .' ' . $_SESSION['lastname'];?></h4>
              <p><?php echo $_SESSION['job'];?></p>

              <form class="form-inline" action="../controller/check_post.php" method="POST">
                <input type="date" max="2013-12-31" min="2013-03-07" value="2013-03-01" name="date" required>
                <input type="time" name="time"  value="10:00" required>
                
                <textarea name="body" cols="30" rows="5" placeholder="For monday at 15:00" required></textarea>
                <button type="submit" class="btn btn-inverse btn-large">Publish</button>
              </form>

            </div>

          </div>
          <div class="span8">

            <div class="hero-unit">

                <h3>Shifts posts</h3>
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Message</th>
                </tr>

                <tbody>
                  <?php
                        foreach($post as $posts){
                            echo '<tr><td>' .$posts['date_publish'].'</td>' ;
                            echo '<td>' .$posts['time_publish'].'</td>' ;
                            echo '<td>' .$posts['body'].'</td>' ;
                            echo '<td><a href="respond_post.php?id='.$posts['id'].'">Reply</a></td></tr>';
                        }
                  ?>
                </tbody>
              </table>

            </div>


          </div>

        </div>

      </div>

    </section>
    




  </body>
  </html>