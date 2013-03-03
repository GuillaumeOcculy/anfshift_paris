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
    <script type="text/javascript">
        $(function(){
            $("#formcom").submit(function(){
                alert("test");
            });
        });
    </script>
</head>
<body>



<h1>hello</h1>

<form action="../controller/check_register.php" method="POST" id="formcom">
    <input type="text" name="firstname" placeholder="firstname" >
    <input type="text" name="lastname" placeholder="lastname" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="password" name="confirmPassword" placeholder="confirmPassword">

    <select name="job" required>

        <option value="cashier">Cashier</option>
        <option value="impact1">Impact 1</option>
        <option value="impact2">Impact 2</option>
        <option value="model">Model</option>
        <option value="ops">OPS</option>
        <option value="stylist">Stylist</option>

    </select>
    <button type="submit">Create an account</button>
</form>



</body>
</html>

