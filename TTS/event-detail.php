<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_innerheader.php'); ?>
    <!-- header End -->

    <!-- inner-kv -->
    <div class="inner-kv">
      <div class="container">
       <h1 class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Event</a></h1>
       <div class="img-container">
        <div class="decoration">
          <div class="line wow rollIn" data-wow-delay="0.2s"></div>
          <div class="line wow rollIn" data-wow-delay="0.4s"></div>
        </div>
        <img src="images/banner/EventBg.jpg" alt="" class="cover">
      </div>
      <!-- breadcrumb路徑 -->
      <div class="breadcrumb">
        <ul>
          <li><a href="#">首頁</a></li>
          <li><a href="#">Evnet</a></li>
          <li>Taiwan International Fisheries & Seafood Show</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- main Start -->
  <div id="center" class="main innerpage">
    <div class="container">
     <div class="tabBox">
      <ul class="tabs">
        <li class="active" rel="tab1">2018</li>
        <li rel="tab2">2019</li>
      </ul>
      <div class="tab_container">
       <h3 class="d_active tab_drawer_heading" rel="tab1">2018</h3>
       <div id="tab1" class="tab_content">
        <div class="col-4-8 event-detail">
         <div class="container">
           <div class="col boxLeft">
            <!-- cardBox setting -->
            <div class="cardBox">
              <div class="img-container">
                <!-- banner size: w:307px/h:150px -->
                <a href="#"><img src="images/icon-logo3.jpg" alt="" class="contain"></a>
              </div>
              <div class="caption">Taiwan International Fisheries & Seafood Show</div>
              <div class="btn_grp">
                <div class="btn-left">
                  <!-- <a href="#" class="icon-star-1">Favorites</a> -->
                  <a href="#" class="icon-star-1 active">Favorites</a>
                </div>
                <div class="btn-right"><a href="#" class="icon-globe">Website</a></div>
              </div>
            </div>

            <!-- 預登申請 setting -->
            <?php require_once('include/inc_aheadApply.php'); ?>
          </div>
          <div class="col boxRight">
            <div class="img-container">
              <!-- banner size: w:107px/h:97px -->
              <img src="images/show-banner.png" alt="show banner" class="contain">
            </div>
            <h3><a href="#">Taiwan International Fisheries & Seafood Show</a></h3>
            <div class="form_inline">
              <div class="form_grp">
                <label for="username" class="form_title">Date：</label>
                <div class="form_content">
                  September 13-15, 2018 <a href="#" class="icon-addDate"><img src="images/icon/icon-addDate.jpg" alt="Add to Calendar"><span>Add to Calendar</span></a>
                </div>
              </div>  
              <div class="form_grp">
                <label for="username" class="form_title">Venue：</label>
                <div class="form_content">
                  Area D, Taipe World Trade Center (TWTC Hall 1)
                  (5, Xinyi Rd. Sec.5, Taipei 11011, Taiwan)
                </div>
              </div>
              <div class="form_grp">
                <label for="username" class="form_title">Catogory：</label>
                <div class="form_content">Medical</div>
              </div>
              <div class="form_grp">
                <label for="username" class="form_title">電子郵件：</label>
                <div class="form_content">
                  <a href="mailto:beauty.tw@taitra.org.tw">beauty.tw@taitra.org.tw</a> 
                </div>
              </div>
            </div>
            <div class="form_vertical">
              <div class="form_grp">
                <label for="username" class="form_title">Organizer：</label>
                <div class="form_content">
                 <p>As Taiwan's only B2B Beauty Show, we welcome not.</p>
               </div>
             </div>
             <div class="form_grp">
              <label for="username" class="form_title">Organizer：</label>
              <div class="form_content">
                <ul>
                 <li>Taiwan Cosmetics Industry Association (TWCIA)</li>
                 <li>Taipei Cosmetics Industry Association (TCIA)</li>
                 <li>Chinese Non-Store Retailer Association (CNRA)</li>
                 <li>Industrial Development Bureau, Ministry of Economic Affairs (IDB)</li>
                 <li>Industrial Technology Research Institute (ITRI)</li>
                 <li>Taiwan Micro Invasive Aesthetic Society (TMIAS)</li>
               </ul>
             </div>
           </div>
           <div class="form_grp">
            <label for="username" class="form_title">Brief Interodction：</label>
            <div class="form_content">
              <p>As Taiwan's only B2B Beauty Show, we welcome not only excellent exhibitors to participate, but also key international buyers to explore more opportunities in Taiwan's beauty industry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #tab1 -->
<h3 class="tab_drawer_heading" rel="tab2">2019</h3>
<div id="tab2" class="tab_content">
  dfadsfdasf
</div>
<!-- #tab1 -->
</div>
<!-- .tab_container -->
</div>
</div>

</div>
<!-- main End -->

<!-- footer -->
<?php require_once('include/inc_footer.php'); ?>

</div>
<!-- wrapper End -->

<a href="include/inc_aheadApply.php" class="RigisterModel iframe" title="Register Now">Register Now</a>


<a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
<?php require_once('include/inc_jq.php'); ?>
</body>

</html>
