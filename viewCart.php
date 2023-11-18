<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body align="center" >

    <br><br><br><br><br><br><br><br>
    This is CheckOut menu
    <br><br>

    <!-- Viewing items in the database-->
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "Restaurant";
    $connect = mysqli_connect($server, $username, $password, $databaseName);


    if (!$connect) {
        die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());
    }

    $query = "SELECT Meal_Name, Price FROM tblOrders WHERE Paid = '0'";
    $result = mysqli_query($connect, $query);

    $priceQuery = "SELECT SUM(Price) FROM tblOrders WHERE Paid = '0'";
    $priceResult = mysqli_query($connect, $priceQuery);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo "Meal Name" . "\t Price<br>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Meal_Name"] . "</td><td>" . "\t" ."R". $row["Price"] . "</td></tr><br>";
        }
    } else {
        // echo "There is nothing in the cart yet";

    }
    
    
    if (mysqli_num_rows($priceResult) > 0) {
        // Output data of each row
        
        while ($row = mysqli_fetch_assoc($priceResult)) {
            echo "\n"."\n Your total is: R". $row["SUM(Price)"];
        }
    } else {
        echo "There is nothing in the cart yet";
    }
    
    mysqli_close($connect);
    ?>


    <form action="clearCart.php" method='POST'>
        <br><br>
        <button type="submit" name="Clear_Cart" class="submitButton">Clear Cart
        </button><br><br
    </form>

    <form action="checkout.php" method="post">
        <button type="submit" name="CheckOut" class="submitButton" formaction="checkout.php">Check Out</button>
    </form>

    <br>
    <!-- <form action="viewAll.php" method="post">
        <button type="submit" name="View_All" class="submitButton"> View All</button>
    </form> -->

    <div class="bgCart">
        <img src="images/cart.jpg" height="500"> 
    </div>
</body>

</html>

