<DOCTYPE HTML>
    <?php include 'connection.php';
    error_reporting(0);
    ?> 

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link rel="stylesheet" href="accountnew.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
  <body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="Products.html"><img src="patronstore.png" width="125px" style="padding-top: 30px;padding-left:5px;"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="dummy.html">Home</a></li>
                    <li><a href="products2.html">Products</a></li>
                    <li><a href="blogs.html">Blogs</a></li>
                    
                    <li><a href="http://localhost/dbmsproject/dbmsaccount.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
   <!--account---->

   <h2 class="titlee">Patrons Account</h2>
   
      <div class="account-page" style="background-image:url('b89.jpg');background-size: 100%;">
     <!-- <div class="account-page" style="background:radial-gradient(orangered,white);background-size: 100%;">-->
          <div class="container">
                  <div class="row">
                      <div class="col-2">
                          
                      </div>
                      <div class="col-2">
                     <div class="form-container">
                         <div class=form-btn>
                           <span onclick="login()">Login</span>
                           <span onclick="register()">Register</span>
                           <hr id="Indicator">
                         </div>
                          
                          <form id="Loginform">
                            <input type="text" placeholder=Username >
                            <input type="password" placeholder="password">
                            <button type="submit" class="btn">Login</button>
                            <span onclick="login()">New here?</span>
                        </form>

                          <form id="Regform">
                            <input type="text" placeholder="First Name" name="fname">
                            <input type="text" placeholder="Last Name" name="lname">
                            <input type="email" placeholder=Email name="email">
                            <input type="password" placeholder=Password name="password">
                            <button type="submit" class="btn" onclick="conf()" name="register">Register</button>
                            <span onclick="register()"><p>already have an account?</p></span>
                          </form>
                      </div>
                      </div>
                 </div> 
          </div>
   
    </div>

      <!--------footer--------->
      <div class="footer" style="background-color:black;height: 300px;" > 
        <img src="patronstore.png" width="250px" style="padding-top: 40px;padding-left: 50px;">
        <ul style="color:white;margin-left:100px;padding-top: 50px;float: right;padding-right: 50px;font-size: 18px;list-style: none;">
           <li style="color:white;padding-bottom: 20px;">Connect with Us</li>
           <li>Facebook</li>
           <li>Instagram</li>
           <li>Pinterest</li>
           <li>Twitter</li>
           <li>Linkdin</li>
        </ul>

        <ul style="color:white;margin-left:100px;padding-top: 50px;float: right;padding-right: 50px;font-size: 18px;list-style: none;">
            <li style="color:white;padding-bottom: 20px">Get to Know Us</li>
            <li>About Us</li>
            <li>Careers</li>
            <li>Press Releases</li>
            <li>Patron Cares</li>
            <li>Gift a Smile</li>
         </ul>

         <ul style="color:white;margin-left:100px;padding-top: 50px;float: right;padding-right: 50px;font-size: 18px;list-style: none;">
            <li style="color:white;padding-bottom: 20px">Make Money with Us</li>
            <li>Sell on Patrons</li>
            <li>Advertise your Products</li>
            <li>Become an Affilliate</li>
            <li>Patrons Global Selling</li>
            <li>Membership</li>
         </ul>
         <ul style="color:white;margin-left:100px;padding-top: 50px;float: right;padding-right: 50px;font-size: 18px;list-style: none;">
            <li style="color:white;padding-bottom: 20px">Let Us Help You</li>
            <li>Your Account</li>
            <li>Returns Centre</li>
            <li>Patrons App Download</li>
            <li>Patrons Assistant</li>
            <li>Help</li>
         </ul>
      </div>

      <!-----js------>
      <script>
          var Loginform= document.getElementById("Loginform")
          var Regform= document.getElementById("Regform")
          var Indicator= document.getElementById("Indicator")
            
             function login()
             {
                 Regform.style.transform="translateX(0px)";
                 Loginform.style.transform="translateX(20px)";
                 Indicator.style.transform="translateX(0px)";
             } 

             function register()
             {
                 Regform.style.transform="translateX(-480px)";
                 Loginform.style.transform="translateX(-500px)";
                 Indicator.style.transform="translateX(100px)";
             }
            function conf()
            {   
                alert("Congratulations! You have been registered successfully");
            }

      </script>

  </body>

</html>

<?php

$fn=$_GET['fname'];
$ln=$_GET['lname'];
$em=$_GET['email'];
$pw=$_GET['password'];

$query="INSERT INTO account VALUES('$fn','$ln','$em','$pw')";
$data=mysqli_query($conn,$query);

if($data)
{
   // echo "Data inserted into Database";
}
else{
    //echo "Failed to insert data into Database";
}

?>
