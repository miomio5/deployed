<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Shop page</title>
</head>

<body>
   
 
    <header>

        <nav class="navbar">
        <h1 id="shop">SHOP</h1>
            <ul>
                <li><a class="first" href="#">Laptop</a></li>
                <li><a href="#">Mouse</a></li>
                <li><a href="#">Monitor</a></li>
                <li><a href="#">Keyboard</a></li>
                <li><a href="#">Audio</a></li>
                <li><a href="#">Console</a></li>
                <li><a href="cartpage.php" style="background-color:green;border-radius:10px" >&nbsp&nbsp&nbspCART&nbsp&nbsp&nbsp</a></li>
            </ul>
        </nav>
    </header>
    <!---------------------------------------- code for items in 1st row------------------------------------------------------->
    <div class="item left" >
        <a href="">
            <img class="image"
                src="https://assets3.razerzone.com/VNpuv0bd3nJlFdoiDtaz9HrnRgU=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh8e%2Fh96%2F9233352982558%2FRazer-Book-Evo-500x500.png"
                alt="laptop image "></a><br>
        <h3 id="pro1">Erazer Book - Full HD Touch 60Hz - Intel® Iris® Xe Graphics - Mercury </h3>
        <ul type="disc ">
            <li>Intel Core i7-1165G7</li>
            <li>Windows 11 Home</li>
            <li>13.4" 60Hz Full HD Touch</li>
            <li>Intel® Iris® Xe Graphics</li>
            <li>16GB RAM, 512GB SSD</li><br>
            <a class="view" href="">view details ></a>
            <h2>US$1,499.99</h2>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button1"
                class="button" value="Add to Cart" />
            </form>

        </ul>
    </div>
    
    <div class="item center ">
        <a href="">
            <img class="image"
                src="https://assets3.razerzone.com/VNpuv0bd3nJlFdoiDtaz9HrnRgU=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh8e%2Fh96%2F9233352982558%2FRazer-Book-Evo-500x500.png"
                alt="monitor image "></a><br>
        <h3>Erazer Raptor 27-165 Hz </h3>
        <ul type="disc ">
            <li>Upgraded 165 Hz Refresh Rate</li>
            <li>NVIDIA® G-Sync & AMD <br> FreeSync™ Premium Compatible</li>
            <li>World’s First THX® Certified<br> Gaming Monitor</li><br><br>
            <a class="view" href="">view details ></a><br><br>
            <h2>US$799.99</h2><br>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button2"
                class="button" value="Add to Cart" />
            </form>
            
        </ul>
    </div>
    <div class="item  right ">
        <a href="">
            <img id="image"
                src="https://assets3.razerzone.com/VNpuv0bd3nJlFdoiDtaz9HrnRgU=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh8e%2Fh96%2F9233352982558%2FRazer-Book-Evo-500x500.png"
                alt="laptop image "></a><br>
        <h3>Erazer Blade 14 - QHD 165Hz <br>-GeForce RTX 3080 - Black </h3>
        <ul type="disc ">
            <li>AMD Ryzen™ 9 5900HX</li>
            <li>14" 165Hz QHD</li>
            <li>GeForce RTX 3080</li>
            <li>16GB RAM, 1TB SSD</li><br><br>
            <a class="view" href="">view details ></a><br><br>
            <h2>US$799.99</h2><br>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button3"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>

    
    <div class="item left">
        <a href="">
            <img class="image"
                src="https://assets2.razerzone.com/images/pnx.assets/9a7394bfe48c6a541bd4770e651700e3/razer-blackwidow-family-v3.jpg"
                alt="keyboard image "></a><br>
        <h3>Erazer Blackwidow V3 Pro </h3>
        <ul type="disc ">
            <li>Full-size form factor</li>
            <li>Erazer HyperSpeed<br>Wireless Technology</li>
            <li>Plush leatherette wrist rest</li>
            <li>Ultimate Connectivity</li>
            <li>Wireless Full-height Mechanical Gaming Keyboard with Erazer Chroma RGB</li><br>
            <a class="view" href="">view details ></a>
            <h2>US$229.99</h2>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button4"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>

    <div class="item center ">
        <a href="">
            <img class="image"
                src="https://assets2.razerzone.com/images/pnx.assets/b53376ddb977652f09f34e1a1b2534a2/razer-huntsman-v2-analog-usp02.jpg"
                alt="keyboard image "></a><br>
        <h3>Erazer Huntsman V2 Analog - US </h3>
        <ul type="disc ">
            <li>Erazer™ Analog Optical Switches</li>
            <li>Doubleshot PBT keycaps</li>
            <li>Underlow lighting </li>
            <li>Powered by Erazer Chroma™ RGB</li><br><br>
            <a class="view" href="">view details ></a><br><br>
            <h2>US$799.99</h2><br>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button5"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>
    <div class="item  right ">
        <a href="">
            <img class="image"
                src="https://assets2.razerzone.com/images/pnx.assets/2e630e38ecc5f14e13c969db57681a29/razer-kraken-v3-x.png"
                alt="headset image "></a><br>
        <h3>Erazer Barracuda X </h3>
        <ul type="disc ">
            <li>Wired USB Gaming Headset</li>
            <li>Erazer™ TriForce 40mm Drivers</li>
            <li>Erazer™ HyperClear Cardioid Mic</li>
            <li>Hybrid fabric and memory foam ear cushions</li>
            <br><br>
            <a class="view" href="">view details ></a><br><br>
            <h2>US$69.99</h2><br>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button6"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>
    
    <div class="item left">
        <a href="">
            <img class="image " 
                src="https://assets2.razerzone.com/images/pnx.assets/2e630e38ecc5f14e13c969db57681a29/razer-kraken-v3-x.png"
                alt="headset image"></a><br>
        <h3>Erazer Blackshark v2 </h3>
        <ul type="disc ">
            <li>Erazer™ TriForce Titanium 50mm Drivers</li>
            <li>Removable Erazer™ HyperClear Cardioid Mic with USB Sound Card</li>
            <li>Ultra-soft FlowKnit memory foam ear cushions</li>
            <li>Erazer™ SpeedFlex Cable</li>
            <li>Connectivity – 3.5mm jack + USB sound card</li><br>
            <a class="view" href="">view details ></a>
            <h2>US$99.99</h2>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button7"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>
    <div class="item center ">
        <a href="">
            <img id = "deathadder"
                src="https://assets2.razerzone.com/images/pnx.assets/737be4c7bb67af53ff6a5a8f1dae8a86/deathadder-v2-mini-comparison.png"
                alt="mouse image"></a><br>
        <h3>Erazer Huntsman V2 Analog - US </h3>
        <ul type="disc ">
            <li>61g Ultra-lightweight Design</li>
            <li>Erazer™ Speedflex Cable</li>
            <li>2nd Gen Erazer™ Optical Mouse Switches </li>
            <li>6 programmable buttons</li><br>
            <li>Connectivity – 3.5mm jack + USB sound card</li><br>
            <a class="view" href="">view details ></a>
            <h2>US$37.49</h2>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button8"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>
    <div class="item  right ">
        <a href="">
            <img id="deathadder"
                src="https://assets2.razerzone.com/images/pnx.assets/737be4c7bb67af53ff6a5a8f1dae8a86/deathadder-v2-pro-comparison.png"
                alt="headset image"></a><br>
        <h3>Erazer Deathadder V2 Pro </h3>
        <ul type="disc ">
            <li>88g Midweight Design</li>
            <li>Erazer HyperSpeed Wireless / Erazer™ Speedflex Cable / Bluetooth</li>
            <li>2nd Gen Erazer™ Optical Mouse Switches</li>
            <li>Erazer Focus+ 20K DPI Optical Sensor</li>
            <li>Connectivity – 3.5mm jack + USB sound card</li>
            <br><br>
            <a class="view" href="">View details ></a>
            <h2>US$129.99</h2>
            <form action="shop_page.php" method="post" >
            <input type="submit" name="button9"
                class="button" value="Add to Cart" />
            </form>
            <!-- <button type="button">ADD TO CART </button> -->


        </ul>
    </div>


<script src="addtocart.js"></script>
</body>
</html>

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

    
    if(isset($_POST['button1'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('1');";
            mysqli_query($conn,$sql);
            }    

    if(isset($_POST['button2'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('2');";
            mysqli_query($conn,$sql);
            } 
        
    if(isset($_POST['button3'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('3');";
            mysqli_query($conn,$sql);
            } 
    if(isset($_POST['button4'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('4');";
            mysqli_query($conn,$sql);
            } 
            
    if(isset($_POST['button5'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('5');";
            mysqli_query($conn,$sql);
            } 
    if(isset($_POST['button6'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('6');";
            mysqli_query($conn,$sql);
            } 
    if(isset($_POST['button7'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('7');";
            mysqli_query($conn,$sql);
            } 
    if(isset($_POST['button8'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('8');";
            mysqli_query($conn,$sql);
            } 
    if(isset($_POST['button9'])){
        // Run the query
            $sql = "INSERT INTO `serial` (`sno`) VALUES ('9');";
            mysqli_query($conn,$sql);
            } 

    $conn->close();
    ?>