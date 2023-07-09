
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="checkout.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="contactus.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navigate">
        <ul>
            <li id ="secured"> Secured Checkout </li>
            <img src="logo.png" style="width:80px;height:80px;float:left; margin:0px 180px">
            
        </ul> 
    </nav>

    <p id="checklist">
    Billing Address And Payment
    </p> 

<!--------------------------------------------Contact Details and Cart----------------------------------------------------->
<br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="address.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h2>Billing Address</h2>

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h2>Payment</h2>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container" style="background-color: white;width:160px;padding:5px;border-radius: 2px;">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname"  >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber"  >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>

        <script>function myFunction() {alert("You Order is Placed Successfully");}</script>
        <input type="submit" value="Place Order" class="btn">
      </form>
    </div>
  
  </div>
  <?php
 // Set connection variables
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "contact us";

 // Create a database connection
 $conn = mysqli_connect($server, $username, $password,$database);

 // Check for connection success
 if(!$conn){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
 // echo "Success connecting to the db";

 $sql = "SELECT * FROM `totalprice`";
 $result = mysqli_query($conn, $sql);

 $total = mysqli_fetch_assoc($result);

 $sql = "SELECT * FROM `product`,`serial` WHERE product.sno=serial.sno;";
 $result = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($result);

 mysqli_data_seek($result,0);

  echo"<div class='col-75'>
    <div class='container'>
      <h4>Cart <span class='price' style='color:rgb(255, 255, 255)'><i class='fa fa-shopping-cart'></i> <b>".$num."</b>
      </span></h4>";
      
  
      
      while($row = mysqli_fetch_assoc($result)){ 
      $name=$row['product name'];

      
      echo "<p>".$name."<span class='price'>$".$row['price']."</span></p>";
    }
      echo "<hr>
      <p>Total <span class='price' style='color:rgb(255, 255, 255)'><b>US$".$total['Total']."</b></span></p>
    </div>
  </div>";

?>
</div>
          
</body>
</html>