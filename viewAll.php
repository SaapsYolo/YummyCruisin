<!DOCTYPE html>
<html lang="en">
<head>
    <title>View All</title>
</head>
<body>
<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "Restaurant";
    $connect = mysqli_connect($server, $username, $password, $databaseName);


    if (!$connect) {
        die("ERROR! cannot connect to the database $databaseName with username $username " . mysqli_connect_errno());
    }

    $query = "SELECT * FROM tblOrders ";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo "Meal Name" . "\t Price<br>";

        while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr><td>" . $row["Meal_Name"] . "</td><td>" . "\t" ."R". $row["Price"] . "</td></tr><br>";
        }
    } else {
        echo "There is nothing in the cart yet";
    }

    
    $query2 = "SELECT * FROM tblCustomers ";
    $result2 = mysqli_query($connect, $query2);

    if (mysqli_num_rows($result2) > 0) {
        // Output data of each row
        echo "<br><br>Name" . "\t Surname". "\t email". "\t Password". "\t Customer number<br>";

        while ($row = mysqli_fetch_assoc($result2)) {
           echo "<tr><td>" . "\t".$row["Name"] . "</td><td>" . "\t" ."\t". $row["surname"] . "</td><td>" . "\t".$row["email"] . "</td><td>" ."\t". $row["password"] . "</td><td>" ."\t". $row["custID"] . "</td></tr><br>";
        }
    } else {
        echo "There is nothing in the the customer database yet";
    }


    mysqli_close($connect);
    ?>

    <form action="HomePage.php" method="post">
        <button type="submit" name="Go_Back">Go Back</button>
    </form>

</body>
</html>