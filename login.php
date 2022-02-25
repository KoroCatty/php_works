<!-- このログインページは他にも代用できそう。 -->
<?php

session_start(); 

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "car-php";

// Create connection
$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}



?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ABC Car Fleets (Pvt.) Ltd.</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  
    <!-- header section strats -->
    <?php 
    // include navigation
    include("parts/header.php"); 
    ?>

    <script type="text/javascript">
      // make the corresponding navigation tab active
      var element = document.getElementById("index-login");
      element.classList.add("active"); 
    </script>
    <!-- end header section -->



    <?php 
  if (isset($_POST["submit"])) {  

      $email = $_POST['email'];
      $password = $_POST['password'];

      // check if the email belongs to an active customer...
      //customerActiveStatusはｗｅｂサイト上で存在を確かめるもの。DBにはＹかＮのどちらか。
      $query = "SELECT * FROM customers WHERE customerEmail = '$email' ";
      // run query
      $result = $mysqli->query($query);

      // if the email belongs to an active customer...
      if ($result->num_rows == 1) {//1でtrueなら実行

        while ($row = $result->fetch_assoc()) {//rowに格納。

          // check if password matches
          if ($password == $row["customerPassword"]){

            // create session to capture login and customerID  ここでセッションを作る！！！
            $_SESSION['login'] = "customer";
            $_SESSION['customerID'] = $row["customerID"];

            //if redirect session exists, go to redirected page  jsを使い今いたページにリダイレクトする。
            if (isset($_SESSION['redirectURL'])) {
              echo '<script type="text/javascript">
                window.location = "'.substr($_SESSION['redirectURL'], 3).'"; // window.location = "'.$_SESSION['redirectURL'].'";
              </script>';

            }
            // otherwise go to home page once logged in
            else {
              ?>

              <script type="text/javascript">
                window.location = "index.php";
              </script>
              <!-- <script type="text/javascript">
                window.location = "logged_in.php";
              </script> -->

              <?php
            }
          }
          // if password is incorrect, notify the  customer
          else {

            ?>

            <script type="text/javascript">
              alert("Password is incorrect. Please try again.");
              window.location = "login.php";
            </script>

            <?php

          }

        }
        
      } else {
          ?>
          <script type="text/javascript">
            alert("This email is not registered. Please try to sign up.");
            window.location = "login.php";
          </script>
          <?php

        


      }


  }
  else{

  ?>
  <!-- contact section 実際に入力するフォームのところ-->

  <section class="product_section layout_padding contact-us">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Login
        </h2>
      </div>

      <div class="row">
        <div class="container">
  <form method="post" action="#">

    <label for="email">Email</label>
    <input type="email" id="emailname" name="email" placeholder="Your email..">

    <label for="email">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password..">


    <input type="submit" value="Login" name="submit">

    <div class="container signin">
      <p>Don't have an account? <a href="#">Register</a>.</p>
    </div>

  </form>
</div>
        
      </div>
     
    </div>
  </section>

  <!-- end contact section -->

  <?php 

  }

  ?>

  <!-- footer section -->

  <?php include("parts/footer.php"); ?>

  <!-- end footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>