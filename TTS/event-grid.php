<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_innerheader.php'); ?>
    <!-- inner-kv -->
    <div class="inner-kv">
      <div class="container">
        <!-- menu Start -->
        <nav class="menu2020">
          <ul>
            <li><a href="#">關於我們</a></li>
            <li><a href="#">最新消息</a></li>
            <li><a href="#">展覽檔期</a></li>
            <li><a href="#">展覽影音</a></li>
          </ul>
        </nav>
        <!--  -->
        <h1 class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Event</a></h1>
        <div class="img-container">
          <div class="decoration">
            <div class="line wow rollIn" data-wow-delay="0.2s"></div>
            <div class="line wow rollIn" data-wow-delay="0.4s"></div>
          </div>
          <img src="images/banner/EventBg.jpg" alt="" class="cover">
        </div>
      </div>
    </div>
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <div class="container">
        <!-- breadcrumb路徑 -->
        <div class="breadcrumb">
          <ul>
            <li><a href="#">首頁</a></li>
            <li><a href="#">Evnet</a></li>
          </ul>
        </div>
        <!--  -->
        <div class="event-calendar">
          <div class="btnDisplay">
            <div class="container">
              <div class="col">
                <div class="box_grp">
                  <!-- 顯示模式 -->
                  <div class="box_title">Display Mode:</div>
                  <div class="box_content">
                    <div class="ex-radio  checked">
                      <input type="radio" id="radio_1" name="radio_group"  checked="checked"/>
                      <label for="radio_1"><i class="i_grid"></i>Grid View：</label>
                    </div>
                    <div class="ex-radio">
                      <input type="radio" id="radio_2" name="radio_group" />
                      <label for="radio_2"><i class="i_calendar"></i>Calendar View</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="box_grp"> 
                  <!-- 期間查詢 -->
                  <div class="box_title">Display Range：</div>
                  <div class="box_content">
                    <div class="ex-radio">
                      <input type="radio" id="radio_3" name="radio_group" />
                      <label for="radio_3"><i class="i_forward"></i>Previous</label>
                    </div>
                    <div class="ex-radio">
                      <input type="radio" id="radio_4" name="radio_group" />
                      <label for="radio_4"><i class="i_afterward"></i>After Today</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 產業別查詢 -->
          <div class="btnType">
            <div class="container">
              <div class="box_grp">
                <div class="box_title">Organized by Industry type：</div>
                <div class="box_content">
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>All<span class="member">(123)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio checked">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>IT<span class="member">(3)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Electronic<span class="member">(13)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Electronic Electronic<span class="member">(2)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Foods<span class="member">(123)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Green<span class="member">(123)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Life<span class="member">(123)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Beauty<span class="member">(123)</span></p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>Leisure<span class="member">(5)</span></p>
                      </label>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <!-- 注意：小尺寸替代選單select -->
          <form class="form_grid RWDselect">
            <div class="form_grp">
              <div class="box_title">Grid View：</div>
              <div class="box_content">
                <select name="" id="input" required="required">
                  <option value="">Calendar View</option>
                  <option value="">Calendar View</option>
                </select>
              </div>
            </div>
            <div class="form_grp">
              <div class="box_title">Display Range：</div>
              <div class="box_content">
                <select name="" id="input" required="required">
                  <option value="">Previous</option>
                  <option value="">After Today</option>
                </select>
              </div>
            </div>
            <div class="form_grp">
              <div class="box_title">Organized by Industry type：</div>
              <div class="box_content">
                <select name="" id="input" required="required">
                  <option value="">
                    Taipei Int'l Auto Parts & Accessories Show
                    2019/04/24-2019/04/27
                    <span class="member">(5)</span></option>
                    <option value="">IT<span class="member">(5)</span></option>
                    <option value="">Electronic<span class="member">(5)</span></option>
                    option
                  </select>
                </div>
              </div>
          </form>

          <!-- GridCard Mode -->
          <div class="col-4 gridCard">
            <div class="container">
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.1s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <!-- 注意：圖片比例：contain 等比例圖/contain滿版圖 -->
                      <img src="images/banner/KV-EN2.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <!-- 注意：event grid h3標題不截字 -->
                  <h3>
                    <a href="http://google.com" target="_blank">
                      <span>台北南港展覽館1館1樓</span>日TWTC NEW YEAR SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.2s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN1.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="http://google.com" target="_blank">
                      <span>台北南港展覽館1館1樓</span>h3標題h3標題h3標題
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.3s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="http://google.com" target="_blank">
                      <span>台北南港展覽館1館1樓</span>NEW YEAR SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.4s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-Banner1.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="http://google.com" target="_blank">
                      <span>台北南港展覽館1館1樓</span>SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.5s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN4.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="#">
                      <span>台北南港展覽館1館1樓</span>Wine & Spirits Coffee & Tea Juice & Soft DrinksR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.6s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food\...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN1.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="#">
                      <span>台北南港展覽館1館1樓</span>SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.7s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN3.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="#">
                      <span>台北南港展覽館1館1樓</span>SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
              <div class="col">
                <div class="gridBox wow fadeInDown" data-wow-delay="0.8s">
                  <div class="img-container">
                    <a href="http://google.com" target="_blank">
                      <div class="caption">
                        <div class="cardText">
                          <time datetime="2019.05.09">JAN 05-09, 2019</time>
                          <p>Wine & Spirits， Coffee & Tea， Juice & Soft Drinks， Confections & Biscuits， Health Food & Leisure Food， Frozen Prepared Food， Dairy Products， Meat & Processed Meat Products，Seafood， Preserved Fruits & Vegetables， Baked Food， Groceries， Gifts...</p>
                        </div>
                        <span class="favorite active"><i class="icon-star-1"></i>Follow This Event</span>
                        <span class="readmore">Read More</span>
                      </div>
                      <img src="images/banner/KV-EN2.jpg" alt="" class="contain">
                    </a>
                  </div>
                  <h3>
                    <a href="#">
                      <span>台北南港展覽館1館1樓</span>SHOPPING FAIRTWTC NEW YEAR SHOPPING FAIRSHOPPING FAIRTWTC NEW YEAR SHOPPING FAIR
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- scrollIndicator-->
        <button id="arrow-pulser" class="scroll-block">
          <div  class="scroller-arrow"></div>
        </button>
      </div>
      <!-- main End -->
    </div>
    <!-- footer -->
    <?php require_once('include/inc_footer.php'); ?>
  </div>
  <!-- wrapper End -->
  <a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
  <?php require_once('include/inc_jq.php'); ?>
</body>
</html>
