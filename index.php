<!DOCTYPE html>
<html>
<head>
 <title>Fie Ni Fie - Food delivery - Cape Coast - Order online</title>
<meta name="description" content="Order online for Delivery. Here at Fie Ni Fie - Cape Coast you'll experience delicious Fast Food cuisine. 
                                  Try our mouth-watering dishes, carefully prepared with fresh ingredients! At Fie Ni Fie, 
                                  our recipe for success is simple – Great food & care makes customers return every time.">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
 <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
 <link rel="icon" href="https://i.imgur.com/OOlaZEL.jpg" type="image/x-icon">
<style>
* {
  /* box-sizing: border-box; */
}
 #input{
  width: 100%;
  margin-bottom: 16px;
  height: 42px;
 }

 #submit{
   font-size: 16px;
   width: 100%;
   margin-bottom: 16px;
   height: 42px;
  background-color: rgb(0, 250, 180);
  border: none;
  color: white;
  border-radius: 6px;
  margin-top: 10px;
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
  text-align: center;
  width: 10%;
  background-color: white;
  border: none;
  float: left;
  font-size: 18px;
  margin-top: px;
  margin-left: 20px;
  /* margin-right: 15%; */
  /* color: red; */
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
   left: 0px;
  text-align: center;
  padding-top: 5px;
  position: fixed;
  bottom: 0px;
  width: 100%;
  height: 50px;
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
  background-color: orangered;
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
  width: auto;
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
       <h3 style="font-size:28px;font-family: 'Aclonica';"> Delivery Time <h3><img src="bicycle.jpg"  style="width:50%;" > <br>
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
      <button class="PIC"><div  style="font-family: 'Akaya Telivigala';">
      At Fie Ni Fie we offer  excellent quality food and invite you to try our delicious food <p>
       The Key to our Success is Simple:providing quality consistent food that taste Good Every single time</p>
       <p>Our Food is very ,did i say very? very affordable since of the new way of serving our customers ie ,a small fee for two foods in one dish a day or just
        one in respect to your ordering </p>
       <p style="font-size:25px;">Y3 pridei y3n ho in serving y3n customers Edziban d33d3w. </p>
       </button></div>


    </div>
  </div>
</div>

     <div class="column">
    <div class="card">
      <button class="PIC">
       <h3 Style="font-family: 'Carter One';font-size:24px;ont-weight:10px;color:#995243;">Followooo follow  Our Announcement page to know what new thing we will bring </h3>
       <h4 Style="font-family: 'Aclonica'">Because there is going to be a variety of satisfying you here </h4>
      </button>


    </div>
  </div>
</div>
   <br><br>
<form action="action_page.php">
  <div class="container">
   
</form>






            <!-- <form action="account.php" method="post">
                <button type="submit" class="btnlist">Account <i id="arrow" class="fas fa-angle-right "></i></button>
            </form> -->
            <!-- <form action="orderlist.php" method="post">
                <button type="submit" class="btnlist">My Orders <i id="arrow" class="fas fa-angle-right "></i></button>
            </form>

            <button class="btnlist">Saved items <i id="arrow" class="fas fa-angle-right "></i></button>
            <form action="HomeUnlogged.php" method="post">
                <button type="submit" class="btnlist">Log out <i id="arrow" class="fas fa-angle-right "></i></button> -->

            </form>

        </div>


    </div>


    <div id="Bottom_Nav">

       <form action="Announcement.html" method="post">
           <button type="submit" id="fa-cart-plus"><i style="font-size: 18px; margin-left: 10px;" class='fa fa-bullhorn'></i><br>
               <div style="font-size: 14px" class="nav-name">Info</div>
           </button>
     </form>
       <form action="Abot.html" method="post">
           <button type="submit" id="fa-cart-plus" name="viewcart"><i style="font-size: 18px; margin-left: 5px;" class="fa fa-sign-in" ></i><br>
            <div style="font-size: 14px" class="nav-name">About</div>
           </button>
       </form>
       <form  action="Foodmenu.html" method="post">
           <button id="fa-chat">&#9776;<br>
            <div style="font-size: 14px" class="nav-name">Menu</div>
        </button>
       </form>
<!--          <form   action="signup.html" method="post">  <a href ="Abot.html">
       <button id="fa-user" onclick="openAccount()"><i style="font-size: 22px; margin-left: 10px;" class="fas fa-address-card"></i><br>
        <div class="nav-name">About</div>
          </button></a></form> -->
           </div>

</body>
</html>
