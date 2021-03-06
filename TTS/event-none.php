<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_innerheader.php'); ?>
    <!-- header End -->

    <!-- inner-kv -->
    <?php require_once('include/inc_inner-kv.php'); ?>


    <!-- main Start -->
    <div id="center" class="main innerpage">
      <div class="container">
       <div class="event-calendar">
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
                    <input type="radio" id="radio" name="radio_group" checked="checked"/>
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
                      <p>OMPUTEX TAPEI 2018<span class="member">(123)</span></p>
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="ex-radio">
                    <input type="radio" id="radio" name="radio_group" />
                    <label for="radio">
                      <p>All<span class="member">(123)</span></p>
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="ex-radio">
                    <input type="radio" id="radio" name="radio_group" />
                    <label for="radio">
                      <p>All<span class="member">(123)</span></p>
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="ex-radio">
                    <input type="radio" id="radio" name="radio_group" />
                    <label for="radio">
                      <p>All<span class="member">(123)</span></p>
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="ex-radio">
                    <input type="radio" id="radio" name="radio_group" />
                    <label for="radio">
                      <p>All<span class="member">(123)</span></p>
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
                <option value="">All<span class="member">(5)</span></option>
                <option value="">IT<span class="member">(5)</span></option>
                <option value="">Electronic<span class="member">(5)</span></option>
                option
              </select>
            </div>
          </div>
        </form>

        <!-- calendar Mode -->
        <div class="accordion calendarlist">
          <h3><span>目前無展覽資料</span></h3>
          <!-- <ul>
            <li>
              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/icon-logo1.jpg" alt="show-logo" class="contain"></figure>
              <a href="http://google.com" title="" target="_blank">
                COMPUTEX TAPEI 2018
              </a>
              <span class="favorite icon-star-1 active"></span>
              <span class="open"></span>
              <div class="accordion-content">
                IoT applications， PCs， NBs， handhelds， wearables， gaming & VR/AR， AI， components & parts， displays， storage products & solutions， communication products， peripherals & accessories， embedded products， industrial personal computer， IIoT， V2X，...
              </div>
            </li>
            <li>
              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/icon-logo2.jpg" alt="show-logo" class="contain"></figure>
              <a href="https://google.com" title="">MEDICARE TAIWANINT'L MEDICAL & HEALTH
              </a>
              <span class="favorite icon-star-1"></span>
              <span class="open"></span>
              <div class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </li>
            <li>

              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/banner/KV-Banner1.jpg" alt="show-logo" class="contain"></figure>
              <a href="https://google.com" title="">2018 SenCARE Taiwan Int'l Senior Lifestyle and Health Care Show THE 28TH TAIPEI INTERNATIONAL FOOD SHOW
              </a>
              <span class="favorite icon-star-1 active"></span>
              <span class="open"></span>
              <div class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
            </li>
            <li>
              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/banner/KV-Banner2.jpg" alt="show-logo" class="contain"></figure>
              <a href="https://google.com" title="">THE 28TH TAIPEI INTERNATIONAL FOOD SHOW
              </a>
              <span class="favorite icon-star-1"></span>
              <span class="open"></span>
              <div class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </li>
            <li>
              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/QRcord.jpg" alt="show-logo" class="contain"></figure>
              <a href="https://google.com" title="">MEDICARE TAIWANINT'L MEDICAL & HEALTH
              </a>
              <span class="favorite icon-star-1"></span>
              <span class="open"></span>
              <div class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </li>
            <li>
              <time datetime="2018.01.06-09">January 05-09, 2018</time>
              <figure class="img-container"><img src="images/QRcord.jpg" alt="show-logo" class="contain"></figure>
              <a href="https://google.com" title="">THE 28TH TAIPEI INTERNATIONAL FOOD SHOWTHE 28TH TAIPEI INTERNATIONAL FOOD SHOW
              </a>
              <span class="favorite icon-star-1"></span>
              <span class="open"></span>
              <div class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </li>
          </ul> -->
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
