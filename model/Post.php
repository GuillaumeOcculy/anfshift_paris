<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 17:10
 * To change this template use File | Settings | File Templates.
 */
class Post
{
    private $id, $body, $job, $user , $date, $time;

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    function __construct($id, $body, $job, $user, $date)
    {
        $this->body = $body;
        $this->id = $id;
        $this->job = $job;
        $this->user = $user;
        $this->date = $date;
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

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }



}
