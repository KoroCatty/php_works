<?php

session_start();


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "car-php";

// $server = "sql206.epizy.com";
// $username = "epiz_31157109";
// $password = "b3XC96GKERoUO1y";
// $dbname = "epiz_31157109_kay_php";

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
  <!-- オリジナルの（Favicon）を指定 -->
  <link rel="icon" href="dist/images/favicon.png" type="image/gif" />


  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ABC Car Fleets (Pvt.) Ltd.</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="dist/main.css?<?php echo time(); ?>">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <?php include("parts/header.php"); ?>

  <script type="text/javascript">
    var element = document.getElementById("index-register");
    //navigation.php内にあるindex-homeを使用
    element.classList.add("active");
  </script>
  <!-- end header section -->



  <?php
  if (isset($_POST["submit"])) {
    //isset関数は、変数に値がセットされていて、かつNULLでないときに、TRUE(真)を戻り値として返す。従ってsessionでログインされてたら、Trueを返して⇓を実行

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if the email already exists or is deleted (inactive from database)
    $query = "SELECT customerEmail FROM customers WHERE customerEmail = '$email' AND customerActiveStatus = 'Y';";
    // run query
    $result = $mysqli->query($query); //$resultに格納

    // if the email is new or  has been deleted ...
    //０と同じなら実行
    if ($result->num_rows == 0) {
      // get the next customer ID    MySQL MAX() function returns the maximum value of an expression.(一番新しいIDナンバーの行を作る)
      $query2 = "SELECT MAX(customerID) AS maxCustomerID FROM customers;";
      $result2 = $mysqli->query($query2);

      $row = $result2->fetch_assoc(); //rowに格納

      $largestNumber = $row['maxCustomerID']; //largestNumberに一番新しい番号を格納

      $newCustomerID = $largestNumber + 1; //新しいカスタマーのIDは＋１がされた状態で作られる

      // Insert customer details into database　　query3にDBにインサートする内容を格納。
      $query3 = "INSERT INTO `customers`(`customerID`, `customerFirstName`, `customerLastName`, `customerTelephone`,  `customerEmail`, `customerPassword`) VALUES ('$newCustomerID','$firstName','$lastName','$telephone','$email','$password');";

      $mysqli->query($query3); //ここでqueryの実行。
      // Once registered, go to login page
  ?>

      <script type="text/javascript">
        window.location = "login.php";
      </script>
    <?php

    }
    // if the email exists and is active, ask user to login
    else {

    ?>

      <script type="text/javascript">
        alert("This email is already registered. Please try to login.");
        window.location = "register.php";
      </script>
    <?php


    }
  } else {

    ?>
    <!-- contact section -->

    <section class="product_section layout_padding contact-us">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Register
          </h2>
          <p>Please fill in this form to create an account.</p>
        </div>
        <div class="row">
          <div class="container">
            <form method="post" action="#">

              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" placeholder="Your first name.." required="true">

              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Your last name.." required="true">


              <div class="row">
                <div class="col-6">
                  <label for="telephone">Telephone</label>
                  <input type="text" id="telephone" name="telephone" placeholder="Your telephone.." required="true" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                </div>
              </div>


              <label for="email">Email</label>
              <input type="email" id="emailname" name="email" placeholder="Your email.." required="true">

              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Your password.." required="true" onkeyup="checkPass();">

              <label for="confirmPassword">Confirm Password</label>
              <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password.." required="true" onkeyup="checkPass();">
              <!-- onkeyup 属性...当該要素上で押されていたキーから指が離れた際に発生するイベント -->

              <input id="submit" type="submit" value="Register" disabled="true" name="submit">

              <div class="container signin">
                <p>Already have an account? <a href="login.php">Login</a>.</p>
              </div>

            </form>
          </div>

        </div>

      </div>
    </section>

  <?php

  }

  ?>

  <!-- end contact section -->

  <!-- footer section -->

  <?php include("parts/footer.php"); ?>

  <!-- end footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- app. js -->
  <script src="dist/app.js"></script>

  <script type="text/javascript">
    // check if password and confirm password matched　ｊｓでマッチしているかチェック
    function checkPass() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      // if passwords don't match, disable the submit button
      if (password != confirmPassword) {
        document.getElementById("submit").disabled = true;
      }
      // if passwords match, enable the submit button
      else {
        document.getElementById("submit").disabled = false;
      }
    }
  </script>


</body>

</html>