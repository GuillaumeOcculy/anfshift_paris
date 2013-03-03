<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 14:29
 * To change this template use File | Settings | File Templates.
 */
class User
{
    private $id, $firstname, $lastname, $email, $password, $job;

    function __construct($id, $firstname, $lastname, $email, $password, $job)
    {
        $this->email = $email;
        $this->firstname = $firstname;
        $this->id = $id;
        $this->job = $job;
        $this->lastname = $lastname;
        $this->password = $password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstname()
    {
        return $this->firstname;
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

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }




}
