<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body align="center">
    <br><br>
    <?php
    $message = "Your Order is processed! Your order number is: ";
    if (isset($_POST['CheckOut'])) {
        echo "<br>Hello, $message";
    } else
        echo "";
    ?>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "Restaurant";
    $connect = mysqli_connect($server, $username, $password, $databaseName);

    if (!$connect) {
        die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());
    }

   
    $query = "UPDATE tblOrders SET Paid = '1'";
    $result = mysqli_query($connect, $query);

    $query = "SELECT orderNumber FROM tblOrders WHERE Paid = '1' ORDER BY orderNumber DESC LIMIT 1";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["orderNumber"] . "</td>";
            echo" <td>" . "\t";

        }
    } else {
        echo "There is nothing in the cart yet";
    }

    mysqli_close($connect);
    ?>
    
    <form action="menu.php" method='POST'>
        <br><br>
        <button type="submit" name="back_to_menu" class="submitButton" >Back To Menu
        </button><br><br>
    </form>
    

    <img src="images/place order.jpg" height="300">
</body>

</html>