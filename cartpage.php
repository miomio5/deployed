
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="cartst.css">

    <title>Document</title>
</head>


<!-- <body>

    <div class="outer">
    <div class="inner">
        <img src="https://assets3.razerzone.com/dOuJTcXngIF5J8TkGz_gOl2VFik=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhed%2Fhf3%2F8967572389918%2FRZ06-03090100-R3M1.png" id="img1">
    </div>
    <div class="inner">
        <h2>Erazer Junglecat-Option B</h2><br>
            
                <ul>
                    <li>Bluetooth Low Energy (BLE) connection, 100+ hour battery life</li>
                    <li>One sided controller play</li>
                    <li>For Razer Phone 2, Samsung Galaxy Note 9, and Samsung Galaxy S10+</li>
                </ul>
    </div>
    <div class="innerrt" style="position:absolute;right: 260px;font-size:20px;"><br>

         Quantity
            <select name="quantity" >
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            
           <br>
           <br>
           <br>
           <button style="margin-left: 70px;margin-top: -10px;">Remove</button>
    </div>
    <div class="innerrt">
       <p style="position:absolute;right: 70px;font-size:25px;"> $469.99 </p>
    </div>
</div>
<br>
<div class="outer">
    <div class="inner">
        <img src="https://assets3.razerzone.com/eeDO0OL9S11xaxWmE-bIouNwrgg=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh8f%2Fhfa%2F8965970952222%2FRC21-01430100-R3U1.png" id="img1">
    </div>
    <div class="inner">
        <h2>Erazer Core X Chroma Pro</h2><br>
            
                <ul>
                    <li>Bluetooth Low Energy (BLE) connection, 100+ hour battery life</li>
                    <li>One sided controller play</li>
                    <li>For Razer Phone 2, Samsung Galaxy Note 9, and Samsung Galaxy S10+</li>
                </ul>
    </div>
    <div class="innerrt" style="position:absolute;right: 260px;font-size:20px;"><br>

        Quantity
           <select name="quantity" >
               <option value="1" selected>1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
           </select>
           
          <br>
          <br>
          <br>
       <button style="margin-left: 70px;margin-top:-10px">Remove</button>
   </div>
    <div class="innerrt">
       <p style="position:absolute;right: 70px;font-size:30px;"> $1069.99 </p>
    </div>
</div>
   
-->
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

    $sql = "SELECT * FROM `product`,`serial` WHERE product.sno=serial.sno;";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    $total= 0;
    while($row = mysqli_fetch_assoc($result)){ 
        $total+=$row['price'];
    }
    mysqli_data_seek($result,0);

    if(isset($_POST['adbutton'])){
        $total+=39.99;
    }

    // $qty=$_POST['qty'];

    echo " <nav class='navigate'>
      <ul>
          <li id ='secured'> CART</li>
          <img src='logo.png' style='width:80px;height:80px;float:left; margin:0px 180px'>
          
      </ul> 
  </nav>
      <div class='topbar'>
      <div class='post'>
         <h1> US$".$total."</h1>
         <br><a href='checkout.php'><button >CHECKOUT</button></a>
      </div>
      <h1>&nbsp Cart(".$num." Items)</h1>
  </div>";
    
  
    while($row = mysqli_fetch_assoc($result)){
        echo "
        <div class='outer'>
        <div class='inner'>
        ".$row['image']."
        </div>
        <div class='inner'>
            <h2>".$row['product name']."</h2><br>"
            .$row['product desc']."
        </div>
        <div class='innerrt' style='position:absolute;right: 260px;font-size:20px;'><br>
    
             Quantity: 1
                
               <br>
               <br>
               <br>
               <form action='remove.php' method='post' >
               <input type='submit' name='button".$row['sno']."' style='background-color:rgb(59, 228, 67);font-size:20px' class='button' value='Remove' />
               </form>
        </div>
        <div class='innerrt'>
           <p style='position:absolute;right: 70px;font-size:25px;'>". $row['price'] ."</p>
        </div>
    </div>";

  

    }
    echo"<form action='cartpage.php' method='post' >
    <span style='font-size:20px'>Add Razer Care plan worth US$39.99 &nbsp</span>
    <input type='submit' name='adbutton' style='background-color:Green;font-size:20px' value='Add' />
    <input type='submit' name='rebutton' style='background-color:Green;font-size:20px' value='Remove' />
    </form><br>";

    echo"
        <div class='container'>
            <h3> <u> Estimated Total</u></h3>
            <strong style='font-size: 25px;'>US$".$total."</strong>
            <br><br>
            Including All Taxes
            <br>";
    

    if(isset($_POST['adbutton'])){       
    echo "ERazer Plan Added";
    }
    if(isset($_POST['rebutton'])){       
        echo "ERazer Plan removed";
        }

        $sql = "DELETE FROM `totalprice`;";
        $result = mysqli_query($conn, $sql);

        $sql = "INSERT INTO `totalprice` (`Total`) VALUES ('$total');";
        $result = mysqli_query($conn, $sql);

    echo " <span>
                <a href='checkout.php' style='float: right; margin-top:-100px'><button>CHECKOUT</button></a>
            </span>
        </div>
         
    </div>"
    ?>
</body>
</html> 

