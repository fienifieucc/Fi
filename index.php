<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="icon" href="https://i.imgur.com/OOlaZEL.jpg" type="image/x-icon">
<style>
* {
  box-sizing: border-box;
}
 input{
  width: 100%;
  margin-bottom: 16px;
  height: 42px;
 }
 
 #submit{
  background-color: rgb(0, 250, 180);
  border: none;
  color: white;
  border-radius: 6px;
 }
 
 
 #fa-cart{
  position: absolute;
  float: right;
  /* margin-right: 2%; */
  top: 20px;
  right: 13%;
  color: rgb(236, 15, 15);
}

#fa-btn{
  color: rgb(255, 0, 70);
  font-size: 19px;
  border: none;
  background-color: inherit;
  cursor: pointer;
}

sup{
  background-color: rgb(255, 0, 64);
  color: white;
  padding-left: 5px;
  padding-right: 5px;
  border-radius: 30px;
  margin-left: -6px;
}

#user{
  position: absolute;
  float: right;
  right: 4%;
  color: red;
  top: 25px;
}

#fa-home{
  width: 10%;
  background-color: white;
  border: none;
  float: left;
  font-size: 18px;
  margin-top: px;
  margin-left: 20px;
  /* margin-right: 15%; */
  color: red;
  font-family: calibri;
}

#home{
  float: left;
  
  font-size: 15px;
  margin-top: 0px;
  margin-left: 8px;
  color: red;
  font-family: calibri;
}


#fa-user{
  width: 10%;
  background-color: white;
  border: none;
  font-size: 18px;
  float: right;
  margin-left: 9%;
  /* margin-right: 20px; */
  /* margin-top: px; */
  /* float: right; */
}

#fa-chat{
  width: 20%;
  background-color: white;
  border: none;
  font-size: 18px;
  float: right;
  margin-left: 9%;
  margin-right: 20px;
  /* margin-top: px; */
  /* float: right; */
}
 
 #Bottom_Nav{
  text-align: center;
  padding-top: 5px;
  position: fixed;
  bottom: 0px;
  width: 100%;
  height: auto;
  padding-bottom: 10px;
  color: #9e9595;
  background-color: rgb(255, 255, 255);
  border-top: 1px solid rgb(185, 181, 181);
  /* box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206) */
}


#fa-cart-plus{
  width: 20%;
  background-color: white;
  border: none;
  font-size: 18px;
  float: left;
  margin-top: 0px;
  margin-left: 9%;
}

#cart{
  /* float: left; */
  margin-top: 0px;
  margin-left: 12%;
  font-size: 15px;
  font-family: calibri;
}
 
 
 
body {
 padding: 0px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: red;
}
h2{
  text-align: center;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 45%;
  margin-right: 3%;
  margin-bottom: 80px;
  /* padding: 0 5px; */
}
.Name{
  margin-bottom: 10px;
}

.row {
  /* margin:0 -5px; */
  width: 90%;
  margin-left: 10%;
}

/* Clear floats after the columns */
.row:after {


  content: "";
  display: table;
  clear: both;
}

.PIC{
 font-size: 17px;
  width: 100%;
  height: auto;
  border: none;
}

.image{
  width: 100%;
  height: 100%;
}

.details{
  width: 100%;

}
 .container {
  padding: 20px;
  background-color: #f1f1f1;
}
 
.Add{
  width: 90%;
  margin-left: 0%;
  border-radius: 8px;
  height: 40px;
  background-color: rgb(150, 23, 20);
  text-align: center;
  margin-bottom: 10px;
  cursor: pointer;
  border: none;
  color: white;
  font-size: 18px;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    float: left;
    margin-left: 0%;
    width: 100%;
    display: block;
    margin-bottom: 40px;
  }
  .row{
    margin-left: 1%;
    width: 98%
  }
}

/* Style the counter cards */
.card {
  box-shadow: 1px 4px 8px 1px rgba(0, 0, 0, 0.2);
  /* padding: 16px; */
  text-align: center;
  background-color: white;
  color: black;
}

.fa {font-size:50px;}
</style>
</head>
<body>

<?php
  include('Homepage.html');
 ?>

<h2>MENU</h2>
<!-- <p>Resize the browser window to see the effect.</p> -->
<!-- <br> -->

<div class="row">
  <div class="column">
    <div class="card">
    

        <!-- If you would like to customize the button, remove or change the "class" attribute inside the <span> tag -->
<span class="glf-button" data-glf-cuid="f2841bbb-5a53-45d5-9545-77f3d3d7d356" data-glf-ruid="f7a93005-cd9c-4260-8554-5ec6eed72bb2" > See MENU & Order</span>
<script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async ></script>

      </div>
    </div>
  </div>



  <div class="column">
    <div class="card">
      <button class="PIC">
       <h3 style="font-size:28px;"> Delivery Time <h3> <br>
        <div style="font-size:22px;">
      <b> Afternoons:<b> 12:30-14:00 &
                   15:00-16:30 <br><br><br>
      <b> Evenings:<b> 18:00-19:30
       </div>
      </button>
     
       
    </div>
  </div>
</div>
        
        
        
       
        
         <div class="column">
    <div class="card">
      <button class="PIC">
      At Fie Ni Fie we offer of excellent quality and invite you to try our delicious food <p>
       The Key to our Success is Simple:providing quality consistent food that taste Good Every single time</p>
       <p>Our Food is very ,did i say very? very affordable since of the new way of serving our customers ie ,a small feee for two foods in one dish a day or just 
        one in respect to your ordering </p>
       <p>We Pride ourselves on serving our customers delicious food. </p>
      </button>
     
       
    </div>
  </div>
</div>   
        
     <div class="column">
    <div class="card">
      <button class="PIC">
       <h3>Follow Our Announcement page to know what new thing wee will bring </h3>
       <h4>Because there is going to be a variety of satisfying you here </h4>
      </button>
     
       
    </div>
  </div>
</div>     
   <br><br>     
<form action="index.php" method="post">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Receive Fie Ni Fie Personal Notifications by Signing here</p><br>
      <p>You don't know, you might be the lucky one</p>
    <p>we dey wedge you </p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="email" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input id="submit" type="submit" name="submit" value="Subscribe">
  </div>
</form>
 
 
 
 
 
     <div id="Bottom_Nav">
        <form action="Homepage.php" method="post">
            <button type="submit" id="fa-home"><i class='fa fa-home'></i><br>
                <div class="nav-name">Home</div>
            </button>
        </form>
        <form action="viewCart.php" method="post">
            <button id="fa-cart-plus" name="viewcart"><i class='fas fa-cart-plus'></i><sup>

                    <?php
                    $total = "SELECT count(Price) as price FROM carts WHERE (User_id = '{$index1}')";
                    $Totals = $conn->query($total);
                    if ($Totals->num_rows > 0) {
                        while ($Fetch = $Totals->fetch_assoc()) {
                            $TOTAL = $Fetch['price'];
                            echo ($TOTAL);
                        }
                    }

                    ?>

                </sup><br>
                <div class="nav-name">Carts</div>
            </button>
        </form>
        <form>
            <button id="fa-chat"><i class='fab fa-rocketchat'></i><br>
                <div class="nav-name">Live chat</div>
            </button>
        </form>

        <!-- <form>
            <button id="fa-user"><i class='fa fa-question'></i><br>
                <div class="nav-name">Help</div>
            </button>
        </form> -->


        <button id="fa-user" onclick="openAccount()"><i class='far fa-user'></i><br>
            <div class="nav-name">User</div>
        </button>


       


                <!-- <button style="float: right"><i class="fas fa-pen-alt"></i></button> -->
            </div>
            <form action="account.php" method="post">
                <button type="submit" class="btnlist">Account <i id="arrow" class="fas fa-angle-right "></i></button>
            </form>
            <form action="orderlist.php" method="post">
                <button type="submit" class="btnlist">My Orders <i id="arrow" class="fas fa-angle-right "></i></button>
            </form>

            <button class="btnlist">Saved items <i id="arrow" class="fas fa-angle-right "></i></button>
            <form action="HomeUnlogged.php" method="post">
                <button type="submit" class="btnlist">Log out <i id="arrow" class="fas fa-angle-right "></i></button>

            </form>

        </div>


    </div>
 <?php
   if (isset($_REQUEST['submit'])){
    $Name = $_REQUEST['name'];
    $Email = $_REQUEST['email'];
    echo($Name);
   }
   
   
   ?>
</body>
</html>
