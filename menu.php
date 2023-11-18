<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="mealBody">
       
            <div class="nav">
                <div class="mealNav">
                    <b> Menu </b>

                    <div class="secondNavMenu">
                        <div class="viewCart">
                            <a href="viewCart.php">
                                View Cart
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
    
                        <div class="logout">
                            <a href="SignIn.php">Sign-Out 
                                <i class="fa fa-sign-out" aria-hidden="false"></i></a>
                            
                        </div>
    
                    </div>
                    
                </div>

            </div>
            <form action="" method="post">
            <h4></h4>

            <div class="mealType" align="center">
                <h2>Breakfast </h2>

            </div>
            <br>
            <!-- Breakfast menu-->
            <div class="leftAlign">

                <!-- Waffles menu-->
                <div class="mealDesc">
                    <a href="images/waffles2.jpg">
                        <img src="images/waffles2.jpg" height="140" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Waffles">
                                <h3>Classic Waffles</h3><br>
                                <h4>Light and fluffy, with a golden crispiness on the outside.Served with a drizzle of
                                    rich
                                    maple syrup.</h4><br>
                                <div class="mealPrice">R69.99</div><br>
                                <button type="submit" name="Waffles" class="addCart">Add to cart</button>
                        </font>
                    </div>
                    </a>


                </div>


                <br><br>
                <!-- Bacon & eggs menu-->
                <div class="mealDesc">
                    <a href="images/bacon and eggs.jpg">
                        <img src="images/bacon and eggs.jpg" height="150" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Bacon&Eggs">
                                <h3>Classic Breakfast</h3><br>
                                <h4>Two eggs (any style), Bacon or sausage, Toast and a hot beverage of your own
                                    choosing.
                                </h4><br>
                                <div class="mealPrice">R89.99</div><br>
                                <button type="submit" name="Bacon&Eggs" class="addCart">Add to cart</button>
                        </font>

                    </div>

                </div>


            </div>

            <br><br>
            <h2>Lunch/Dinner </h2>
            <br>
            <div class="leftAlign">

                <!-- Ribbs menu-->
                <div class="mealDesc">
                    <a href="images/ribbs.jpeg">
                        <img src="images/ribbs.jpeg" height="150" borderradius class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Ribbs">
                                <h3>Succulent BBQ Ribs</h3><br>
                                <h4>Tender, slow-cooked to perfection and basted with our signature smoky BBQ
                                    sauce.Served
                                    with your choice of delectable side dishes.</h4><br>
                                <div class="mealPrice">R169.99</div><br>
                                <button type="submit" name="Ribbs" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a><br><br>

                </div>

                <!-- Pasta menu-->
                <br><br>
                <div class="mealDesc">
                    <a href="images/pasta.jpeg">
                        <img src="images/pasta.jpeg" height="130" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Pasta">
                                <h3>Spicy Spaghetti Primavera</h3><br>
                                <h4>Savory pancetta and freshly grated Pecorino Romano cheese harmonize with perfectly
                                    al
                                    dente spaghetti,
                                    and a sprinkle of fresh parsley.</h4><br>
                                <div class="mealPrice">R129.99</div><br>
                            </label>
                            <button type="submit" name="Pasta" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div>

            </div>

            <br><br><br>
            <h2>Drinks </h2>
            </font><br>

            <div class="leftAlign">
                <!-- Coffee menu -->
                <div class="mealDesc">
                    <a href="images/coffee.jpg">
                        <img src="images/coffee.jpg" height="230" width="" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Coffee">
                                <h3>Classic Coffee</h3><br>
                                <h4>Indulge in a rich and comforting embrace of our classic coffee. With its bold and
                                    full-bodied flavor of caramel sweetness. Savor the warmth in every sip with our
                                    timeless classic</h4><br>
                                <div class="mealPrice">R19.99</div><br>
                            </label>
                            <button type="submit" name="Coffee" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div>
                <br><br>

                <!-- Latte -->
                <div class="mealDesc">
                    <a href="images/latte.jpg">
                        <img src="images/latte.jpg" height="230" width="" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Latte">
                                <h3>Chai Latte</h3><br>
                                <h4>A comforting blend of spiced black tea and steamed milk, topped with a sprinkle of
                                    cinnamon for a warm experience.</h4><br>
                                <div class="mealPrice">R24.99</div><br>
                            </label>
                            <button type="submit" name="Coffee" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div>
                <br><br>

                <!-- espresso -->
                <div class="mealDesc">
                    <a href="images/esspresso.jpg">
                        <img src="images/esspresso.jpg" height="230" width="" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Espresso">
                                <h3>Espresso</h3><br>
                                <h4>A dark espresso with a bold and robust flavor, perfect for an energy boost.</h4><br>
                                <div class="mealPrice">R21.99</div><br>
                            </label>
                            <button type="submit" name="Coffee" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div>
                <br><br>
            </div>
            <br><br>
            <div class="leftAlign">
                <!-- Wine menu -->
                <div class="mealDesc">
                    <a href="images/wine.jpg">
                        <img src="images/wine.jpg" height="150" width="250" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="Wine">
                                <h3>Wine</h3><br>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ipsam.</h4><br>
                                <div class="mealPrice">R39.99</div><br>
                            </label>
                            <button type="submit" name="Wine" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div>

                <br><br>
                <!-- Orange juice menu -->
                <div class="mealDesc">
                    <a href="images/orange.jpg">
                        <img src="images/orange.jpg" height="220" width="" class="mealIMG">
                    </a>
                    <div class="leftAlign">
                        <font face="Brush Script">
                            <br>
                            <label for="meal_type" name="OrangeJuice">
                                <h3>Freshly Squeezed Orange Juice</h3><br>
                                <h4>A rejuvenating blend of orange, our orange juice is made from ripe, hand-picked
                                    oranges
                                    for a naturally sweet flavor.Served ice-cold.</h4><br>

                                <div class="mealPrice">R19.99</div><br>
                            </label>
                            <button type="submit" name="OrangeJuice" class="addCart">Add to cart</button>
                        </font>

                    </div>
                    </a>
                </div><br>


            </div>

            <br><br><br>
        </form>
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
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "Restaurant";
$connect = mysqli_connect($server, $username, $password, $databaseName);

if (!$connect) {
    die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());

}

if (isset($_POST["Waffles"])) {
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Classic Waffles','69.99', false);";
    $results = mysqli_query($connect, $query);

}else if(isset($_POST["Bacon&Eggs"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Classic Breakfast','89.99', false);";
    $results = mysqli_query($connect, $query);

}else if(isset($_POST["Ribbs"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Succulent BBQ Ribs','169.99', false);";
    $results = mysqli_query($connect, $query);
 
}else if (isset($_POST["Pasta"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Spicy Spaghetti Primavera','129.99', false);";
    $results = mysqli_query($connect, $query);

}else if(isset($_POST["Coffee"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Classic Coffee','19.99', false);";
    $results = mysqli_query($connect, $query);
 
}else if(isset($_POST["Latte"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Chai Latte','24.99', false);";
    $results = mysqli_query($connect, $query);
 
}else if(isset($_POST["Espresso"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Espresso','21.99', false);";
    $results = mysqli_query($connect, $query);
 
}else if(isset($_POST["Wine"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Wine','39.99', false);";
    $results = mysqli_query($connect, $query);
 
}else if(isset($_POST["OrangeJuice"])){
    $query = "INSERT INTO tblOrders(Meal_Name, Price, Paid) VALUES('Freshly Squeezed Orange Juice','19.99', false);";
    $results = mysqli_query($connect, $query);
 
}

?>