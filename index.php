<?php
session_start();
// for local server
$dbhost = "localhost"; //ホスト名またはIPアドレス
$dbuser = "root"; //MySQLのユーザー名
$dbpass = "root"; //$usernameのパスワード
$db = "car-php";

// server接続用
// $dbhost = "sql206.epizy.com";
// $dbuser = "epiz_31157109";
// $dbpass = "b3XC96GKERoUO1y";
// $db = "epiz_31157109_kay_php";

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

  <!-- Internet Explorerを使用している人が最新バージョンでサイトを表示する -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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

  <!-- font awesome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


  <link rel="stylesheet" href="dist/main.css?<?php echo time(); ?>">
</head>

<body>
  <div class="hero_area">
    <!-- header section-----------------------  -->
    <?php
    include("parts/header.php");
    ?>


    <!-- 選択中のページ（Home）のヘッダー内の色を変える。 -->
    <script type="text/javascript">
      // make the corresponding navigation tab active
      var element = document.getElementById("index-home"); //navigation.php内にあるindex-homeを使用
      element.classList.add("active"); //たぶんこれで色変えてる
    </script>
    <!-- end header section -->


    <!-- slider section ------------------------------------->
    <!-- スライダーはjQueryで構築されたjsプラグインを使ったbootstrapで実装 -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">

                    <!-- ⇓　sliderの中にあるテキスト　⇓ -->
                    <h1 class="detail-box__title">
                      Welcome To Our Shop
                    </h1>
                    <p class="top-lines">
                      Welcome to ABC Car Fleets (Pvt). Ltd., your number one source for all things cars. We're dedicated to providing you the very best of cars, with an emphasis on affordability, and quality.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="img-box slider-img">
                    <img class="" src="dist/images/slider-1.jpeg" alt="">
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- 二個目のスライド -->
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class="detail-box__title">
                      History
                    </h1>
                    <p class="top-lines">
                      Founded in 2007 by Kojima, ABC Car Fleets (Pvt). Ltd. has come a long way from its beginnings in Melbourne. When Kojima first started out, his passion for cars drove him to start his own business.
                    </p>
                    <a href="about.php">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box slider-img">
                    <img src="dist/images/slider-2.jpg" alt="hero img">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 三個目のスライド -->
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class="detail-box__title">
                      Our Range Of Vehicles
                    </h1>
                    <p class="top-lines">
                      Available brands: Toyota, Nissan, Mazda, Ford, Mitsubishi, Hyundai, Honda, Subaru, Volkswagen, and Holden.
                    </p>
                    <a href="browse.php">
                      View More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box slider-img">
                    <img src="dist/images/slider-3.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- キャラセルの左側のボタン -->
        <div class="carousel_btn_box" style="align-items: center;">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>

          <!-- キャラセルの右側のボタン -->
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!--- product section ------>
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hot of the Week
        </h2>
      </div>

      <div class="row">
        <!--車の列 -->
        <?php
        // get featured cars from the database randomly pick 6 cars
        // DBのcar内のcarFeaturedとcarActiveStatusが　”Y”　に指定されてるものをランダムに表示
        $query = "SELECT * FROM cars WHERE carFeatured = 'Y' ORDER BY RAND() LIMIT 6;";

        // run the query DBに接続したら、SQLの実行が可能。シンプルな SQLは queryメソッドを使用
        // 構文　　$results = $mysql->query('SELECT * FROM items');
        $result = $mysqli->query($query);

        // if you have featured cars ....
        //  num_rowは　SELECT や SHOW のような、実際に結果セットを返す文に対してのみ有効
        if ($result->num_rows > 0) {  //$resultの行数が０以上なら実行

          // loop through all the  rows
          while ($row = $result->fetch_assoc()) { //$rowに(loop through)フェッチしたものを格納　mysqli_fetch_assoc() function fetches a result row as an associative array.
        ?>
            <div class="col-sm-6 col-lg-4">
              <div class="box">
                <!-- 車一つ分のボックス -->
                <div class="img-box">
                  <?php
                  // display car image
                  echo '<img src="dist/images/cars/' . $row['carID'] . '.jpeg" alt="">';
                  //echoで出力し、images/car内のcarIDによって表示させる画像を変更
                  ?>
                </div>


                <div class="detail-box">
                  <!-- 車名や値段などのセクション -->
                  <h5>
                    <?php
                    // display car make and car model as the title
                    //車のメーカーやモデルをここで出力  ex)Toyota  Yaris
                    echo $row["carMake"] . " " . $row["carModel"]; 
                    
                    ?>
                  </h5>

                  <div class="product_info">
                    <h5>
                      <span>$</span>
                      <?php
                      // display the car price
                      echo $row["carPrice"]; 
                      ?>
                    </h5>

                    <div class="star_container">
                      Condition:
                      <?php
                      // show whether it is a used car or a new car. Used かNew
                      echo $row["carStatus"];
                      ?>
                      <br>

                      Colour:
                      <?php
                      // display the colour of the car　車の色を表示する
                      echo $row["carColour"];  
                      ?>
                    </div>
                  </div>
                </div>

                <div class="btn_box">
                  <?php
                  // set correct  url for order.php using the car ID
                  // carIDに基づいて orderページに飛ばす。$rowは上でフェッチしたもの
                  echo '<a href="" class="view_more-link" style="margin-right: 5px;">';
                  ?>
                  Book Now
                  </a>
                  <?php
                  // set correct  url for inquire.php using the car ID
                  echo '<a href="" class="view_more-link" style="margin-left: 5px;">';
                  ?>
                  Inquire
                  </a>
                </div>
              </div>
            </div>
        <?php
          }
        }
        // if no cars are featured ... 
        //  上で、DBのcar内のcarFeaturedとcarActiveStatusが　”Y”　に指定されてるものを表示をしているが、もしfeaturedの車がなかったらelseで⇓が実行される
        else {
          echo "<h5>
                    No Cars are featured at the moment.
                </h5>";
        }
        ?>
      </div>

      <!-- browse.phpのページに遷移 -->
      <div class="btn_box">
        <a href="browse.php" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid  ">
       <!-- コンテナ内をflex -->
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide The Best For You
              </h2>
            </div>
            <p>
              Welcome to ABC Car Fleets (Pvt). Ltd., your number one source for all things cars. We're dedicated to providing you the very best of cars, with an emphasis on affordability, and quality.<br><br>

              Founded in 2007 by Kojima, ABC Car Fleets (Pvt). Ltd. has come a long way from its beginnings in Melbourne. When Kojima first started out, his passion for cars drove him to start his own business. <br><br>

              We hope you enjoy our range of vehicle as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
            </p>
            <a href="about.php">
              Read More
            </a>
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



  <!-- contact section -->

  <section class="product_section layout_padding contact-us">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>

      <div class="row">
        <div class="container">
          <form action="action_page.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="email">Email</label>
            <input type="email" id="emailname" name="email" placeholder="Your email..">


            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit" class="contact-submit__button">

          </form>
        </div>

      </div>

    </div>
  </section>

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

</body>

</html>