<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 04/03/13
 * Time: 00:18
 * To change this template use File | Settings | File Templates.
 */

require_once('../controller/PDOUserManager.php');
session_start();

$PDOUserManager = new PDOUserManager();
$PDOUserManager->deleteUser($_SESSION['email']);
