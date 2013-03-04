<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 23:02
 * To change this template use File | Settings | File Templates.
 */
class Comment
{

      private $id, $job, $user_publish, $post, $body;

    function __construct($id, $body, $job, $post, $user_publish)
    {
        $this->body = $body;
        $this->id = $id;
        $this->job = $job;
        $this->post = $post;
        $this->user_publish = $user_publish;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function setPost($post)
    {
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setUserPublish($user_publish)
    {
        $this->user_publish = $user_publish;
    }

    public function getUserPublish()
    {
        return $this->user_publish;
    }


}
