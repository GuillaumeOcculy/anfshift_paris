<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 14:28
 * To change this template use File | Settings | File Templates.
 */

// $a=2;
// $b=3;
//
//function somme($c, $d){
//    return $c+$d;
//}
//
//
//$resultat = somme($a,$b);
//
//echo $resultat;



require_once('../core/PDOManager.php');
require_once('PDOUserManager.php');
require_once('../model/User.php');

session_start();

//REGISTER
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['job'])){
    if($_POST['password'] == $_POST['confirmPassword']){

        $PDOUserManager = new PDOUserManager();
        $userRegister = $PDOUserManager->createUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['job']);

        $_SESSION['firstname'] = $userRegister->getFirstname();
        $_SESSION['lastname'] = $userRegister->getLastname();
        $_SESSION['email'] = $userRegister->getEmail();
        $_SESSION['job'] = $userRegister->getJob();

//        $to = 'occuly.guillaume@gmail.com';
//    $subject = "Test mail";
//    $message = "Hello!";
//    $from = "someonelse@example.com";
//    $headers = "From:" . $from;
//        mail($to,$subject,$message);
//
//        echo "Mail Sent.";

        header('Location:/anfshift/view/dashboard.php');

    }
}

else{
    echo 'pas cool';
}