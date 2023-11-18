<!DOCTYPE html>

<html>

<head>
    <title>
        Reset Password
    </title>
    <style>
        .error {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="styling.css">
</head>

<body background="mobile-login-concept-illustration_114360-135.jpg" align="center">

        <br><br><br><br>
    <?php

    $email = $error_email = "";
    $new_password = $error_new_password = "";
    $repeat_password = $error_repeat_password = "";
    $success = $success_password = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $error_email = "<br>Email is required";
        } else {
            $email = check_input($_POST["email"]);
            // check if e-mail address is in correct format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "<br>Invalid email";
            }
        }
        if (empty($_POST["new_password"])) {
            $error_new_password = "<br>New Password is Required";
        } else {
            $new_password = check_input($_POST["new_password"]);
            // Check if password contains valid input
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,10}$/", $new_password)) {
                $error_new_password = "<br>New password must contain at least one lowercase letter, one uppercase letter, one digit, and be at least 8 to 10characters long.";
            }
        }
        if (empty($_POST["repeat_password"])) {
            $error_repeat_password = "<br>Re-type your new password here";
        } else {
            $repeat_password = check_input($_POST["repeat_password"]);
            // Check if repeated password is the same as the new password
            if ($repeat_password != $new_password) {
                $error_repeat_password = "<br>Password not the same.";
            } else $success_password ="<br><br>Your passwords has been successfully reserted. <br>Click \"Go Back\", to go back to the SignIn page and Sign In with your credintials";
        
        }

    }
    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>
        <div class="forgotPassword">
    
        <h2> Set Your New Password </h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    
        <h4>E-mail</h4><br>
        <input type="text" name="email" class="new_passwordInput" value="<?php echo $email; ?>">
        <span class="error">
            <?php echo $error_email; ?>
        </span>
        <br><br>

        <h4>New Password</h4><br>
        <input type="password" name="new_password" class="new_passwordInput" value="<?php echo $new_password; ?>">
        <span class="error">
            <?php echo $error_new_password; ?>
        </span>
        <br><br>

        <h4>Re-type Password</h4><br>
        <input type="password" name="repeat_password" class="new_passwordInput" value="<?php echo $repeat_password; ?>">
        <span class="error">
            <?php echo $error_repeat_password; ?>
        </span>
        <span class="success">
            <?php echo $success_password; ?>
        </span>
        <br><br>

        <form method="post">
        <form action="menu.php" method="post">
         <input type="submit" name="submit" value="Submit" class="submit" >
        </form>

        <form action="SignIn.php" method="post">
         <button type="submit" name="goBack" class="goBackButton">Go Back</button>
        </form>
    
        </form>
        
    </div>
    </form>

    
    
    
</body>


</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "Restaurant";
$connect = mysqli_connect($server, $username, $password, $databaseName);

if (!$connect) {
    die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());

}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["new_password"];

    $query = "UPDATE tblCustomers SET password = '$password' WHERE email = '$email';";

    $results = mysqli_query($connect, $query);

}

?>