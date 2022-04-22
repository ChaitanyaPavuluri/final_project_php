<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpproject2022";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$enteredUserName=$_POST['username'];
$enteredPassword=$_POST['password'];
$isValidCredentials=false;

if (isset($_POST['login'])){
    $sql = "SELECT * FROM usercredentials";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
      while($row = $result->fetch_assoc()) {
      
          if($row["userId"]==$enteredUserName){
            if(password_verify($enteredPassword,$row["password"])){//verifying hashed password
            $isValidCredentials=true;
            header("Location:../HomePage/HomePage.html");            
            exit;
            break;
            }
          }        
      }
    } 
    if($isValidCredentials==false){
      echo '<script>alert("Login Failed Please try again")</script>';
      header("Location:../../index.html");
            exit;
    }
  }
?>