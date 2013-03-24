<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 17:15
 * To change this template use File | Settings | File Templates.
 */

require_once('../core/PDOManager.php');
require_once('../model/Post.php');
class PDOPostManager
{
    public function createPost($date, $time, $body, $user, $job){
        try{
            $PDOManager = new PDOManager();
            $pdo = $PDOManager->newPDO();
            $postRegister = $pdo->prepare("INSERT INTO posts (date_publish, time_publish, body, job, user_publish)VALUES(:date_publish, :time_publish, :body, :job, :user_publish)");
            $postRegister->execute(array(
                ':date_publish' => $date,
                'time_publish' => $time,
                ':body' => $body,
                ':job' => $job,
                ':user_publish' => $user
            ));

        }catch (Exception $e){
            echo 'error createPost';
        }

    }

    public function findPostByJob($job){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $postFindPostByJob = $pdo->query("SELECT id, DATE_FORMAT(date_publish, '%d/%m') AS date_publish, time_publish, body, user_publish FROM posts WHERE job='$job' ORDER BY date_publish DESC");
        $results = $postFindPostByJob->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function findAllPost(){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $postFindAllPost = $pdo->query("SELECT * FROM posts");
        $results = $postFindAllPost->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function findPostByUser($user_publish){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $findPostByUser = $pdo->query("SELECT * FROM posts WHERE user_publish = '$user_publish' ");
        $results = $findPostByUser->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function findPostById(){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $findPostById = $pdo->prepare("SELECT DATE_FORMAT(date_publish, '%d/%m') AS date_publish, time_publish, user_publish, body FROM posts WHERE id = :id");
        $findPostById->execute(array(
            ":id" => $_GET['id']
        ));
        $results = $findPostById->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function countPostByUser($user){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $countPostByUser = $pdo->query("SELECT count(*) AS number_post_by_user WHERE user_publish = '$user'");
        $results = $countPostByUser->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function countPostByJob($job){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $countPostByJob = $pdo->query("SELECT * FROM posts WHERE job = '$job'");
        $results = $countPostByJob->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function countAllPost(){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();
        $countPostByJob = $pdo->query("SELECT COUNT(*) AS number_post ");
        $results = $countPostByJob->fetchAll(PDO::FETCH_BOTH);

        return $results;
    }

    public function deletePostById($id){
        $PDOManager = new PDOManager();
        $pdo = $PDOManager->newPDO();

        $pdo->exec("DELETE FROM posts WHERE id='$id'");
        
    }


}

