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
        <!--  -->
        <div class="event-calendar">
          <!-- Show Category -->
          <!-- 展覽類型 -->
          <div class="btnShow">
            <div class="container">
              <div class="box_grp">
                <div class="box_title">Show Category：</div>
                <div class="box_content">
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">All</span>
                          <span class="member">50</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" checked="checked"/>
                      <label for="radio">
                        <p>
                          <span class="item">Organized by other PEOs</span>
                          <span class="member">50</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">Organized by TAITRA</span>
                          <span class="member">38</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col checked">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">Organized</span>
                          <span class="member">38</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col checked">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" checked="checked"/>
                      <label for="radio">
                        <p>
                          <span class="item">Organized by other PEOs Organized</span>
                          <span class="member">50</span>
                        </p>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 顯示模式 -->
          <div class="btnDisplay">
            <div class="container">
              <div class="col">
                <div class="box_grp">
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
                        <p>
                          <span class="item">All</span>
                          <span class="member">138</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col checked">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" checked="checked"/>
                      <label for="radio">
                        <p>
                          <span class="item">IT</span>
                          <span class="member">3</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">Electronic</span>
                          <span class="member">31</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col checked">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">OMPUTEX TAPEI 2018</span>
                          <span class="member">123</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">All</span>
                          <span class="member">123</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">All</span>
                          <span class="member">123</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">All</span>
                          <span class="member">123</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">All</span>
                          <span class="member">123</span>
                        </p>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="ex-radio">
                      <input type="radio" id="radio" name="radio_group" />
                      <label for="radio">
                        <p>
                          <span class="item">Leisure</span>
                          <span class="member">5</span>
                        </p>
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
                  <option value="">All<span class="member">(5)</span></option>
                  <option value="">IT<span class="member">(5)</span></option>
                  <option value="">Electronic<span class="member">(5)</span></option>
                </select>
              </div>
            </div>
          </form>

          <!-- calendar Mode -->
          <div class="accordion calendarlist">
            <ul>
              <li>
                <!-- <time datetime="2018.01.06-09">January 05-09, 2018</time> -->
                <time datetime="2019-06-19">2019/06/19</time>-<time datetime="2019-06-22">2019/06/22</time>
                <figure class="img-container">
                  <img src="images/icon-logo1.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="http://google.com" title="" target="_blank">
                  COMPUTEX TAPEI 2018
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1 active"></span>
                <!-- <span class="close"></span> -->
                <span class="open"></span>
                <div class="accordion-content">
                  IoT applications， PCs， NBs， handhelds， wearables， gaming & VR/AR， AI， components & parts， displays， storage products & solutions， communication products， peripherals & accessories， embedded products， industrial personal computer， IIoT， V2X，...
                </div>
              </li>
              <li>
                <time datetime="2018.01.06-09">January 05-09, 2018</time>
                <figure class="img-container">
                  <img src="images/icon-logo2.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="https://google.com" title="">
                  MEDICARE TAIWANINT'L MEDICAL & HEALTH
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1"></span>
                <span class="open"></span>
                <div class="accordion-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </li>
              <li>
                <time datetime="2018.01.06-09">January 05-09, 2018</time>
                <figure class="img-container">
                  <img src="images/banner/KV-Banner1.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="https://google.com" title="">
                  2018 SenCARE Taiwan Int'l Senior Lifestyle and Health Care Show THE 28TH TAIPEI INTERNATIONAL FOOD SHOW
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1 active"></span>
                <span class="open"></span>
                <div class="accordion-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
              </li>
              <li>
                <time datetime="2018.01.06-09">January 05-09, 2018</time>
                <figure class="img-container">
                  <img src="images/banner/KV-Banner2.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="https://google.com" title="">
                  THE 28TH TAIPEI INTERNATIONAL FOOD SHOW
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1"></span>
                <span class="open"></span>
                <div class="accordion-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </li>
              <li>
                <time datetime="2018.01.06-09">January 05-09, 2018</time>
                <figure class="img-container">
                  <img src="images/QRcord.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="https://google.com" title="">
                  MEDICARE TAIWANINT'L MEDICAL & HEALTH
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1"></span>
                <span class="open"></span>
                <div class="accordion-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </li>
              <li>
                <time datetime="2018.01.06-09">January 05-09, 2018</time>
                <figure class="img-container">
                  <img src="images/QRcord.jpg" alt="show-logo" class="contain">
                </figure>
                <a href="https://google.com" title="">
                  THE 28TH TAIPEI INTERNATIONAL FOOD SHOWTHE 28TH TAIPEI INTERNATIONAL FOOD SHOW
                  <span>台北南港展覽館1館1樓</span>
                </a>
                <span class="favorite icon-star-1"></span>
                <span class="open"></span>
                <div class="accordion-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </li>
            </ul>
          </div>
        </div>
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
