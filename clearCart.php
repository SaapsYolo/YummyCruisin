<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clear cart</title>
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body align="center">

<br><br><br><br>
    Your Cart has been cleared. Nothing to show here.
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

        $query = "DELETE FROM tblOrders WHERE Paid = '0'";
        $result = mysqli_query($connect, $query);

        mysqli_close($connect);
        ?>


    <form action="menu.php" method='POST'>
        <br><br>
        <button type="submit" name="Clear_Cart" class="submitButton">Back To Menu
        </button>
    </form>

       

    </form>

</body>
</html>