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
            new Post($pdo->lastInsertId(), $date, $time, $body, $user, $job);
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


}

