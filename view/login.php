<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 19:45
 * To change this template use File | Settings | File Templates.
 */

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
          <a href="register.php" class="btn btn-large btn-success">Sign up</a>
        </ul>        
      </div>
    </div>
  </div>
</header>

<section>



  <div class="container">

    <div class="info">
      <h3>Exchange shift,</h3>
      <h3>Open shift.</h3>
      <p class="lead">only for associates</p>
    </div>
    
    <div class="containerform">
      <form class="form-horizontal" action="../controller/check_login.php" method="POST" >

        
        <div class="control-group">
          <div class="controls">
            <input type="email" name="email" placeholder="E-mail" required>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="password" name="password" placeholder="Password" required>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-large btn-primary">Sign in</button>
          </div>
        </div>

      </form>

    </div>

    </div>

  </section>

</body>
</html>