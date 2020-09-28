<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
<!-- mobile menu -->
<div class="wrapper MP">
  <!-- header Start -->
  <header class="header fixed">
    <div class="container">
      <a class="sidebarCtrl" href="#">
        <span class="dataText">Menu</span>
        <span></span><span></span><span></span>
      </a>
      <h1>
        <a href="mp.php" class="logo"><img src="images/logo-en.png" alt="網站標題"/></a>
      </h1>
      <button type="button" class="searchCtrl"></button>
      <!-- navigation Start -->
      <nav class="navigation">
        <ul>
          <li id="loginFuncArea"><a class='iframe' href="include/inc_signUp.php">LOG IN</a><a href="#">SIGN UP</a></li>
          <li id="langMenu"><a href="#">English</a>
            <ul>
              <li><a href="#" title="正體中文">正體中文</a></li>
              <!-- <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/id.pdf" target="_blank">Indonesia</a></li>
              <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/th.pdf" target="_blank" title="ภาษาไทย">ภาษาไทย</a></li>
              <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/vn.pdf" target="_blank" title="Tiếng Việt Nam">Tiếng Việt Nam</a></li> -->
            </ul>
          </li>
        </ul>
      </nav>
      <!-- Search Start -->
      <div class="search">
        <form action="" class="form_inline">
          <div class="form_grp">
            <label for="mustSameAsId">帳號:</label>
            <input name="username" id="mustSameAsId" type="text" placeholder="Enter the name of Exhibition or Product" accesskey="S">
          </div>
          <div class="btn_grp">
            <!-- <a class="btn-close"><span class="icon-cancel-1"></span></a> -->
            <button type="button" class="btn-search">查詢</button>
          </div>
        </form>
      </div>
      <!-- menu Start -->
      <nav class="menu">
        <ul>
          <li><a href="#">About TTS</a>
          </li>
          <li><a href="#">Event</a>
          </li>
          <li><a href="#">Gallery</a>
          </li>
          <li><a href="#">News</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- header End -->
  <!-- main Start -->
  <div id="center" class="main">
    <div class="container">
      <section class="section col-12 KV-Banner">
        <div class="container">
          <div class="col">
            <!-- startText -->
            <!-- <div class="startText">
              <div class="wow fadeInDown slogan" data-wow-delay="0.3s">Discover Great events <span>Register today</span></div>
            </div> -->
            <div class="startText zh">
              <div class="slogan" data-wow-delay="0.3s">發掘更多展覽<span>立刻註冊</span></div>
            </div>
            <!-- function button -->
            <div class="startBtn">
              <button type="button" class="btn-switch">About Us</button>
              <button type="button" class="btn-switch">Events</button>
            </div>
            <!-- 各展覽館 -->
            <div class="singleSlider">
              <a href="http://google.com" target="_blank">
                <div class="img-container">
                  <div class="BuildingName">(1) 世界貿易中心展覽一館</div>
                  <img src="images/banner/KV-Banner1.jpg" class="cover" alt="banner">
                </div>
              </a>
              <a href="http://google.com" target="_blank">
                <div class="img-container">
                  <div class="BuildingName">(2) 世界貿易中心展覽三館</div>
                  <img src="images/banner/KV-Banner2.jpg" class="cover" alt="banner">
                </div>
              </a>
              <a href="http://google.com" target="_blank">
                <div class="img-container">
                  <div class="BuildingName">(3) 臺北國際會議中心</div>
                  <img src="images/banner/KV-Banner3.jpg" class="cover" alt="banner">
                </div>
              </a>
              <a href="javascript:void(0)">
                <div class="img-container">
                  <div class="BuildingName">(4) Taipei Nangang Exhibition Center</div>
                  <img src="images/banner/KV-Banner4.jpg" class="cover" alt="banner">
                </div>
              </a>
              <a href="javascript:void(0)">
                <div class="img-container">
                  <div class="BuildingName">(5) MICE 高雄會展網</div>
                  <img src="images/banner/KV-Banner5.jpg" class="cover" alt="banner">
                </div>
              </a>
            </div>
            <!-- /slider end -->
          </div>
        </div>
      </section>
      <!-- 裝飾背景圖 -->
      <section class="section col-4-8 MP-gridCard wow fadeInDown" data-wow-delay=".4s">
        <div class="container">
          <div class="col wow fadeInDown">
            <h2>Upcoming Events</h2>
            <!-- particles-->
            <!-- <div id="particles-js"></div>
            <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
            <script  src="vendor/particles/js/index.js"></script> -->
            <!-- end-->
            <div class="svgLogo"></div>
            <!-- load include/svg/xxx.html-->
          </div>

          <div class="col">
            <!-- 小尺寸singleSlider start -->
            <div class="m_singleSlider">
              <!-- 001 -->
              <div>
                <div class="img-container">
                  <a href="javascript:void(0);" title="">
                    <img src="images/banner/KV-Banner4.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <!-- 注意：h3和P一併：截字二行字 -->
                  <h3>小尺寸01-2018 Smart Asia 2018 Smart Asia Taiwpo to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09"><span>January 05-09, 2018</span></time>
                  <a href="https://www.google.com/"><span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span></a>
                  <p><a href="#">Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading platf ...</a></p>
                </div>
              </div>
              <!-- 002 -->
              <div>
                <div class="img-container">
                  <a href=javascript:void(0); title="">
                    <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <!-- <h3>FastenerFastener 2018 Smart Asia</h3> -->
                  <h3>小尺寸02-字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多</h3>
                  <time datetime="2018.01.06-09"><span>January 05-09, 2018</span></time>

                  <a href="#"><span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span></a>
                  <p>Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading...</p>
                </div>
              </div>
              <!-- 003 -->
              <div>
                <div class="img-container">
                  <a href="http://google.com" title="">
                    <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>小尺寸03-Asia Taiwan Expo to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09"><span>January 05-09, 2018</span></time>

                  <a href="#"><span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span></a>
                  <p>rading platform for sourcing and procurement, Fastener Taiwan features ...</p>
                </div>
              </div>
              <!-- 004 -->
              <div>
                <div class="img-container">
                  <a href="http://google.com" title="">
                    <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>小尺寸04-FastenerFastener 2018 Smart Asia</h3>
                  <time datetime="2018.01.06-09"><span>January 05-09, 2018</span></time>
                  <a href="#"><span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span></a>
                  <p>Fshow in Taiwan. Servinchung...</p>
                </div>
              </div>
              <!-- 005 -->
              <div>
                <div class="img-container">
                  <a href="#" title="">
                    <img src="images/banner/KV-EN.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>小尺寸05-to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09"><span>January 05-09, 2018</span></time>
                  <a href="#"><span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span></a>
                  <p>rading platform for sourcing and procurement, Fastener Taiwan features ...</p>
                </div>
              </div>
            </div>
            <!-- 小尺寸singleSlider end -->

            <!-- 大尺寸slider -->
            <div class="singleSlider">
              <!-- A組 -->
              <div>
                <!-- A-01 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸A-01-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & Spirits &</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- A-02 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="javascript:void(0);" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸A-02-TWTC NEW YEAR SHOPPING FAIRFood， Frozen Prepared</h3>
                          <p>Wine & Spirits， Coffee</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- A-03 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸A-03-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Confections & Biscuits， Health Food</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner4.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- A-04 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸A-04-TWTC NEW YEAR TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>

              <!-- B組 -->
              <div>
                <!-- B-01 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸B-01-SHOPPING FAIR</h3>
                          <p>Wine & Spirits， Coffee & Tea...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner4.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- B-02 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸B-02-SHOPPING FAIR</h3>
                          <p>Wine & Spirits， Coffee & Tea...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- B-03 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸B-03-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & SpiritsPreserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-EN.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- B-04 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸B-04-TWTC NEW YEAR TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-EN3.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>

              <!-- C組 -->
              <div>
                <!-- C-01 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸C-01-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & Spiriea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leoceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- C-02 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸C-02-TWTC NEW YEAR SHOPPING FAIRFood， Frozen Prepared</h3>
                          <p>Wine & Spirits， Coffee & Tea</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- C-03 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸C-03-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner2.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- C-04 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸C-04-TWTC NEW YEAR TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>

              <!-- D組 -->
              <div>
                <!-- D-01 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸D-01-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leoceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- D-02 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸D-02-TWTC NEW YEAR SHOPPING FAIRFood， Frozen Prepared</h3>
                          <p>Wine & Spirits， Coffee & Tea</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- D-03 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸D-03-TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner2.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
                <!-- D-04 -->
                <div class="gridBox">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09"><span>JAN 05-09, 2019</span></time>
                          <h3>大尺寸D-04-TWTC NEW YEAR TWTC NEW YEAR SHOPPING FAIR</h3>
                          <p>Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="javascript:void(0)" target="_blank" class="readmore">Read More</a>
          </div>
        </div>
      </section>
      <!-- What's on -->
      <section class="section col-12 whatsOn wow fadeInDown" data-wow-delay=".4s">
        <!-- 注意：只有這個標題要加連結 -->
        <h2 class=""><a href="http://google.com" target="_blank">What's on</a></h2>
        <div class="container">
          <div class="col">
            <!-- slider start -->
            <div class="singleSlider">
              <!-- 01 -->
              <div>
                <div class="img-container">
                  <a href="javascript:void(0);" title="">
                    <img src="images/default.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <!-- 注意：h3和P一併：截字二行字 -->
                  <h3>Asia Taiwan Expo to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09">January 05-09, 2018</time><span class="unit">TATRA</span>
                  <p><a href="#">Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading platform for sourcing and procurement, Fastener Taiwan featuresFastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading platform for sourcing and procurement, Fastener Taiwan features ...</a></p>
                </div>
              </div>
              <!-- 02 -->
              <div>
                <div class="img-container">
                  <a href=javascript:void(0); title="">
                    <img src="images/default2.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <!-- <h3>FastenerFastener 2018 Smart Asia</h3> -->
                  <h3>字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多</h3>
                  <time datetime="2018.01.06-09">January 05-09, 2018</time>
                  <p>Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading...</p>
                </div>
              </div>
              <!-- 03 -->
              <div>
                <div class="img-container">
                  <a href="http://google.com" title="">
                    <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>Asia Taiwan Expo to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09">January 05-09, 2018</time><span class="unit">ABC</span>
                  <p>rading platform for sourcing and procurement, Fastener Taiwan features ...</p>
                </div>
              </div>
              <!-- 04 -->
              <div>
                <div class="img-container">
                  <a href="http://google.com" title="">
                    <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>FastenerFastener 2018 Smart Asia</h3>
                  <time datetime="2018.01.06-09">January 05-09, 2018</time><span class="unit">TATRA</span>
                  <p>Fshow in Taiwan. Serving as a trading2018 Smart Asia 2018 Smart Asia Taiwan Expo to get underway in Taichung...</p>
                </div>
              </div>
              <!-- 05 -->
              <div>
                <div class="img-container">
                  <a href="#" title="">
                    <img src="images/banner/KV-EN.jpg" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>to get underway in Taichung</h3>
                  <time datetime="2018.01.06-09">January 05-09, 2018</time><span class="unit">TATRA</span>
                  <p>rading platform for sourcing and procurement, Fastener Taiwan features ...</p>
                </div>
              </div>
            </div>
            <!-- slider end -->
            <a href="javascript:void(0)" target="_blank" class="readmore">Read More</a>
          </div>
        </div>
      </section>
      <!--PHOTO & VIDEO GALLERY -->
      <section class="section col-12 photoVideo wow fadeInDown" data-wow-delay=".6s">
        <h2 class="">PHOTO & VIDEO GALLERY</h2>
        <div class="container">
          <div class="col">
            <!-- 小尺寸 singleSlider -->
            <div class="m_singleSlider">
              <!-- 01 -->
              <div>
                <div class="img-container">
                  <a href="http://player.vimeo.com/video/2285902" target="_blank" class="youtube" title="Me and my grandfather on the Ohoopee.">
                    <span class="icon-play"></span>
                    <img src="images/banner/KV-Banner5.png" alt="" class="cover">
                  </a>
                </div>
                <div class="caption">
                  <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                  <time datetime="2019.05.09">JAN 05-09, 2019</time>
                </div>
              </div>
              <!-- 02 -->
              <div>
                <div class="img-container">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xI0xKZtoEEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                </div>
                <div class="caption">
                  <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                  <time datetime="2019.05.09">JAN 05-09, 2019</time>
                </div>
              </div>
              <!-- 03 -->
              <div>
                <div class="img-container">
                    <a href="images/banner/KV-EN.jpg" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                    </a>
                </div>
                <div class="caption">
                  <h3>TAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                  <time datetime="2019.05.09">JAN 05-09, 2019</time>
                </div>
              </div>
              <!-- 04 -->
              <div>
                  <div class="img-container">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xI0xKZtoEEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                  </div>
                  <div class="caption">
                    <h3>TWTC NEW YEAR SHOPPING  NEW YEAR SHOPPING FAIR</h3>
                    <time datetime="2019.05.09">JAN 05-09, 2019</time>
                  </div>
              </div>
            </div>
            <!-- 小尺寸 singleSlider end -->

            <div class="masonry-container test-A">
              <!-- 1 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="images/banner/KV-EN.jpg" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                        </div>
                      </div>
                      <img src="images/banner/KV-EN.jpg" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>
              <!-- 2 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="images/banner/KV-Banner6.png" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR</h3>
                        </div>
                      </div>
                      <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                    </a>
                  </div>
                </div>
              </div>
              <!-- 3 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="http://player.vimeo.com/video/2285902" target="_blank" class="youtube"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴</h3>
                        </div>
                        <span class="icon-play"></span>
                        <img src="images/banner/KV-Banner3.jpg" alt="" class="cover">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- 4 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="javascript:void(0)" target="_blank" class="youtube"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴馬拉松、健身產業、健身房、智慧穿戴TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴</h3>
                        </div>
                        <span class="icon-play"></span>
                        <img src="images/banner/KV-Banner5.jpg" alt="" class="cover">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- 5 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="http://player.vimeo.com/video/2285902" target="_blank" class="youtube"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴</h3>
                        </div>
                        <span class="icon-play"></span>
                        <img src="images/banner/KV-EN2.jpg" alt="" class="cover">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- 6 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="http://player.vimeo.com/video/2285902" target="_blank" class="youtube"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <h3>TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴TWTC NEW YEAR SHOPPING FAIR TWTC NEW 馬拉松、健身產業、健身房、智慧穿戴</h3>
                        </div>
                        <span class="icon-play"></span>
                        <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- 7 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="images/banner/KV-Banner2.jpg" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                         <time datetime="2019.05.09">JAN 05-09, 2019</time>
                         <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                       </div>
                       <img src="images/banner/KV-Banner2.jpg" alt="" class="cover">
                     </div>
                   </a>
                 </div>
               </div>
              </div>
              <!-- 8 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="images/banner/KV-Banner1.jpg" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                         <time datetime="2019.05.09">JAN 05-09, 2019</time>
                         <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                       </div>
                       <img src="images/banner/KV-Banner1.jpg" alt="" class="cover">
                     </div>
                   </a>
                 </div>
               </div>
              </div>
              <!-- 9 -->
              <div class="panel">
                <div class="panel-wrapper">
                  <div class="img-container">
                    <a href="images/banner/KV-EN3.jpg" target="_blank" class="group3"  title="Me and my grandfather on the Ohoopee.">
                      <div class="caption">
                        <div class="cardText">
                         <time datetime="2019.05.09">JAN 05-09, 2019</time>
                         <h3>TWTC NEW YEAR SHOPPING FAIRTWTC YEAR SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR</h3>
                       </div>
                       <img src="images/banner/KV-EN3.jpg" alt="" class="cover">
                     </div>
                   </a>
                 </div>
               </div>
              </div>
            </div>
            <a href="javascript:void(0);" class="readmore">View all gallery</a>
          </div>
        </div>
      </section>
      <!--TTS intro -->
      <section class="section col-12 TTSintro">
        <div class="container">
          <div class="col wow fadeInDown" data-wow-delay=".2s">
            <h2>TESTIMONIALS</h2>
            <p class="">" A great conference from all aspects; information, interaction, location and organization. The highest level of the attendees and the presentations made the conference technically valuable. The conference, from a vendors point of view, was organized to insure a good flow of traffic. Can't wait until the next one. "
            </p>
            <p class="">
            Robert Baxter, B3 Systems, United States , COMPUTEX TAIPEI 2017</p>
          </div>
        </div>
      </section>
      <!--signUp -->
      <section class="section col-12 signUp">
        <div class="container">
          <div class="col wow fadeInDown" data-wow-delay=".4s">
            <h2>Sign Up your TTS Member today!</h2>
            <p class="">
              Experience the most wonderful events that you may never have before
              <button type="button" class="btn btn-link">signup</button>
            </p>
          </div>
        </div>
      </section>
      <!--Partners -->
      <section class="section col-4 partners">
        <h2>Partners</h2>
        <div class="container">
          <!-- 小尺寸 -->
          <div class="m_adSlider">
            <!-- 01 -->
            <div>
              <div class="img-container">
                <a href="#"><img src="images/mem-qrcode.jpg" alt="" class="contain"></a>
              </div>
            </div>
            <!-- 02 -->
            <div>
              <div class="img-container"><a href="#">
                <img src="images/partner2.jpg" alt="" class="contain"></a>
              </div>
            </div>
            <!-- 03 -->
            <div>
              <div class="img-container"><a href="#">
                <img src="images/sample3-banner.png" alt="" class="contain"></a>
              </div>
            </div>
            <!-- 04 -->
            <div>
              <div class="img-container"><a href="#">
                <img src="images/partner1.gif" alt="" class="contain"></a>
              </div>
            </div>
            <!-- 05 -->
            <div>
              <div class="img-container"><a href="#">
                <img src="images/logo-en.png" alt="" class="contain"></a>
              </div>
            </div>
          </div>

          <!-- 大尺寸 -->
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner1.gif" alt="" class="contain"></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner2.jpg" alt="" class="contain"></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner2.jpg" class="contain" alt=""></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner3.gif" class="contain" alt=""></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner2.jpg" alt="" class="contain"></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner3.gif" alt="" class="contain"></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner1.gif" class="contain" alt=""></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner3.gif" class="contain" alt=""></a>
            </div>
          </div>
          <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner2.jpg" alt="" class="contain"></a>
            </div>
          </div>
        </div>
      </section>

      <div class="decoration">
        <div class="line wow rollIn" data-wow-delay="0.2s"></div>
        <div class="line wow rollIn" data-wow-delay="0.4s"></div>
        <div class="line wow rollIn" data-wow-delay="0.6s"></div>
        <div class="line wow rollIn" data-wow-delay="0.4s"></div>
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
<!-- 注意：SVG logo 換名-->
<script type="text/javascript">
  $(function() {
    $('.svgLogo').load('include/svg/cycle.html');
  });
</script>
</body>
</html>
