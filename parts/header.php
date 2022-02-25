<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/logo.png" width="50">
              ABC Car Fleets (Pvt.) Ltd.
            </span>
          </a>

          <!-- ハンバーガーメニュー  ブートストラップで実装してる？ -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <?php

              // if you are logged in as a customer ...
              if (!isset($_SESSION['login'])) { //isset()はtrueを返す。isset関数は、変数に値がセットされていて、かつNULLでないときに、TRUE(真)を戻り値として返します。なので、sessionでログインされてたら、Trueを返して⇓を実行する
              ?>

                <li id="index-home" class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li id="index-about" class="nav-item">
                  <a class="nav-link" href="about.php"> About Us</a>
                </li>
                <li id="index-browse" class="nav-item">
                  <a class="nav-link" href="browse.php">Browse Cars</a>
                </li>
                <li id="index-contact" class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

                <?php
              }
              //ログイン時
              // <!-- カスタマーとしてのメニュー一覧が表示される -->
              if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == 'customer') {
                ?>
                  <li id="index-search" class="nav-item">
                    <!-- <h2 style="color:white;"></h2> -->
                  </li>
                  <div style="color:white; width:100px;" class="loggedin">logged In</div>


                  <li id="index-home" class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li id="index-about" class="nav-item">
                    <a class="nav-link" href="about.php"> About Us</a>
                  </li>
                  <li id="index-browse" class="nav-item">
                    <a class="nav-link" href="browse.php">Browse Cars</a>
                  </li>
                  <li id="index-contact" class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                
                <?php
                }

                // if you are logged in as a manager or staff member ...  マネージャーかスタッフとしてログイン
                // if ($_SESSION['login'] == "manager" || $_SESSION['login'] == "staff") {

                ?>
                  <!-- <li id="index-orders" class="nav-item">
                    <a class="nav-link" href="orders.php">Orders <span class="sr-only">(current)</span></a>
                  </li>
                  <li id="index-inquiries" class="nav-item">
                    <a class="nav-link" href="inquiries.php">Inquiries</a>
                  </li>
                  <li id="index-cars" class="nav-item">
                    <a class="nav-link" href="cars.php">Cars</a>
                  </li>
                  <li id="index-customers" class="nav-item">
                    <a class="nav-link" href="customers.php"> Customers</a>
                  </li>
                  <li id="index-suppliers" class="nav-item">
                    <a class="nav-link" href="suppliers.php">Suppliers</a>
                  </li> -->

                <?php
                // }


                // if you are logged in as a manager ...
                if ($_SESSION['login'] == "manager") {

                ?>
                  <!-- マネージャーだけに表示されるリンク先で、マネージャーのみが社員の変更できるページに飛ぶ。 -->
                  <li id="index-staff" class="nav-item">
                    <a class="nav-link" href="staff.php">Staff</a>
                  </li>

                <?php
                }
              }



              // if you are logged in show 'logout' option only
              if (isset($_SESSION['login'])) { //もしログイン状態がTRUEなら⇓を実行しろ
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a> <!-- ログアウトのページに飛ぶ。 -->
                </li>
              <?php

              } else {
                // if you are NOT logged in show 'login' and 'register' options only　もしログインしてなかったらログインリンクとレジスターボタンを表示させる
              ?>
                <li id="index-login" class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>

                <li id="index-register" class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li>
              <?php

              }

              ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header section -->