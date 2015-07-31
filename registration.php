<?php
    require_once 'connect.php';
    include 'header.php';
?>

    
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get" role="form">
    	<legend>Register</legend>
    
    	<div class="form-group">
    		<label for="">First name:</label>
    		<input type="text" class="form-control" name="firstname" id="" placeholder="first name...">
    	</div>

        <div class="form-group">
            <label for="">Last name:</label>
            <input type="text" class="form-control" name="lastname" id="" placeholder="last name...">
        </div>

        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" class="form-control" name="email" id="" placeholder="email ...">
        </div>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" class="form-control" name="password" id="" placeholder="password...">
        </div>
        <div class="form-group">
            <label for="">Re-enter Password:</label>
            <input type="password" class="form-control" name="repassword" id="" placeholder="re enter password...">
        </div>
         <div class="radio">
         	<label>
         		<input type="radio" name="gender" id="gender" value="male" checked="checked">
         		Male
         	</label>
             <label>
                 <input type="radio" name="gender" id="gender" value="female" checked="checked">
                 Female
             </label>
         </div>

        <div class="form-group">
            <label for="">Birthdate:</label>
            <input type="date" class="form-control" name="date" id="" placeholder="email ...">
        </div>

    	<input type="submit" class="btn btn-primary" name="registerbtn" value="Register"/>
    </form>

<?php

    if (isset($_REQUEST['registerbtn'])) {

        $firstname = htmlspecialchars($_REQUEST['firstname']);
        $lastname = htmlspecialchars($_REQUEST['lastname']);
        $email = htmlspecialchars($_REQUEST['email']);
        $password = htmlspecialchars($_REQUEST['password']);
        $repassword = htmlspecialchars($_REQUEST['repassword']);
        $date = htmlspecialchars($_REQUEST['date']);
        $gender = $_REQUEST['gender'];

        /* first we need to check if password matches
            if not then set error
        */
        if ($password != $repassword) {
            echo "Password does not match";
        } else {
            $password = sha1($password);
            $query = "insert into registration(id,firstname,lastname,gender,
                          email,password,birthdate) VALUES (NULL,
                            '$firstname','$lastname','$gender',
                            '$email','$password','$date');";
            $result = mysql_query($query);
            if (!$result) {
                echo "Failed to register. Try again please.";
            }
            else{
                echo "Successfully registered.";
                echo "<p><a href='login.php'>Login</a></p>";
            }
        }


    }
    include 'footer.php';
?>
