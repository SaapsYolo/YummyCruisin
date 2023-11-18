<!DOCTYPE html>
<html lang="eng">

<head>
    <title>
        YummyCuisine
    </title>
    <link rel="stylesheet" href="styling.css">
</head>

<body align="center">

    <div class="logInPage">
        <div class="logInIcon">
            <img src="images/icons8-shop-64.png" ><br><!--icon image-->
        </div>

        
        <h4>
            Login
        </h4>
        
        <br><br>
    
        <label for="username" class="username">username</label><br>
        <input type="email" name="username" class="usernameInput" ><br>
    
        <label for="passwords" class="passwords">passwords</label><br>
        <input type="password" name="passwords" class="passwordsInput"><br><br>
    
        <form action="menu.php" method="post">
            <button type="submit" name="login" class="loginBtn">Login</button><br>
        </form>
    
        <form action="resetPassword.php" method="post">
            <button type="submit" name="forgot_passsword" class="forgot_passswordBtn">forgot password</button><br><br>
    
        </form>
    
        or
        <a href="SignUp.php">
            <font color="blue"><i>click here</i></font>
        </a>
        if you do not have an account yet<br><br>
    
        
    </div>
    
    
</body>

</html>

