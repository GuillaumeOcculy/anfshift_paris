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
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="/twitter-bootstrap/twitter-bootstrap-v2>
/js/bootstrap-modal.js"></script>
  <link rel="stylesheet" href="../docs/assets/css/bootstrap.css">
  <link rel="stylesheet" href="../docs/assets/css/style.css">

  <link rel="stylesheet" href="../docs/assets/js/bootstrap-modal.js">
  <link rel="stylesheet" href="../docs/assets/js/bootstrap.js">
  <link rel="stylesheet" href="../docs/assets/js/bootstrap-transition.js">
  <link rel="stylesheet" href="../docs/assets/js/jquery.js">
  <link rel="stylesheet" href="../js/bootstrap-modal.js">
  <link rel="stylesheet" href="../js/bootstrap-transition.js">

  
</head>
<body>

<div class="container">  
<h2>Example of creating Modals with Twitter Bootstrap</h2>  
<div id="example" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal">×</a>  
<h3>This is a Modal Heading</h3>  
</div>  
<div class="modal-body">  
<h4>Text in a modal</h4>  
<p>You can add some text here.</p>                
</div>  
<div class="modal-footer">  
<a href="#" class="btn btn-success">Call to action</a>  
<a href="#" class="btn" data-dismiss="modal">Close</a>  
</div>  
</div>  
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>  
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>  


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


        <form class="form-horizontal" action="../controller/check_register.php" method="POST" >

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
      <option value="impact1">Impact 1</option>
      <option value="impact2">Impact 2</option>
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

<a href="delete_account.php" class="btn btn-danger btn-large">Delete account</a>


<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

</div>
</div>
</div>
</div>
</section>















<a href="delete_account.php">Delete account</a>

<form action="../controller/check_profil.php" method="POST" id="formcom">
    <input type="text" name="firstname" value="<?php echo $_SESSION["firstname"]  ?>" placeholder="firstname" >
    <input type="text" name="lastname" value="<?php echo $_SESSION["lastname"]  ?>" placeholder="lastname" required>
    <input type="text" name="email" value="<?php echo $_SESSION["email"]  ?>" placeholder="email" required>
    <input type="password" name="password"  placeholder="password" required>
    <input type="password" name="confirmPassword" placeholder="confirmPassword">

    <select name="job" required>

        <option value="cashier">Cashier</option>
        <option value="impact1">Impact 1</option>
        <option value="impact2">Impact 2</option>
        <option value="model">Model</option>
        <option value="ops">OPS</option>
        <option value="stylist">Stylist</option>

    </select>
    <button type="submit">Update profil</button>
</form>