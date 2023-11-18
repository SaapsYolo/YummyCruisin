<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomePage</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="homeBody">
        <div class="nav">
            <a href="#" class="home">Home</a>
            <a href="menu.php" class="menu">Menu</a>
            <a href="aboutUs.html" class="aboutUs">About Us</a>
            <a href="SignIn.php" class="signIn">Sign In</a>
        </div>
        <div class="welcomeContainer">
            <div class="WelcomeMessage">
                <h1> Welcome to YummyCuisine<h1>
                        <h2>
                            <p> the home of the best meals, prepared by top ranked chefs </p>
                            <h2>
            </div>
        </div>

        <div class="containerImage" >
            <div class="welcomeImage" >
                <img src="images/elegant.jpg" alt="Yummy Cuisine Logo" height="600">
            </div>
        </div>

    </div>
    <div class="footer" align="center"><br><br>

        <div class="socialsFooter">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>



        </div>
        <h3>@YummyCuisine all social media platforms </h3><br>


        <p>&copy; 2023 YummyCuisine. All rights reserved</p>

    </div>

</body>

</html>

<?php

echo '<link  href="styles.css" media="">';
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "Restaurant";
$connect = mysqli_connect($server, $username, $password, $databaseName);

if (!$connect) {
    die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());

}

if (isset($_POST["Waffles"])) {
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Waffles','69.99', false);";
    $results = mysqli_query($connect, $query);

} else if (isset($_POST["Bacon&Eggs"])) {
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Bacon&Eggs','89.99', false);";
    $results = mysqli_query($connect, $query);

} else if (isset($_POST["Ribbs"])) {
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Ribbs','169.99', false);";
    $results = mysqli_query($connect, $query);

} else if (isset($_POST["Pasta"])) {
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Pasta','129.99', false);";
    $results = mysqli_query($connect, $query);

}

?>