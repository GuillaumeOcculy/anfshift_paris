<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 20:24
 * To change this template use File | Settings | File Templates.
 */
require_once('../core/PDOManager.php');
require_once('PDOPostManager.php');
require_once('../model/Post.php');
session_start();

$user_publish = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];

if(isset($_POST['date']) && isset($_POST['body'])){
    $PDOPostManager = new PDOPostManager();
    $PDOPostManager->createPost($_POST['date'], $_POST['body'], $_SESSION['job'] , $user_publish);
    header('Location:/anfshift/view/dashboard.php');
}