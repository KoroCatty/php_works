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
  <link rel="stylesheet" href="dist/main.css?<?php echo time(); ?>">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  
    <!-- header section strats -->

    <?php 
    // include navigation
    include("parts/header.php");//ヘッダーの使いまわしファイル
    ?>

<!-- このコードで選択中のページ（この場合contact us）のヘッダー内の色を変える。 -->
    <script type="text/javascript">
      // make the corresponding navigation tab active
      var element = document.getElementById("index-contact");
      element.classList.add("active"); 
    </script>
    <!-- end header section -->


  <!-- contact section -->

  <section class="product_section layout_padding contact-us">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>

      <div class="row"><!-- flexを入れるためのrow -->
        <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="email" id="emailname" name="email" placeholder="Your email..">

    <!-- <label for="state">State</label>
    <select id="state" name="state">
      <option value="ACT">ACT</option>
      <option value="NSW">NSW</option>
      <option value="NT">NT</option>
      <option value="QLD">QLD</option>
      <option value="SA">SA</option>
      <option value="TAS">TAS</option>
      <option value="VIC">VIC</option>
      <option value="WA">WA</option>
    </select> -->

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
        
      </div>
     
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
<!-- フッターの使いまわしファイル -->
  <?php include("parts/footer.php"); ?>

  <!-- end footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
 <!-- app. js -->
 <script src="dist/app.js"></script>


</body>

</html>