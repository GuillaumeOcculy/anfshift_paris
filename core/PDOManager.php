<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 03/03/13
 * Time: 14:21
 * To change this template use File | Settings | File Templates.
 */
class PDOManager
{
    private $PDO_DB = "anfshift";
    private $PDO_USR = "root";
    private $PDO_PAS = "";

    public function newPDO(){

        try{
            $pdoaaa = new PDO("mysql:host=localhost;dbname=".$this->PDO_DB, $this->PDO_USR, $this->PDO_PAS);
            return $pdoaaa;
        }
        catch( PDOException $e){
            die("Erreur de connexion à PDO");
        }
    }

}

$PDOManager = new PDOManager();
$pdo = $PDOManager->newPDO();