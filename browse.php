<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
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

  <!-- fonts style 　フォントを変える-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="dist/main.css?<?php echo time(); ?>">
  <!-- responsive style -->

</head>

<body>


  <!-- header section strats -->
  <?php
  // include navigation 使いまわしファイル
  include("parts/header.php");
  ?>

  <!-- 選択中のページのヘッダー内の色を変える -->
  <script type="text/javascript">
    // make the corresponding navigation tab active
    var element = document.getElementById("index-browse");
    element.classList.add("active");
  </script>
  <!-- end header section -->




  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Browse Vehicles
        </h2>
      </div>

      <div class="row">
        <?php
        // get all the cars from the database　DBのcarsテーブルから全てのcarを取り出す
        $query = "SELECT * FROM cars;";

        // run the query
        $result = $mysqli->query($query); //上記をここで実行して、$resultに格納する

        // if there are cars in the database ....もし車がDB内にあれば⇓を実行
        if ($result->num_rows > 0) {

          // loop through all the  rows
          while ($row = $result->fetch_assoc()) {
            //$rowに(loop through)フェッチしたものを格納　mysqli_fetch_assoc() function fetches a result row as an associative array.
        ?>

            <div class="col-sm-6 col-lg-4">
              <div class="box">
                <!-- 車一つ分のボックス -->
                <div class="img-box">
                  <?php
                  // display car image
                  // images/car内のcarIDによって表示させる画像を変更
                  echo '<img src="dist/images/cars/' . $row['carID'] . '.jpeg" alt="">';
                  ?>

                </div>

                <div class="detail-box">
                  <!-- 車名や値段など書かれているセクション -->
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
                      // display the car price //車の値段
                      echo $row["carPrice"];
                      ?>
                    </h5>

                    <div class="star_container">
                      Condition:
                      <?php
                      // show whether it is a used car or a new car  // Used かNewか
                      echo $row["carStatus"];
                      ?>
                      <br>

                      Colour:
                      <?php
                      // display the colour of the car//車の色を表示
                      echo $row["carColour"];
                      ?>
                    </div>
                  </div>
                </div>


                <div class="btn_box">
                  <!--二つのボタンの箱 -->
                  <?php
                  // set correct  url for order.php using the car ID
                  //carIDに基づいてorder.phpページに飛ばす。$rowは上でフェッチしたもの。
                  echo '<a href="" class="view_more-link" style="margin-right: 5px;">';
                  ?>
                  Book Now
                  </a>
                  <a href="" class="view_more-link" style="margin-left: 5px;">
                    Inquire
                  </a>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<h5>
                    No Cars are being rented out at the moment.
                </h5>";
        }
        ?>

      </div>

    </div>
  </section>

  <!-- end product section -->



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