<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 19:46
 * To change this template use File | Settings | File Templates.
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>AnfShift</title>
</head>
<body>
<h1>Login</h1>


<form action="../controller/check_login.php" method="POST">

    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">Sign in </button>

</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>