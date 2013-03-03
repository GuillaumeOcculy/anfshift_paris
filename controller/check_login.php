<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 17:49
 * To change this template use File | Settings | File Templates.
 */
require_once('PDOUserManager.php');

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    $PDOUserManager = new PDOUserManager();
    $auth = $PDOUserManager->authenticate($_POST['email'], $_POST['password']);

    $_SESSION['firstname'] = $auth->getFirstname();
    $_SESSION['lastname'] = $auth->getLastname();
    $_SESSION['email'] = $auth->getEmail();
    $_SESSION['job'] = $auth->getJob();

    header('Location:../view/dashboard.php');

}