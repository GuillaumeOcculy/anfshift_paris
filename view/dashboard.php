<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: occul_000
     * Date: 03/03/13
     * Time: 17:27
     * To change this template use File | Settings | File Templates.
     */


    require_once('../controller/PDOPostManager.php');


    session_start();

    echo $_SESSION['firstname'];
    echo $_SESSION['job'];

    $PDOPostManager = new PDOPostManager();
    $post = $PDOPostManager->findPostByJob($_SESSION['job']);



    ?>

<!DOCTYPE html>
<html>
<head>
    <title>AnfShift</title>
</head>
<body>
<a href="logout.php">Log out</a>
<h1>Login</h1>
<a href="profil.php">Profil</a>
<form action="../controller/check_post.php" method="POST">
    <input type="date" max="2013-12-31" name="date" required>
    <input type="time" name="time"  value="10:00" required>
    <input type="text" name="body" placeholder="For..." required>
    <button type="submit">Publish</button>
</form>

<table>
    <tr>
        <th>Date</th>
        <th>Body</th>
        <th>Author</th>
    </tr>

<tbody>
<?php
    foreach($post as $posts){
    echo '<tr><td>' .$posts['date_publish'].'</td>' ;
    echo '<td>' .$posts['body'].'</td>' ;
    echo '<td>' .$posts['user_publish'].'</td>' ;
    echo '<td><a href="comment.php?id='.$posts['id'].'">Answer</a></td></tr>';
}

?>
    </tbody>
</table>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>