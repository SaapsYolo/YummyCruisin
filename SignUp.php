<!DOCTYPE html>
<html lang="eng">

<head>
    <title>SignUp Page</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
        $name = $error_name = "";
        $last_name = $error_last_name = "";
        $email = $error_email = "";
        $password = $error_password = "";
        $repeat_password = $error_repeat_password = "";
        $success = $success_password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $error_name = "<br>Name is Required";
            } else {
                $name = test_input($_POST["name"]);
                // Check if name only contains letters
                if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
                    $error_name = "<br>Only letters are allowed";
                }
            }
            if (empty($_POST["last_name"])) {
                $error_last_name = "<br>Lastname is Required";
            } else {
                $last_name = test_input($_POST["last_name"]);
                // Check if last name only contains letters
                if (!preg_match("/^[a-zA-Z\s]*$/", $last_name)) {
                    $error_last_name = "<br>Only letters are allowed";
                }
            }
            if (empty($_POST["email"])) {
                $error_email = "<br>Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is in correct fprmat
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_email = "<br>Invalid email";
                }
            }
            if (empty($_POST["password"])) {
                $error_password = "<br>Password is Required";
            } else {
                $password = test_input($_POST["password"]);
                // Check if password contains valid input
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/", $password)) {
                    $error_password = "<br>Password must contain at least one lowercase letter, one uppercase letter, one digit, and be at least 6 characters long.";
                }
            }
            if (empty($_POST["repeat_password"])) {
                $error_repeat_password = "<br>Re-type your password here";
            } else {
                $repeat_password = test_input($_POST["repeat_password"]);
                // Check if repeated password is the same as the password
                if ($repeat_password != $password) {
                    $error_repeat_password = "<br>Password not the same.";
                }
                else $success_password ="<br><br>Your new account has been successfully created. <br>Click \"Go Back\", to go back to the SignIn page and Sign In with your credintials";
            }


        }
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>
       
    <header>
        <h2>SignUp to continue</h2>
    </header>

    <div class="loginMain">
        <div class="loginImage">
            <img src="images/login.jpg" alt="Login Image" class="loginImage" />
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " action="menu.php">

            <label for="name" class="details">Name</label><br>
            <input type="text" name="name" value="" class="detailsText">
            <span class="error">
                <?php echo $error_name; ?>
            </span>
            <br><br>

            <label for="last_name" class="details">Lastname</label><br>
            <input type="text" name="last_name" value="" class="detailsText">
            <span class="error">
                <?php echo $error_last_name; ?> 
            </span>
            <br><br>

            <label for="email" class="details">E-mail</label><br>
            <input type="email" name="email" value="" class="detailsText">
            <span class="error">
                <?php echo $error_email; ?>
            </span>
            <br><br>

            <label for="password" class="details">Password</label><br>
            <input type="password" name="password" value="" class="detailsText">
            <span class="error">
                <?php echo $error_password; ?>
            </span>
            <br><br>

            <label for="repeat_password" class="details">Repeat Password</label><br>
            <input type="password" name="repeat_password" value="" class="detailsText">
            <span class="error">
                <?php echo $error_repeat_password; ?>
            </span>
            <span class="success">
                <?php echo $success_password; ?>
            </span>
            <br><br>

            <button type="submit" name="SignUp" value="Submit" class="signUpButton" action="menu.php"
                >Submit
            </button>

            <form action="SignIn.php" method="post">

                <button type="submit" name="goBack" class="goBackButton" formaction="SignIn.php">Go Back</button>
                
            </form>

        </form>
    </div>
    <span class="error"></span>
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

if (isset($_POST["SignUp"])) {
    $name = $_POST["name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $query = "INSERT INTO tblCustomers(name, surname, email, password) VALUES('$name','$lastName','$email','$password');";

    $results = mysqli_query($connect, $query);

}

?>