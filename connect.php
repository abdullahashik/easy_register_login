<?php
    $link = mysql_connect("localhost", "username", "password");
    if ($link) {
        mysql_select_db('thecodders');
    } else {
        die("Error connecting to database");
    }

?>
