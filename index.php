<?php
    session_start();
    require_once 'connect.php';
    include 'header.php';
    if(!$_SESSION['loggedin'])
        header("location:login.php");
    else{

        echo "<div class='jumbotron'>";
        echo "<h3>You are logged in</h3>";
        echo "<p><a href='logout.php'>Logout</a></p>";
        echo '</div>';

    }
?>
