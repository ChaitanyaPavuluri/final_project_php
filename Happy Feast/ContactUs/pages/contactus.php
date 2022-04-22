<!DOCTYPE html>
<html lang="en">
<head>
<title>HappyFeast | Contact Us</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../styles/ContactUs.css" />
    <link rel="stylesheet" href="../styles/helper.css" />
    <link rel="stylesheet" href="../styles/slicknav.css" />
    <link rel="fav icon" href="../images/general/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="This page provides a form and information for persons to contact the restaurant"
    />
</head>
<body>
<header class="header_wrapper">
      <img
        alt="happyfeastLogo"
        class="feast_logo"
        src="../images/general/happyfeastlogod.webp"
      />
      <h1 class="ofo_txt">Contact Us</h1>
    </header>
    <div id="side">
      <aside>
        <ul>
          <li><a href="../../HomePage/HomePage.html">Home</a></li>
          <li>
            <a href="../../foodOrder/pages/mealOrder.html">Order Food</a>
          </li>
          <li>
            <a href="../../foodOrder/pages/orderTracking.html">Track order</a>
          </li>
          <li><a href="../../AboutUs/pages/AboutUs.html">AboutUs</a></li>
          <li><a href="../../CareerPage/CareerPage.html">Career</a></li>
          <li><a href="../../Logout/Logout.html">Logout</a></li>
        </ul>
      </aside>
    </div>
    <main>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "phpproject2022";
            $firstName=$_POST['FName'];
            $lastName=$_POST['LName'];
            $phNumber=$_POST['number'];
            $email=$_POST['Emailadd'];
            $comments=$_POST['comment'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO contactform (fname,lname,phnumber,email,comments)
            VALUES ('$firstName', '$lastName', $phNumber,'$email','$comments')";
            if (mysqli_query($conn, $sql)) {
            echo "<h2>Your contact form has been submitted successfully. We will get back to you </br> Thank you!";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        
        ?>
    </main>
    <footer>
      <span class="copyright_text">Copyright &copy; 2021 HappyFeast</span>
      <div class="social_site_icons">
        <img alt="facebook" src="../images/general/facebook.png" />
        <img alt="google" src="../images/general/google.png" />
        <img alt="twitter" src="../images/general/twitter.png" />
      </div>
    </footer>
    
</body>
</html>
