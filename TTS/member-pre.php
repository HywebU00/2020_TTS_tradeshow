<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
<div class="wrapper">
  <!-- header Start -->
  <header class="header fixed">
    <div class="container">
      <a class="sidebarCtrl" href="#">
        <span class="dataText">Menu</span>
        <span></span><span></span><span></span>
      </a>
      <a href="mp.php" class="logo"><img src="images/logo-en.png" alt="網站標題"/></a>

      <button type="button" class="userCtrl icon-user-1"></button>
      <button type="button" class="searchCtrl"></button>
      <!-- navigation Start -->
      <nav class="navigation">
        <ul>
          <li>
            <a class="user" href="#"><i class="icon-user-1"></i></a><a class='iframe' href="include/inc_signUp.php">LOG OUT</a></li>
          <li><a href="#">English</a>
            <ul>
              <li><a href="#" title="正體中文">正體中文</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- MemberNav Start -->
      <div class="MemberNav">
        <ul>
          <li class="userName"><span>你好，</span><span>陳懿玲</span></li>
          <li><a href="member-favorites.php" title="">My FavoritesChange Password</a></li>
          <li class="active">
            <a href="#" title="">Profile Setting</a>
            <ul>
              <li><a href="member-nextshow.php">Visitor</a></li>
              <li class="active"><a href="#">Exhibitor ExhibitorExhibitor</a></li>
              <li><a href="#">Media</a></li>
            </ul>
          </li>
          <li><a href="member-changePW.php" title="">Change Password</a></li>
          <li><a href="member-history.php" title="">History-Visitor</a></li>
          <li><a href="#" title="">History-Exhiibitor</a></li>
          <li><a href="#" title="">History-Media</a></li>
          <li class="signout"><a href="https://www.cw.com.tw/logout" class="">登出</a></li>
        </ul>
      </div>
      <!-- Search Start -->
      <div class="search">
        <form action="" class="form_inline">
          <div class="form_grp">
            <label for="mustSameAsId">帳號:</label>
            <input name="username" id="mustSameAsId" type="text" placeholder="Enter the name of Exhibition or Product" accesskey="S">
          </div>
          <div class="btn_grp">
            <!--注意：手機版清除資料icon <a class="btn-close icon-cancel-1"></a> -->
            <button type="button" class="btn-search">查詢</button>
          </div>
        </form>
      </div>
      <!-- menu Start -->
      <nav class="menu">
        <ul>
          <li><a href="#">About TTS</a></li>
          <li><a href="#">Event</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- header End -->

  <!-- inner-kv -->
  <?php require_once('include/inc_inner-kv.php'); ?>

  <!-- main Start -->
  <div id="center" class="main innerpage">
    <div class="container">
      <div class="col-3-9 member">
        <div class="container">
          <div class="col boxLeft">
            <!-- 預登申請 setting -->
            <?php require_once('include/inc_memberMenu.php'); ?>
          </div>
          <div class="col boxRight">
            <h2>線上參觀登記</h2>
            <h3>個人資訊</h3>
            <form action="" class="form_grid form_vertical">
              <div class="Pre-entry badge-preview">
                <!-- sample1 -->
                <div class="box_grp has-danger">
                  <img src="images/sample1-banner.png" alt="">
                  <div class="box_title">Please enter visitor name：</div>
                  <div class="box_content form-control-danger">
                    <input type="text" placeholder="Tim Lin">
                    <div class="form-control-feedback text-sm">Cannot be blank.</div>
                  </div>
                  <div class="box_title">Please enter the company name：</div>
                  <div class="box_content">
                    <p>Hyweb Technology Col., Ltd.</p>
                    <div class="text-sm">Max 20 characters or 10 Chinese characters.</div>
                  </div>
                  <div class="unchangeable">
                    <div class="box_title">國家 / Country：</div>
                    <div class="box_content">
                      <p>Taiwan</p>
                      <!-- <div class="text-sm">Max 20 characters or 10 Chinese characters.</div> -->
                    </div>
                  </div>
                  <!-- barcode -->
                  <!-- <div class="barcode">
                    <div class="country">Taiwan</div>
                    <img src="images/barcode.png" alt="">
                  </div> -->
                  <!-- 浮水印 -->
                  <!-- <img src="images/watermarking.png" alt="" class="watermarking"> -->
                </div>
              </div>
              <div class="btn_grp">
                <button type="submit" class="login-button">Back</button>
                <button type="submit" class="login-button">Next</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main End -->
  <!-- footer -->
  <?php require_once('include/inc_footer.php'); ?>
</div>
<!-- wrapper End -->
<a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
<?php require_once('include/inc_jq.php'); ?>
<script type="text/javascript">
  $("document").ready (function() {
    $(".toggle").off().on('click', function(e) {
      $( ".listmenu" ).stop().slideToggle( "slow" );
    });
  });
</script>

</body>
</html>
