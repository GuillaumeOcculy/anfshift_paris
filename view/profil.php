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