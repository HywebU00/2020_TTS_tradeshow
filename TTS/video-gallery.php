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
        <h1 class="wow fadeInDown" data-wow-delay="0.2s">video & gallery</h1>
        <div class="img-container">
          <div class="decoration">
            <div class="line wow rollIn" data-wow-delay="0.2s"></div>
            <div class="line wow rollIn" data-wow-delay="0.4s"></div>
          </div>
          <img src="images/banner/galleryBg.jpg" alt="" class="cover"></div>
          
          <!-- breadcrumb路徑 -->
          <div class="breadcrumb">
            <ul>
              <li><a href="#">首頁</a></li>
              <li>News</li>
            </ul>
          </div>
        </div>
      </div>


      <!-- main Start -->
      <div id="center" class="main innerpage">
        <div class="container">

          <?php require_once('include/inc_page.php'); ?>

          <div class="btnfilter">
            <!-- function switch -->
            <div class="btn_grp">
              <button type="button" class="btn-switch icon-video active">Vidoe</button>
              <button type="button" class="btn-switch icon-photo">Gallery</button>
            </div>

            <!-- 注意：小尺寸替代選單select -->
            <div class="RWDselect">
              <div class="form_grp">
                <div class="box_title">資料類型篩檢：</div>
                <div class="box_content">
                  <select name="" id="input" required="required">
                    <option value="">Vidoe</option>
                    <option value="">Gallery</option>
                  </select>
                </div>
              </div>
            </div>
          </div>




          <!-- GridCard video Mode -->
          <div class="col-4 gridCard galleryMode">


           <div class="container">
             <div class="col">
              <div class="gridBox wow fadeInDown" data-wow-delay="0.1s">
               <div class="img-container">
                 <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                 <a href="#" class="group3" title="Me and my grandfather on the Ohoopee.">
                  <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                </a>
              </div>
              <!-- 注意：h3標題2行截字 -->
              <h3><a href="#">Asia Taiwan Expo to get underway in Taichung</a></h3>
            </div>
          </div>
          <div class="col variable">
            <div class="gridBox wow fadeInDown" data-wow-delay="0.4s">
              <div class="img-container">
               <a href="https://www.youtube.com/watch?v=1XN6hvXwQDg" class="vimeo"  title="2ather on the Ohoopee.">
                <span class="icon-play"></span><!-- 注意：有影片加按鈕 -->
                <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                <img src="images/banner/KV-Banner6.png" alt="" class="cover">
              </a>
              <!-- 小尺寸內嵌影片播放 -->
              <iframe class="m_video" width="100%" height="100%" src="https://www.youtube.com/embed/xI0xKZtoEEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h3><a href="#">TWTC NEW YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</a></h3>
          </div>
        </div>
        <div class="col">
          <div class="gridBox wow fadeInDown" data-wow-delay="0.3s">
           <div class="img-container">
             <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
             <a href="images/banner/KV-Banner4.jpg" class="group3"  title="Me and my grandfather on the Ohoopee.">
              <img src="images/banner/KV-Banner4.jpg" alt="" class="cover">
            </a>
          </div>
          <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</a></h3>
        </div>
      </div>
      <div class="col variable">
        <div class="gridBox wow fadeInDown" data-wow-delay="0.4s">
          <div class="img-container">
           <a href="https://www.youtube.com/watch?v=1XN6hvXwQDg" class="vimeo"  title="2ather on the Ohoopee.">
            <span class="icon-play"></span><!-- 注意：有影片加按鈕 -->
            <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
            <img src="images/banner/KV-Banner6.png" alt="" class="cover">
          </a>
          <!-- 小尺寸內嵌影片播放 -->
          <iframe class="m_video" width="100%" height="100%" src="https://www.youtube.com/embed/xI0xKZtoEEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h3><a href="#">TWTC NEW YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</a></h3>
      </div>
    </div>
    <div class="col">
      <div class="gridBox wow fadeInDown" data-wow-delay="0.5s">
       <div class="img-container">
         <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
         <a href="images/banner/KV-Banner1.jpg" class="group3"  title="he Ohoopee.">
          <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
        </a>
      </div>
      <h3><a href="#">TWTC NEW YEAR SHOPPING FAIR</a></h3>
    </div>
  </div>
  <div class="col">
    <div class="gridBox wow fadeInDown" data-wow-delay="0.3s">
     <div class="img-container">
       <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
       <a href="images/banner/KV-Banner2.jpg" class="group3"  title="Me and my grandfather on the Ohoopee.">
        <img src="images/banner/KV-Banner2.jpg" alt="" class="cover">
      </a>
    </div>
    <h3><a href="#">TWTC NEW YEAR SHOPPING FAIR</a></h3>
  </div>
</div>
<div class="col">
  <div class="gridBox wow fadeInDown" data-wow-delay="0.4s">
    <div class="img-container">
     <a href="http://player.vimeo.com/video/2285902" class="vimeo"  title="2ather on the Ohoopee.">
      <span class="icon-play"></span><!-- 注意：有影片加按鈕 -->
      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
      <img src="images/banner/KV-Banner6.png" alt="" class="cover">
    </a>
  </div>
  <h3><a href="#">TWTC NEW YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</a></h3>
</div>
</div>
<div class="col">
  <div class="gridBox wow fadeInDown" data-wow-delay="0.5s">
   <div class="img-container">
     <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
     <a href="images/banner/KV-Banner1.jpg" class="group3"  title="he Ohoopee.">
      <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
    </a>
  </div>
  <h3><a href="#">TWTC NEW YEAR SHOPPING FAIR</a></h3>
</div>
</div>
<div class="col">
  <div class="gridBox wow fadeInDown" data-wow-delay="0.3s">
   <div class="img-container">
     <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
     <a href="images/banner/KV-Banner1.jpg" class="group3"  title="Me and my grandfather on the Ohoopee.">
      <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
    </a>
  </div>
  <h3><a href="#">TWTC NEW YEAR SHOPPING FAIR</a></h3>
</div>
</div>
<div class="col">
  <div class="gridBox wow fadeInDown" data-wow-delay="0.4s">
    <div class="img-container">
     <a href="http://player.vimeo.com/video/2285902" class="vimeo"  title="2ather on the Ohoopee.">
      <span class="icon-play"></span><!-- 注意：有影片加按鈕 -->
      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
      <img src="images/banner/KV-Banner6.png" alt="" class="cover">
    </a>
  </div>
  <h3><a href="#">TWTC NEW YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</a></h3>
</div>
</div>
<div class="col">
  <div class="gridBox wow fadeInDown" data-wow-delay="0.5s">
   <div class="img-container">
     <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
     <a href="images/banner/KV-Banner1.jpg" class="group3"  title="he Ohoopee.">
      <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
    </a>
  </div>
  <h3><a href="#">TWTC NEW YEAR SHOPPING FAIR</a></h3>
</div>
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

</body>

</html>
