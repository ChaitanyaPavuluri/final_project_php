<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HappyFeast</title>
    <link rel="stylesheet" href="../styles/mealOrder.css" />
    <link rel="stylesheet" href="../styles/orderTracking.css" />
    <link rel="stylesheet" href="../styles/helper.css" />
    <link rel="fav icon" href="../images/general/favicon.png" />
    <meta charset="UTF-8" />
    <meta name="description" content="Meal ordering page" />
    <meta name="keywords" content="Meal, Restaurants and searchBox" />
  </head>
  <body>
    <header class="header_wrapper">
      <h1 class="ofo_txt">Track your order</h1>
      <div class="header_img_holder">
        <img
          alt="happyfeastLogo"
          class="feast_logo"
          src="../images/general/happyfeastlogod.webp"
        />
      </div>
    </header>
    <aside class="navigations">
      <ul id="redirectionLinks">
        <li><a href="../../HomePage/HomePage.html">Home</a></li>
        <li><a href="../../foodOrder/pages/mealOrder.html">Order Food</a></li>
        <li><a href="../../AboutUs/pages/AboutUs.html">About us</a></li>
        <li><a href="../../ContactUs/pages/ContactUs.html">Contact us</a></li>
        <li><a href="../../CareerPage/CareerPage.html">Careers</a></li>
        <li><a href="../../Logout/Logout.html">Logout</a></li>
      </ul>
    </aside>
    <main class="main_wrapper">
     <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "phpproject2022";
      $conn = new mysqli($servername, $username, $password, $dbname);

      $orderId=$_POST["orderId"];
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);            
      }
      $sql = "SELECT * FROM orders WHERE orderId=$orderId";//get details of the order
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $itemName=$row["itemName"];
        $itemPrice=$row["itemPrice"];
        $status=$row["orderStatus"];        
      } else {
        echo "No items with the given order id";
      }
      $conn->close();
     
     ?>
     <form action="cancelOrder.php" method="post">
      <div class="order_tracking_details">          
          <div class="track_image"><img class="cook-img" src="../../happyfeastpics/cook2.gif" alt="frying image"></div>
          <div class="track_details">
          <div>Order Id: <?php echo $orderId ?></div>
          <div>Food Ordered: <?php echo $itemName ?></div>
          <div>Price: $<?php echo $itemPrice ?></div>
          <div>Order Status: <?php echo $status ?> </div>
          <input type="submit" class="cancel_button" value="Cancel Order">
          <input type="text" name="orderIdCancel" value="<?php echo $orderId ?>" style="display:none;">
          </div>
      </div>
      </form>
    </main>
    <footer>
      <span class="copyright_text">Copyright &copy; 2022 HappyFeast</span>
      <div class="social_site_icons">
        <img alt="facebook" src="../images/general/facebook.png" />
        <img alt="google" src="../images/general/google.png" />
        <img alt="twitter" src="../images/general/twitter.png" />
      </div>
    </footer>
  </body>
</html>