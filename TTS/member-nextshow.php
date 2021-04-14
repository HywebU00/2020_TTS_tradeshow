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
            <h2>Next Coming Show</h2>
            <div class="box_content">
              <div class="col-3-9 showlist">
                <div class="container">
                  <div class="col">
                    <div class="img-container">
                      <a href="#"><img src="images/icon-logo1.jpg" alt="" class="contain"></a>
                    </div>
                  </div>
                  <div class="col">
                    <h3>
                      <a href="http://google.com" title="" target="_blank">COMPUTEX TAPEI 2018</a><a href="#" class="link-website icon-globe">website</a>
                    </h3>
                    <time>2018/10/10-2018/12/20</time>
                    <a href="#" class="icon-addDate">
                      <img src="images/icon/icon-addDate.jpg" alt="Add to Calendar"><span>Add to Calendar</span>
                    </a>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">預登方式：</label>
                      <div class="form_content">Pre-Registration</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Quantity：</label>
                      <div class="form_content">1</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Status：</label>
                      <div class="form_content"><span class="label label-OK">OK</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-3-9 showlist">
                <div class="container">
                  <div class="col">
                    <div class="img-container">
                      <a href="#"><img src="images/icon-logo.png" alt="" class="contain"></a>
                    </div>
                  </div>
                  <div class="col">
                    <h3>
                      <a href="http://google.com" title="" target="_blank">COMPUTEX TAPEI 2018</a>
                      <a href="#" class="link-website icon-globe">website</a>
                    </h3>
                    <time>2018/10/10-2018/12/20</time>
                    <a href="#" class="icon-addDate">
                      <img src="images/icon/icon-addDate.jpg" alt="Add to Calendar">
                      <span>Add to Calendar</span>
                    </a>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">預登方式預登方式：</label>
                      <div class="form_content">Pre-Registration</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Quantity：</label>
                      <div class="form_content">1</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">StatusStatus Status：</label>
                      <div class="form_content">
                        <span class="label label-reject">Reject</span>
                      </div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Action：</label>
                      <div class="form_content">
                        <button type="button" class="btn btn-primary">媒體公司資料編輯</button>
                        <button type="button" class="btn btn-primary">Resend Confirmation Letter</button>
                        <button type="button" class="btn btn-primary">Modify the Questionnaire</button>
                        <button type="button" class="btn btn-primary group1" onclick="location.href='images/badge.png'">Badge Preview ＆ Modify</button>
                        <button type="button" class="btn btn-primary group1" onclick="location.href='images/QRcord.jpg'" >QR Code Preview</button>
                        <a href="include/inc_QRcode.php" class="iframe">QR Code Preview</a>
                        <!-- 注意：group1是給colorbox使用，用button開啓,請js改寫觸發方式可正常 -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-3-9 showlist">
                <div class="container">
                  <div class="col">
                    <div class="img-container">
                      <a href="#"><img src="images/icon-logo3.png" alt="" class="contain"></a>
                    </div>
                  </div>
                  <div class="col">
                    <h3>
                      <a href="http://google.com" title="" target="_blank">COMPUTEX TAPEI 2018</a>
                      <a href="#" class="link-website icon-globe">website</a>
                    </h3>
                    <time>2018/10/10-2018/12/20</time>
                    <a href="#" class="icon-addDate">
                      <img src="images/icon/icon-addDate.jpg" alt="Add to Calendar">
                      <span>Add to Calendar</span>
                    </a>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Type：</label>
                      <div class="form_content">Pre-Registration</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Quantity：</label>
                      <div class="form_content">1</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Status：</label>
                      <div class="form_content">
                        <!-- <span class="label label-default">In Review</span>
                        <span class="label label-reject">Reject</span> -->
                        <span class="label label-OK">已付款=OK</span>
                        <span class="label label-default">付款中=Inreview</span>
                        <span class="label label-reject">付款失敗=已拒絕</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
