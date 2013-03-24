<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 23:04
 * To change this template use File | Settings | File Templates.
 */

require_once('../core/PDOManager.php');

class PDOCommentManager
{

    public function addRespondPost($body, $job, $user_publish){
        try{
            $PDOManager = new PDOManager();
            $pdo= $PDOManager->newPDO();
            $commentRegister=$pdo->prepare("INSERT INTO comments (body, job, user_publish)VALUES(:body, :job, :user_publish) ");
            $commentRegister->execute(array(
                ':body'=> $body,
                ':job'=> $job,
                ':post' => $user_publish
            ));

        new RespondPost ($pdo->lastInsertId(), $body, $job, $user_publish);
        }catch (Exception $e){

            echo 'error create comment';
        }

    }

}
