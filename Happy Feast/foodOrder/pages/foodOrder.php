<!DOCTYPE html>
<html lang="en">
<head>
    <title>HappyFeast</title>
    <link rel="stylesheet" href="../styles/mealOrder.css"/>
    <link rel="fav icon" href="../images/general/favicon.png">
    <link rel="stylesheet" href="../styles/helper.css">
    <meta charset="UTF-8">
    <meta name="description" content="Meal ordering page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="header_wrapper">
            <h1 class="ofo_txt">Order Food Online</h1>
            <div class="header_img_holder">
            <img alt="happyfeastLogo" class="feast_logo" src="../images/general/happyfeastlogod.webp">
            </div>
        </header>
        <aside class="navigations">
            <ul id="redirectionLinks">
                <li><a href="../../HomePage/HomePage.html" >Home</a></li>
                <li><a href="../../foodOrder/pages/orderTracking.html" >Track order</a></li>
                <li><a href="../../AboutUs/pages/AboutUs.html" >About us</a></li>
                <li><a href="../../ContactUs/pages/ContactUs.html" >Contact us</a></li>
                <li><a href="../../CareerPage/CareerPage.html" >Careers</a></li>   
                <li><a href="../../Logout/Logout.html">Logout</a></li>             
            </ul>
        </aside>
        <main class="main_wrapper">
            <?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $dbname = "phpproject2022";
                 date_default_timezone_set('America/Toronto');
                 $date = date('d-m-y h:i:s');
                  // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);            
            }
            if (isset($_POST['biryani'])) {
                //place the order
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Biryani',17,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";//to get latest order ID
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['burger'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Burger',15,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];                                  
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['dosa'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Dosa',15,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                   
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['pasta'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Pasta',20,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['pizza'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Pizza',18,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['salad'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Salad',17,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                   
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['sandwich'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Sandwich',12,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";              
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              if (isset($_POST['spaghetti'])) {
                $sql = "INSERT INTO orders (orderId,itemName,itemPrice,orderedTime,orderStatus) VALUES ('','Spaghetti',22,'$date','preparing')";                  
                if ($conn->query($sql) === TRUE) {
                    $sqlQuery="SELECT * FROM orders where orderId=(SELECT MAX(orderId) FROM orders)";
                    $result = $conn->query($sqlQuery); 
                    $row = $result->fetch_assoc();
                    $latestId=$row["orderId"];
                    echo "<h2 class='order-confirmation'>Order Placed successfully</br>
                    Your order Id is $latestId</br> you can track your order from Track order option</h2>";                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
              }
              
            ?>
        </main>
        <footer>
            <span class="copyright_text">Copyright &copy; 2022 HappyFeast</span>
            <div class="social_site_icons">
                <img alt="facebook" src="../images/general/facebook.png">
                <img alt="google" src="../images/general/google.png">
                <img alt="twitter" src="../images/general/twitter.png">
            </div>
        </footer>
</body>
</html>