<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 15:15
 * To change this template use File | Settings | File Templates.
 */

require_once('../core/PDOManager.php');
require_once('../model/User.php');
class PDOUserManager
{
    public function addUser($firstname, $lastname, $email, $password,  $job){
        try{
            $PDOManager = new PDOManager();
            $pdo = $PDOManager->newPDO();
            $results = $pdo->prepare('INSERT INTO users (firstname, lastname, email, password, job) VALUES (:firstname, :lastname, :email, :password, :job)');
            $results->execute(array(
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':email' => $email,
                ':password' => $password,
                ':job' => $job
            ));

            $user=new User($pdo->lastInsertId(), $firstname, $lastname, $email, $password, $job);

            return $user;

        }catch (Exception $e){
            echo 'error register';
        }
    }

    public function authenticate($email, $password){
        try{
            $PDOManager = new PDOManager();
            $pdo = $PDOManager->newPDO();
            $results = $pdo->query("SELECT * FROM users WHERE email= '$email' AND password='$password'");
            $results= $results->fetch(PDO::FETCH_ASSOC);
            $user = new User($results['id'], $results['firstname'], $results['lastname'], $results['email'], $results['password'], $results['job']);

            return $user;
        }catch (Exception $e){
            echo 'error authenticate';
        }
    }
}
