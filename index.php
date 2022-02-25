<?php
session_start(); 

 $dbhost = "localhost";//ホスト名またはIPアドレス
 $dbuser = "root";//MySQLのユーザー名
 $dbpass = "root";//$usernameのパスワード
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

  <!-- この指定をするとInternet Explorerを使用している人が最新バージョンでサイトを表示する』 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />  <!-- 【content=”IE=edge”】というのは、例えばIE8を使用していた場合、IE8の最新で表示 -->  

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />   <!-- オリジナルの（Favicon）を指定することができます。 -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" /><!-- ホームページのファイル（HTMLファイル）に書く「このページは誰々さんが作りました」な情報のこと -->

  <title>ABC Car Fleets (Pvt.) Ltd.</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- レスポンシブと普通のCSSはこのように分けてやると良い。 -->
  <!-- Custom styles for this template -->
<!-- 下記のようにするとcashe に関係なく常に最新のｃｓｓのコードが読まれる (ただしファイル名を.phpにせなあかん)-->
  <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->


    <!-- ページを一つ追加したからサイトのメニューを更新しなきゃ!とは思ったものの、ページ数が多くて大変…。 経験がある方もいらっしゃると思います。そのような場合は、サイトのメニューを外部ファイル化しておくことで手軽に更新できるようになります。 ヘッダーやフッター、サイドバーなど、どのページでも表示させる部分のHTMLコードを外部ファイル化させて、各ページで1つのファイルを使いまわす形にすれば、そのファイルを変更するだけで、その変更内容がすべてのページに反映されます。 外部ファイル化を行う方法はいくつかありますが、『PHP』を使う方法が一般的です。 -->
    <?php 
    // include navigation
    include("parts/header.php");  //ヘッダー内にあるhomeやAbout Usなどどのページにもあるので、これで使い回す
    ?>


<!-- このコードで選択中のページ（この場合Home）のヘッダー内の色を変える。 -->
    <script type="text/javascript">
      // make the corresponding navigation tab active
    	var element = document.getElementById("index-home");//navigation.php内にあるindex-homeを使用
  		element.classList.add("active"); //たぶんこれで色変えてる
    </script>
    <!-- end header section -->


    
    <!-- slider section -->       <!-- スライダーはjQueryで構築されたjsプラグインを使ったbootstrapで実装されている？ -->  
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box"> <!-- ⇓　sliderの中にあるテキスト　⇓ -->
                    <h1>
                      Welcome to our shop
                    </h1>
                    <p>
                       Welcome to ABC Car Fleets (Pvt). Ltd., your number one source for all things cars. We're dedicated to providing you the very best of cars, with an emphasis on affordability, and quality.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-1.jpeg" alt="">
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
                    <h1>
                      A bit of history
                    </h1>
                    <p>
                      Founded in 2007 by Kazuya, ABC Car Fleets (Pvt). Ltd. has come a long way from its beginnings in Melbourne. When Kazuya first started out, his passion for cars drove him to start his own business.
                    </p>
                    <a href="about.php">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-2.jpeg" alt="">
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
                    <h1>
                      Our range of vehicles
                    </h1>
                    <p>
                      Available brands: Toyota, Nissan, Mazda, Ford, Mitsubishi, Hyundai, Honda, Subaru, Volkswagen, and Holden.
                    </p>
                    <a href="browse.php">
                      View More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-3.jpeg" alt="">
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


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hot of the Week
        </h2>
      </div>

     <div class="row">   <!--車の列 -->
      	<?php
        // get featured cars from the database randomly pick 6 cars
        // DBのcar内のcarFeaturedとcarActiveStatusが　”Y”　に指定されてるものを表示する
      	$query = "SELECT * FROM cars WHERE carFeatured = 'Y' ORDER BY RAND() LIMIT 6;";
   

        // select top([レコード取得件数]) [列名] from [テーブル名] order by NEWID()

        // run the query DBに接続したら、SQLを実行することができます。シンプルな SQLを使う場合は queryメソッドが便利。
        // 構文　　$results = $mysql->query('SELECT * FROM items');
        $result = $mysqli->query($query);

        // if you have featured cars ....
        //  num_rowは　SELECT や SHOW のような、実際に結果セットを返す文に対してのみ有効？
        if ($result->num_rows > 0) {  //$resultの行数が０以上なら実行しろ

          // loop through all the  rows
          while($row = $result->fetch_assoc()) {//$rowに(loop through)フェッチしたものを格納？　mysqli_fetch_assoc() function fetches a result row as an associative array.
          	?>
          	<div class="col-sm-6 col-lg-4">
	          <div class="box"><!-- 車一つ分のボックス -->
	            <div class="img-box">
	            	<?php
                // display car image
	              echo '<img src="images/cars/'.$row['carID'].'.jpeg" alt="">';
                //echoで出力し、images/car内のcarIDによって表示させる画像を変えている
	              ?>

	              <?php
                // set correct  url for deatils.php using the car ID
                //aタグで違うページに行く際に、$rowに格納されたcarIDを出力する
                // echo '<a href="details.php?id='.$row['carID'].'" class="add_cart_btn">'; ?>
	              <!-- //   <span>
	              //     View Details
	              //   </span> -->
	          </a>
	            </div>

	           <div class="detail-box">  <!-- 車名や値段など書かれているセクション -->
	              <h5>
	                <?php 
                  // display car make and car model as the title
                  echo $row["carMake"]." ".$row["carModel"]; //車のメーカーやモデルをここで出力している  ex)Toyota  Yaris
                  ?>
	              </h5>

	              <div class="product_info">
	                <h5>
	                  <span>$</span> 
                    <?php 
                    // display the car price
                    echo $row["carPrice"]; //車の値段をここで表示している
                    ?>
	                </h5>

	                <div class="star_container">
	                  Condition: 
                    <?php 
                    // show whether it is a used car or a new car 
                    echo $row["carStatus"];// Used かNewをここで表示している。
                    ?>
                    <br>
                    
                    Colour: 
                    <?php 
                    // display the colour of the car
                    echo $row["carColour"];  //車の色を表示する
                    ?>
                  </div>
                </div>
              </div>
              
              <div class="btn_box">
                <?php 
                // set correct  url for order.php using the car ID
                //orderページに飛ばすが、carIDに基づいて飛ばす。$rowは上でフェッチしたもの。
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
        //  上で、DBのcar内のcarFeaturedとcarActiveStatusが　”Y”　に指定されてるものを表示する　をしているが、
        // もしfeaturedの車がなかったらelseで⇓が実行される
        else {
          echo "<h5>
                    No Cars are featured at the moment.
                </h5>";
        }
      	?>
      </div>

<!-- View Moreのボタンを押したらbrowse.phpのページに飛ぶ。最初はAjaxと思っていた。 -->
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
    <div class="row">  <!-- コンテナ内をflexにするためにこのrowのdivを作っている。 -->
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide The Best For You
              </h2>
            </div>
            <p>
              Welcome to ABC Car Fleets (Pvt). Ltd., your number one source for all things cars. We're dedicated to providing you the very best of cars, with an emphasis on affordability, and quality.<br><br>

Founded in 2007 by Kazuya, ABC Car Fleets (Pvt). Ltd. has come a long way from its beginnings in Melbourne. When Kazuya first started out, his passion for cars drove him to start his own business. <br><br>

We hope you enjoy our range of vehicle as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about-img.jpeg" alt="">
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

      <div class="row">  <!-- コンテナ内をflexにするためにこのrowのdivを作っている。 -->
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

<?php include("parts/footer.php"); ?>  <!-- footerは使いまわしするので、これでフッターページを使いまわしする -->

  <!-- end footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>