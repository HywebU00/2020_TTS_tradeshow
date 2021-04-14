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
          <li id="loginFuncArea">
            <a class='iframe' href="include/inc_signUp.php">登入</a>
            <a href="#">註冊</a>
          </li>
          <li id="langMenu"><a href="#">正體中文</a>
            <ul>
              <li><a href="#" title="English">English</a></li>
              <li><a href="#">Indonesia</a></li>
              <li><a href="#">ภาษาไทย</a></li>
              <li><a href="#">Tiếng Việt Nam</a></li>
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
          <li><a href="#">關於我們</a></li>
          <li><a href="#">最新消息</a></li>
          <li><a href="#">展覽檔期</a></li>
          <li><a href="#">展覽影音</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- header End -->
  <!-- main Start -->
  <div id="center" class="main">
    <div class="container">
      <!-- 跨圖1 -->
      <section class="new-bg">
        <!-- menu Start -->
        <section  class="section col-12">
          <div class="container">
            <div class="col">
                <nav class="menu2020">
                  <ul>
                    <li><a href="#">關於我們</a></li>
                    <li><a href="#">最新消息</a></li>
                    <li><a href="#">展覽檔期</a></li>
                    <li><a href="#">展覽影音</a></li>
                  </ul>
                </nav>
            </div>
          </div>
        </section>
        <!-- KV-Banner -->
        <section class="section col-12 KV-Banner">
          <div class="container">
            <div class="col">
              <!-- singleSlider -->
              <div class="singleSlider">
                <a href="http://google.com" target="_blank">
                  <div class="img-container">
                    <div class="BuildingName">Taipei World Trade Center</div>
                    <img src="images/banner/KV-Banner1.jpg" class="cover" alt="banner">
                  </div>
                </a>
                <a href="http://google.com" target="_blank">
                  <div class="img-container">
                    <div class="BuildingName">2世界貿易中心展覽三館</div>
                    <img src="images/banner/KV-Banner2.jpg" class="cover" alt="banner">
                  </div>
                </a>
                <a href="http://google.com" target="_blank">
                  <div class="img-container">
                    <div class="BuildingName">3臺北國際會議中心</div>
                    <img src="images/banner/KV-Banner3.jpg" class="cover" alt="banner">
                  </div>
                </a>
                <a href="javascript:void(0)">
                  <div class="img-container">
                    <div class="BuildingName">4Taipei Nangang Exhibition Center</div>
                    <img src="images/banner/KV-Banner4.jpg" class="cover" alt="banner">
                  </div>
                </a>
                <a href="javascript:void(0)">
                  <div class="img-container">
                    <div class="BuildingName">5MICE 高雄會展網</div>
                    <img src="images/banner/KV-Banner5.jpg" class="cover" alt="banner">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- What's on -->
        <section class="section col-12 whatsOn wow fadeInDown" data-wow-delay=".4s">
          <!-- 注意：只有這個標題要加連結 -->
          <h2><a href="http://google.com" target="_blank">最新消息</a></h2>
          <div class="container">
            <div class="col">
              <!-- slider start -->
              <div class="singleSlider">
                <!-- 01 -->
                <div>
                  <section>
                    <div class="img-container">
                      <a href="javascript:void(0);" title="">
                        <img src="images/default.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <!-- 注意：h3和P一併：截字二行字 -->
                      <time datetime="2018.01.06-09">2020 / 3.17</time>
                      <h3>1義大利旅遊疫情升至第三級警告，入境需居家檢疫14天</h3>
                      <p><a href="#">中央流行疫情指揮中心今(17)日表示，中國大陸以外的亞洲國家近期疫情擴大，確診病例數已逾1萬例，病例數持續增加中，多國已宣布進入緊急狀態並採取嚴格之邊境管制及檢疫措施；另美國近期疫情亦持續上升。....</a></p>
                    </div>
                  </section>
                  <section>
                    <div class="img-container">
                      <a href="javascript:void(0);" title="">
                        <img src="images/default.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <!-- 注意：h3和P一併：截字二行字 -->
                      <time datetime="2018.01.06-09">2020 / 3.17</time>
                      <h3>2義大利旅遊疫情升至第三級警告，入境需居家檢疫14天</h3>
                      <p><a href="#">中央流行疫情指揮中心今(17)日表示，中國大陸以外的亞洲國家近期疫情擴大，確診病例數已逾1萬例，病例數持續增加中，多國已宣布進入緊急狀態並採取嚴格之邊境管制及檢疫措施；另美國近期疫情亦持續上升。....</a></p>
                    </div>
                  </section>
                  <section>
                    <div class="img-container">
                      <a href="javascript:void(0);" title="">
                        <img src="images/default.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <!-- 注意：h3和P一併：截字二行字 -->
                      <time datetime="2018.01.06-09">2020 / 3.17</time>
                      <h3>3義大利旅遊疫情升至第三級警告，入境需居家檢疫14天</h3>
                      <p><a href="#">中央流行疫情指揮中心今(17)日表示，中國大陸以外的亞洲國家近期疫情擴大，確診病例數已逾1萬例，病例數持續增加中，多國已宣布進入緊急狀態並採取嚴格之邊境管制及檢疫措施；另美國近期疫情亦持續上升。....</a></p>
                    </div>
                  </section>
                </div>
                <!-- 02 -->
                <div>
                  <section>
                    <div class="img-container">
                      <a href=javascript:void(0); title="">
                        <img src="images/default2.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <time datetime="2018.01.06-09">January 05-09, 2018</time>
                      <h3>1字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多</h3>
                      <p>Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading...</p>
                    </div>
                  </section>
                  <section>
                    <div class="img-container">
                      <a href=javascript:void(0); title="">
                        <img src="images/default2.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <time datetime="2018.01.06-09">January 05-09, 2018</time>
                      <h3>2字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多</h3>
                      <p>Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading...</p>
                    </div>
                  </section>
                  <section>
                    <div class="img-container">
                      <a href=javascript:void(0); title="">
                        <img src="images/default2.jpg" alt="" class="cover">
                      </a>
                    </div>
                    <div class="caption">
                      <time datetime="2018.01.06-09">January 05-09, 2018</time>
                      <h3>3字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多字很多</h3>
                      <p>Fastener Taiwan is the ONLY international B2B fastener show in Taiwan. Serving as a trading...</p>
                    </div>
                  </section>
                </div>
                <!-- 03 -->
                <div>
                  <div class="img-container">
                    <a href="http://google.com" title="">
                      <img src="images/banner/KV-Banner6.png" alt="" class="cover">
                    </a>
                  </div>
                  <div class="caption">
                    <time datetime="2018.01.06-09">January 05-09, 2018</time>
                    <h3>Asia Taiwan Expo to get underway in Taichung</h3>
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
                    <time datetime="2018.01.06-09">January 05-09, 2018</time>
                    <h3>FastenerFastener 2018 Smart Asia</h3>
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
                    <time datetime="2018.01.06-09">January 05-09, 2018</time>
                    <h3>to get underway in Taichung</h3>
                    <p>rading platform for sourcing and procurement, Fastener Taiwan features ...</p>
                  </div>
                </div>
              </div>
              <!-- slider end -->
              <a href="javascript:void(0)" class="readmore">更多最新消息</a>
            </div>
          </div>
        </section>
      </section>

      <!-- 最新展覽 -->
      <section class="section col-12 wow fadeInDown" data-wow-delay=".4s">
        <h2 class="computex"><a href="#">最新展覽</a></h2>
        <!-- 傻眼貓咪 -->
        <div class="svgLogo"></div>
        <div class="container">
          <div class="mp_slider">
            <div class="img-container">
                <a href="https://www.youtube.com/">
                    <img src="images/demo/06.jpg" alt="">
                    <div class="caption">
                      <time>2020/08.27</time>
                      <button type="button" class="fav saved">已收藏</button>
                      <p>
                        <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                        <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                      </p>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <a href="javascript:void(0)">
                    <img src="images/demo/07.jpg" alt="">
                    <div class="caption">
                      <time>2020/08.27</time>
                      <button type="button" class="fav">收藏</button>
                      <p>
                        <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                        <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                      </p>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <a href="javascript:void(0)">
                    <img src="images/demo/08.jpg" alt="">
                    <div class="caption">
                      <time>2020/08.27</time>
                      <button type="button" class="fav">收藏</button>
                      <p>
                        <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                        <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                      </p>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <a href="javascript:void(0)">
                    <img src="images/demo/10.jpg" alt="">
                    <div class="caption">
                      <time>2020/08.27</time>
                      <button type="button" class="fav">收藏</button>
                      <p>
                        <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                        <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                      </p>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <a href="javascript:void(0)">
                    <img src="images/demo/12.jpg" alt="">
                    <div class="caption">
                      <time>2020/08.27</time>
                      <button type="button" class="fav">收藏</button>
                      <p>
                        <b>第5張圖說</b><br> 
                        <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                      </p>
                    </div>
                </a>
            </div>
          </div>
          <a href="javascript:void(0)" class="readmore">更多最新展覽</a>
        </div>
      </section>

      <!-- 跨圖2 -->
      <section class="new-bg">
        <!-- 最新展覽影片 -->
        <section class="section Video col-12 wow fadeInDown" data-wow-delay=".4s">
          <h2>最新展覽影片</h2>
          <div class="container">
            <div class="mp_slider">
              <div class="img-container">
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                      <img src="images/demo/06.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                      <img src="images/demo/07.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                      <img src="images/demo/08.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                      <img src="images/demo/10.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                      <img src="images/demo/12.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第5張圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
            </div>
            <a href="javascript:void(0)" class="readmore">更多展覽影片</a>
          </div>
        </section>
        <!-- 最新展覽照片 -->
        <section class="section Photo col-12 wow fadeInDown" data-wow-delay=".4s">
          <h2>最新展覽照片</h2>
          <div class="container">
            <div class="mp_slider">
              <div class="img-container">
                  <a href="https://www.youtube.com/">
                      <img src="images/demo/06.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="javascript:void(0)">
                      <img src="images/demo/07.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="javascript:void(0)">
                      <img src="images/demo/08.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="javascript:void(0)">
                      <img src="images/demo/10.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第1張圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
              <div class="img-container">
                  <a href="javascript:void(0)">
                      <img src="images/demo/12.jpg" alt="">
                      <div class="caption">
                        <time>2020/08.27</time>
                        <p>
                          <b>第5張圖說</b><br> 
                          <span>醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院醫用電子、生物醫學產品、藥品、醫療服務、醫院</span>
                        </p>
                      </div>
                  </a>
              </div>
            </div>
            <a href="javascript:void(0)" class="readmore">更多展覽照片</a>
          </div>
        </section>
      </section>
      <!--Partners -->
      <section class="section col-3 partners">
        <h2>友善連結</h2>
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
          <!-- <div class="col">
            <div class="img-container">
              <a href="#"><img src="images/partner2.jpg" alt="" class="contain"></a>
            </div>
          </div> -->
        </div>
      </section>

      <!-- <div class="decoration">
        <div class="line wow rollIn" data-wow-delay="0.2s"></div>
        <div class="line wow rollIn" data-wow-delay="0.4s"></div>
        <div class="line wow rollIn" data-wow-delay="0.6s"></div>
        <div class="line wow rollIn" data-wow-delay="0.4s"></div>
      </div> -->
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
