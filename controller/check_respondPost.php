<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 24/03/13
 * Time: 08:59
 * To change this template use File | Settings | File Templates.
 */

require_once('../core/PDOManager.php');
require_once('PDORespondPostManager.php');
require_once('../model/RespondPost.php');
session_start();

$user_publish = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];

if(isset($_POST['body'])){
    $PDORespondPostManager = new PDORespondPostManager();
    $PDORespondPostManager->createRespondPost($_POST['body'], $user_publish, $_SESSION['job']);
    header('Location:/anfshift/view/dashboard.php');
}

else{
    echo 'error checkpost';
}