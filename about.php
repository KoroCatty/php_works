<?php
session_start(); 
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
  <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <!-- <link href="css/style.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="dist/main.css?<?php echo time(); ?>">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->

    <?php 
    // include navigation
    include("parts/header.php");  //ヘッダー内にあるhomeやAbout Usなどどのページにもあるので、これで使い回す
    ?>


<!-- このコードで選択中のページ（この場合about us）のヘッダー内の色を変える。 -->
    <script type="text/javascript">
      // make the corresponding navigation tab active
      var element = document.getElementById("index-about");
      element.classList.add("active"); 
    </script>
    <!-- end header section -->

    
  <!-- about section -->

  <section class="about_section" style="background-color: white; color: black;">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide The Best For You
              </h2>
            </div>
            <p style="color: black;">
              Welcome to ABC Car Fleets (Pvt). Ltd., your number one source for all things cars. We're dedicated to providing you the very best of cars, with an emphasis on affordability, and quality.<br><br>

Founded in 2007 by Kazuya, ABC Car Fleets (Pvt). Ltd. has come a long way from its beginnings in Melbourne. When Kazuya first started out, his passion for cars drove him to start his own business. <br><br>

We hope you enjoy our range of vehicle as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
            </p>
            
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="dist/images/about-img.jpeg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- footer section -->

  <?php include("parts/footer.php"); ?><!-- 使いまわしのファイルを表示させる -->

  <!-- end footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
 <!-- app. js -->
 <script src="dist/app.js"></script>


</body>

</html>