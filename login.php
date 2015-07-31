<?php
    session_start();
    require_once 'connect.php';
    include 'header.php';
?>

    <style >
        body {
            margin: 140px auto !important;
        }
    </style >
    <form class="form-signin" >
        <h2 class="form-signin-heading" >Sign in</h2 >
        <label for="inputEmail" class="sr-only" >Email address</label >
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required
               autofocus >
        <label for="inputPassword" class="sr-only" >Password</label >
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required >
        <br />
        <input name="login" type="submit" class="btn btn-sm btn-primary " type="login" value="Sign in" />
        <a href="registration.php" class="btn btn-success">Register</a>
    </form >

<?php

    if (isset($_REQUEST['login'])) {
        $email = htmlspecialchars($_REQUEST['email']);
        echo "<br/>";
        $password = htmlspecialchars($_REQUEST['password']);
        "<br/>";
        $password = sha1($password);
        echo "<br/>";
        $query = "select *from registration where email='" . $email . "'
                      and password = '" . $password . "'";
        $result = mysql_query($query);
        $num_row = mysql_num_rows($result);
        if ($num_row > 0) {
            $_SESSION['loggedin'] = true;
            echo "Successfully logged in";
            echo '<meta http-equiv="refresh"
   content="0; url=index.php">';
        }

    }
?>
<?php include 'footer.php'; ?>
