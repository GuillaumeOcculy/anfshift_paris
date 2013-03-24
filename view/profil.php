<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 23:45
 * To change this template use File | Settings | File Templates.
 */
session_start();

if (!isset($_SESSION['email'])) {
      # code...
  header('Location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>AnfShift</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <meta charset="utf-8">
  <link rel="stylesheet" href="../docs/assets/css/bootstrap.css">
  <link rel="stylesheet" href="../docs/assets/css/style.css">
  <script src="../docs/assets/js/bootstrap.js"></script>

<body>

  <header>
     <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="#">Abercrombie & Fitch</a>
            <ul class="nav pull-right">   
              <li><a href="dashboard.php" class="btn btn-link btn-large ">Home</a></li>
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
          <h4>Stats</h4>
          <p>posts</p>
          <p>comments</p>
      </div>

  </div>
  <div class="span8">

    <div class="hero-unit">

        <h3>Profil</h3>


        <form class="form-horizontal" action="../controller/check_profil.php" method="POST" >

            <div class="control-group">
              <div class="controls">
                <input type="text" name="firstname" value="<?php echo $_SESSION["firstname"]  ?>" placeholder="Firstname" required>
            </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="text" name="lastname" value="<?php echo $_SESSION["lastname"]  ?>" placeholder="Lastname" required>
        </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <input type="email" name="email" value="<?php echo $_SESSION["email"]  ?>" placeholder="E-mail" required>
    </div>
</div>

<div class="control-group">
  <div class="controls">
    <input type="password" name="password"  placeholder="Password" required>
</div>
</div>

<div class="control-group">
  <div class="controls">
    <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
</div>
</div>

<div class="control-group">
  <div class="controls">

    <select name="job" required>
      <option value="cashier">Cashier</option>
      <option value="impact_1">Impact 1</option>
      <option value="impact_2">Impact 2</option>
      <option value="model">Model</option>
      <option value="stylist">Stylist</option>
  </select>

</div>
</div>

<div class="control-group">
  <div class="controls">
    <button type="submit" class="btn btn-large ">Update</button>

</div>

</div>

</form>

<!--<a href="delete_account.php" class="btn btn-danger btn-large">Delete account</a>-->


<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn btn-danger btn-large" data-toggle="modal">Delete account</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Warning</h3>
  </div>
  <div class="modal-body">
    <p>You will destroy your account</p>
    <p>Are you sur ?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <a href="delete_account.php" class="btn btn-danger">Destroy account</a>
  </div>
</div>

</div>
</div>
</div>
</div>
</section>




<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>


</html>