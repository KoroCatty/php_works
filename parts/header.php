<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="header_bottom">
      <div class="container-fluid header--fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span class="header-title">
              <img src="dist/images/logo.png" class="header-title__logo">
              ABC Car Fleets
            </span>
          </a>

          <!--- ハンバーガーメニュー --->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">

              <?php
              // if you are logged in ...
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
              // <!-- メニュー一覧が表示される -->
              if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == 'customer') {
                ?>

                  <h2 class="loggedin_message">
                    Welcome Back
                  </h2>



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
                ?>
              <?php

              }



              // if you are logged in show 'logout' option only
              if (isset($_SESSION['login'])) { //もしログイン状態がTRUEなら⇓を実行
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a> <!-- ログアウトのページに飛ぶ。 -->
                </li>
              <?php

              } else {
                // if you are NOT logged in show 'login' and 'register' options only　もしログインしてない場合ログインリンクとレジスターボタンを表示
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