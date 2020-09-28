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
        <a href="mp.php" class="logo"><img src="images/logo-en.png" alt="網站標題" /></a>

        <button type="button" class="userCtrl icon-user-1"></button>
        <button type="button" class="searchCtrl"></button>
        <!-- navigation Start -->
        <nav class="navigation">
          <ul>
            <li><a class="user" href="#"><i class="icon-user-1"></i></a><a class='iframe' href="include/inc_signUp.php">LOG OUT</a></li>
            <li><a href="#">English</a>
              <ul>
                <li><a href="#" title="正體中文">正體中文</a></li>
                <li class="active"><a href="#" title="English">English</a></li>
                <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/id.pdf" target="_blank">Indonesia</a></li>
                <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/th.pdf" target="_blank" title="ภาษาไทย">ภาษาไทย</a></li>
                <li><a href="https://cloud.taiwantradeshows.com.tw/schedule/vn.pdf" target="_blank" title="Tiếng Việt Nam">Tiếng Việt Nam</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- MemberNav Start -->
        <div class="MemberNav">
          <ul>
            <li class="userName">
              <span>你好，</span><span>陳懿玲</span>
            </li>
            <li>
              <a href="member-favorites.php" title="">My Favorites</a>
            </li>
            <li class="active">
              <a href="#">Profile Setting</a>
              <ul>
                <li class="active"><a href="member-nextshow.php">Visitor</a></li>
                <li><a href="#">Exhibitor</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </li>
            <li>
              <a href="member-changePW.php" title="">Change Password</a>
            </li>
            <li>
              <a href="member-history.php" title="">History-Visitor</a>
            </li>
            <li>
              <a href="#" title="">History-Exhiibitor</a>
            </li>
            <li>
              <a href="#" title="">History-Media</a>
            </li>
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

    <!-- inner-kv -->
    <div class="inner-kv">
      <div class="container">
        <h1 class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Event</a></h1>
        <div class="img-container">
          <div class="decoration">
            <div class="line wow rollIn" data-wow-delay="0.2s"></div>
            <div class="line wow rollIn" data-wow-delay="0.4s"></div>
          </div>
          <img src="images/banner/memberbg.jpg" alt="" class="cover">
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
        <div class="col-3-9 member">
          <div class="container">
            <div class="col boxLeft">
              <!-- 預登申請 setting -->
              <?php require_once('include/inc_memberMenu.php'); ?>
            </div>
            <div class="col boxRight">
              <h2>Profile Setting</h2>
              <form action="" class="form_grid form_vertical">
                <h3>Personal Information</h3>
                <div class="Pre-entry">
                  <!-- 1 -->
                  <!-- Type-1：非必填 -->
                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">1.</span>What's you name
                    </div>
                    <div class="form_content">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title">First Name</label>
                              <div class="form_content form-control-danger">
                                <input type="text" placeholder="tim@hyweb.com.tw">
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title">Last Name</label>
                              <div class="form_content">
                                <input type="text" placeholder="tim@hyweb.com.tw" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2：必填：預設狀態 -->
                  <!-- 
                    必填項目，添加規則：
                    1、 .form_title 標題加 <span class="necessary">*</span>
                    2、 .form_content 內容加 ＆ 隱藏 
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    3、 .form_content 加 .form-control-danger，
                        如果有兩個 .form_content 相互嵌套，把 .form-control-danger 加在內層那一個
                  -->
                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">1.</span>What's you name
                    </div>
                    <div class="form_content">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>First Name</label>
                              <div class="form_content form-control-danger">
                                <input type="text" placeholder="tim@hyweb.com.tw">
                                <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title">Last Name</label>
                              <div class="form_content">
                                <input type="text" placeholder="tim@hyweb.com.tw" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-3：必填：未填狀態 -->
                  <!-- 
                    若未填，
                    .form_grp 加 .has-danger，
                    如果有兩個 .form_grp 相互嵌套，把 .has-danger 加在內層那一個
                  -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>What's you name</div>
                    <div class="form_content">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <div class="form_grp has-danger">
                              <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>First Name</label>
                              <div class="form_content form-control-danger">
                                <input type="text" placeholder="tim@hyweb.com.tw">
                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title">Last Name</label>
                              <div class="form_content">
                                <input type="text" placeholder="tim@hyweb.com.tw" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 2 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.</span>And your prefix</div>
                    <div class="form_content form_inline check_grp">
                      <div class="col-4">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Mr.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Ms.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Dr.</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.<span class="necessary">*</span></span>And your prefix</div>
                    <div class="form_content form_inline check_grp form-control-danger">
                      <div class="col-4">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Mr.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Ms.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Dr.</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">2.<span class="necessary">*</span></span>And your prefix</div>
                    <div class="form_content form_inline check_grp form-control-danger">
                      <div class="col-4">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Mr.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Ms.</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Dr.</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 3 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.</span>Email</div>
                    <div class="form_content">tim@hyweb.com.tw</div>
                  </div>
                  <!-- Type-1B -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.</span>Email</div>
                    <div class="form_content">
                      <input type="text" placeholder="請填入e-mail">
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.<span class="necessary">*</span></span>Email</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="請填入e-mail">
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                    </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">3.<span class="necessary">*</span></span>Email</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="請填入e-mail">
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                  </div>

                  <!-- 4 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">4.</span>Preferred language
                    </div>
                    <div class="form_content form_inline radio_grp">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">正體中文</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">English</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">日本語</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">简体中文</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">4.<span class="necessary">*</span></span>Preferred language
                    </div>
                    <div class="form_content form_inline radio_grp form-control-danger">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">正體中文</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">English</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">日本語</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">简体中文</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title">
                      <span class="number">4.<span class="necessary">*</span></span>Preferred language
                    </div>
                    <div class="form_content form_inline radio_grp form-control-danger">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">正體中文</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">English</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">日本語</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">简体中文</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 5 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">5.</span>Would you like to receive eDM</div>
                    <div class="form_content form_inline radio_grpr">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <label><input type="radio" name="sampleRadio51" value="" checked="">Yes</label>
                          </div>
                          <div class="col">
                            <label><input type="radio" name="sampleRadio51" value="">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">5.<span class="necessary">*</span></span>Would you like to receive eDM</div>
                    <div class="form_content form_inline radio_grp form-control-danger">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <label><input type="radio" name="sampleRadio52" value="" checked="">Yes</label>
                          </div>
                          <div class="col">
                            <label><input type="radio" name="sampleRadio52" value="">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">5.<span class="necessary">*</span></span>Would you like to receive eDM</div>
                    <div class="form_content form_inline radio_grp form-control-danger">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <label><input type="radio" name="sampleRadio53" value="" checked="">Yes</label>
                          </div>
                          <div class="col">
                            <label><input type="radio" name="sampleRadio53" value="">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="name-danger" class="form-control-feedback text-sm">This field is required.</div>
                  </div>

                  <!-- 6 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.</span>Purpose of your visit</div>
                    <div class="form_content">
                      <select name="" id="input" required="required">
                        <option value="" selected="">please selected</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                      </select>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>Purpose of your visit</div>
                    <div class="form_content form-control-danger">
                      <select name="" id="input" required="required">
                        <option value="" selected="">please selected</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                      </select>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                    </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>Purpose of your visit</div>
                    <div class="form_content form-control-danger">
                      <select name="" id="input" required="required">
                        <option value="" selected="">please selected</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                        <option value="">Abyssinian</option>
                      </select>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                  </div>
                </div>

                <h3>Company Information</h3>
                <div class="Pre-entry">
                  <!-- 1 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>What's your company name</div>
                    <div class="form_content">
                      <div class="form_grp ">
                        <label for="mustSameAsId" class="form_title">Company name</label>
                        <div class="form_content">
                          <input type="text" placeholder="tim@hyweb.com.tw">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>What's your company name</div>
                    <div class="form_content">
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="tim@hyweb.com.tw">
                          <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>What's your company name</div>
                    <div class="form_content">
                      <div class="form_grp has-danger">
                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="tim@hyweb.com.tw">
                          <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.</span>And your prefix 原本的架構</div>
                    <div class="form_content">
                      <div class="form_grp has-danger">
                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="請填入">
                          <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                      <div class="form_grp">
                        <div class="col-6">
                          <div class="container">
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">City</label>
                                <div class="form_content">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Zip</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Select a job function</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form_grp">
                        <label for="username" class="form_title">
                          Phone<span class="help-inline">ex: 02-12345678</span>
                        </label>
                        <div class="form_content form_inline">
                          <div class="phoneCol">
                            <div class="container">
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form_grp">
                        <label for="username" class="form_title">
                          <span class="necessary">*</span>Fax<span class="help-inline">ex: 02-12345678</span>
                        </label>
                        <div class="form_content form_inline form-control-danger">
                          <div class="phoneCol">
                            <div class="container">
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                      </div>

                      <div class="form_grp has-danger">
                        <label for="username" class="form_title">
                          <span class="necessary">*</span>Mobile<span class="help-inline">ex: 02-12345678</span>
                        </label>
                        <div class="form_content form_inline form-control-danger">
                          <div class="phoneCol">
                            <div class="container">
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                              <div class="col">
                                <input name="" id="" value="" type="text" placeholder="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                      </div>
                    </div>
                  </div>

                  <!-- 2-1 2019-0503 架構修改-->
                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">2-1.<span class="necessary">*</span></span>Phone 2019-0503修改
                    </div>
                    <div class="form_content form_inline">
                      <div class="phoneCol">
                        <div class="container">
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form_grp">
                    <div class="form_title">
                      <span class="number">2-1.<span class="necessary">*</span></span>Fax
                    </div>
                    <div class="form_content form_inline form-control-danger">
                      <div class="phoneCol">
                        <div class="container">
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>

                  <div class="form_grp has-danger">
                    <div class="form_title">
                      <span class="number">2-1.<span class="necessary">*</span></span>Mobile
                    </div>
                    <div class="form_content form_inline form-control-danger">
                      <div class="phoneCol">
                        <div class="container">
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                          <div class="col">
                            <input name="" id="" value="" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 部分必填-兩欄 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2-1.</span>部分必填-兩欄</div>
                    <div class="form_content">
                      <div class="form_grp has-danger">
                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="請填入">
                          <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                      <div class="form_grp">
                        <div class="col-6">
                          <div class="container">
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">City</label>
                                <div class="form_content">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Zip</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Select a job function</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- 全部必填-兩欄 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">2-1.<span class="necessary">*</span></span>全部必填-兩欄</div>
                    <div class="form_content">
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="請填入">
                        </div>
                      </div> 
                      <div class="form_grp">
                        <div class="col-6">
                          <div class="container">
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">City</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Zip</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                  <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select a job function</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                  <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                      </div>
                    </div>
                  </div>

                  <!-- 部分必填-三欄 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2-1.</span>部分必填-三欄</div>
                    <div class="form_content">
                      <div class="form_grp has-danger">
                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="請填入">
                          <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                      <div class="form_grp">
                        <div class="col-4">
                          <div class="container">
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">City</label>
                                <div class="form_content">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Zip</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                </div>
                              </div>
                            </div><!-- 
                            <div class="col">
                              <div class="form_grp has-danger">
                                <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Select a job function</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                  <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                </div>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- 全部必填-三欄 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">2-1.<span class="necessary">*</span></span>全部必填-三欄</div>
                    <div class="form_content">
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Company name</label>
                        <div class="form_content form-control-danger">
                          <input type="text" placeholder="請填入">
                        </div>
                      </div> 
                      <div class="form_grp">
                        <div class="col-4">
                          <div class="container">
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">City</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Zip</label>
                                <div class="form_content form-control-danger">
                                  <input type="text" placeholder="...">
                                  <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content form-control-danger">
                                  <select name="" id="input" required="required">
                                    <option value="">請選擇</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                    <option value="">Abyssinian</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                      </div>
                    </div>
                  </div>

                  <!-- 3 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.</span>Media type</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline check_grp">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox" checked="">Online Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Print Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">TV</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Broadcast</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.<span class="necessary">*</span></span>Media type</div>
                    <div class="form_content form_inline check_grp form-control-danger">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox" checked="">Online Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Print Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">TV</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Broadcast</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">3.<span class="necessary">*</span></span>Media type</div>
                    <div class="form_content form_inline check_grp form-control-danger">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox" checked="">Online Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Print Media</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">TV</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">Broadcast</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 4 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">4.</span>Website</div>
                    <div class="form_content">
                      <input type="text" placeholder="http://www.123.com">
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">4.<span class="necessary">*</span></span>Website</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="http://www.123.com">
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">4.<span class="necessary">*</span></span>Website</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="http://www.123.com">
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 5 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">5.</span>File</div>
                    <div class="form_content form_inline">
                      <div class="upload_grp">
                        <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                        <div class="upload_btn">
                          <span class="icon-upload">上傳檔案</span>
                          <input type="file" class="check_file" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">5.<span class="necessary">*</span></span>File</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline form-control-danger">
                      <div class="upload_grp">
                        <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                        <div class="upload_btn">
                          <span class="icon-upload">上傳檔案</span>
                          <input type="file" class="check_file" />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">5.<span class="necessary">*</span></span>File</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline form-control-danger">
                      <div class="upload_grp">
                        <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                        <div class="upload_btn">
                          <span class="icon-upload">上傳檔案</span>
                          <input type="file" class="check_file" />
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 6 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.</span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <!-- <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div id="progressBlock_1560484037960-0" class="progress_bar">
                            <div id="progressRatio_1560484037960-0" class="bar">&nbsp;</div>
                          </div>
                          <div id="error_1_1560484037960-0" class="status">上傳失敗</div>
                          <div id="error_2_1560484037960-0" class="status">檔案類型不正確</div>
                          <div id="error_3_1560484037960-0" class="status">檔案超過大小限制</div>
                          <div id="error_4_1560484037960-0" class="status">只能上傳 1 個檔案</div>
                          <div id="error_5_1560484037960-0" class="status">檔案個數超過</div>
                        </div>
                      </div> -->
                      <!-- 客製上傳 END-->
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.</span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <!-- 多筆上傳 -->
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <!-- 進度條 -->
                          <div id="progressBlock_1560484037960-0" class="progress_bar">
                            <div id="progressRatio_1560484037960-0" class="bar">&nbsp;</div>
                          </div>
                          <!-- 狀態 -->
                          <div id="error_1_1560484037960-0" class="status">上傳失敗</div>
                          <div id="error_2_1560484037960-0" class="status">檔案類型不正確</div>
                          <div id="error_3_1560484037960-0" class="status">檔案超過大小限制</div>
                          <div id="error_4_1560484037960-0" class="status">只能上傳 1 個檔案</div>
                          <div id="error_5_1560484037960-0" class="status">檔案個數超過</div>
                        </div>
                      </div>
                      <!-- 客製上傳 END-->
                    </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline form-control-danger">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div id="progressBlock_1560484037960-0" class="progress_bar">
                            <div id="progressRatio_1560484037960-0" class="bar">&nbsp;</div>
                          </div>
                          <div id="error_1_1560484037960-0" class="status">上傳失敗</div>
                          <div id="error_2_1560484037960-0" class="status">檔案類型不正確</div>
                          <div id="error_3_1560484037960-0" class="status">檔案超過大小限制</div>
                          <div id="error_4_1560484037960-0" class="status">只能上傳 1 個檔案</div>
                          <div id="error_5_1560484037960-0" class="status">檔案個數超過</div>
                        </div>
                      </div>
                      <!-- 客製上傳 END-->
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-4 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>要抓什麼挖歌的上傳</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline form-control-danger">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <!-- <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                            <div id="removeBlock_1560484037960-0" class="delete">
                              <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                            </div>
                          </div>
                          <div id="progressBlock_1560484037960-0" class="progress_bar">
                            <div id="progressRatio_1560484037960-0" class="bar">&nbsp;</div>
                          </div>
                          <div id="error_1_1560484037960-0" class="status">上傳失敗</div>
                          <div id="error_2_1560484037960-0" class="status">檔案類型不正確</div>
                          <div id="error_3_1560484037960-0" class="status">檔案超過大小限制</div>
                          <div id="error_4_1560484037960-0" class="status">只能上傳 1 個檔案</div>
                          <div id="error_5_1560484037960-0" class="status">檔案個數超過</div>
                        </div>
                      </div> -->
                      <!-- 客製上傳 END-->
                    </div>
                    <div class="form-control-feedback text-sm">請務必上傳資料</div>
                  </div>
                </div>


                <h3>Questionnaire</h3>
                <div class="Pre-entry formQuest">
                  <!-- 1 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q1.</span>
                          Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                      </div>
                      <div class="form_content form_vertical radio_grp">
                        <div class="radio_grp">
                          <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                        </div>
                      </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q1.<span class="necessary">*</span></span>
                          Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                      </div>
                      <div class="form_content form_vertical radio_grp form-control-danger">
                          <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                      </div>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                      <div class="form_title">
                          <span class="number">Q1.<span class="necessary">*</span></span>
                          Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                      </div>
                      <div class="form_content form_vertical radio_grp form-control-danger">
                          <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                          <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                      </div>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 2 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>
                          The Beauty Show you have been to this year are:
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..."></textarea>
                      </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.<span class="necessary">*</span></span>
                          The Beauty Show you have been to this year are:
                      </div>
                      <div class="form_content form-control-danger">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..."></textarea>
                      </div>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                      <div class="form_title">
                          <span class="number">Q2.<span class="necessary">*</span></span>
                          The Beauty Show you have been to this year are:
                      </div>
                      <div class="form_content form-control-danger">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..."></textarea>
                      </div>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 3 -->
                  <!-- Type-1 -->
                  <div class="form_grp">
                      <div class="form_title">
                        <span class="number">Q3.</span>
                        Please indicate the purpose of your visit (Please select at least 1 Answer)
                      </div>
                      <div class="form_content form_vertical radio_grp">
                        <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(4)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(5)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(6)Three (and more)</label>
                      </div>
                      <div class="form_content form_vertical">
                        <h4>其他建議事項：</h4>
                        <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="其他建議事項"></textarea>
                      </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                      <div class="form_title">
                        <span class="number">Q3.<span class="necessary">*</span></span>
                        Please indicate the purpose of your visit (Please select at least 1 Answer)
                      </div>
                      <div class="form_content form_vertical radio_grp">
                        <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(4)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(5)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(6)Three (and more)</label>
                      </div>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                      <div class="form_content form_vertical">
                        <h4>其他建議事項：</h4>
                        <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="其他建議事項"></textarea>
                      </div>
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger">
                      <div class="form_title">
                        <span class="number">Q3.<span class="necessary">*</span></span>
                        Please indicate the purpose of your visit (Please select at least 1 Answer)
                      </div>
                      <div class="form_content form_vertical radio_grp form-control-danger">
                        <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(4)First time</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(5)Two</label>
                        <label for="mustSameAsId"><input id="" type="checkbox">(6)Three (and more)</label>
                      </div>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                      <div class="form_content form_vertical">
                        <h4>其他建議事項：</h4>
                        <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="其他建議事項"></textarea>
                      </div>
                  </div>

                  <!-- 4 -->
                  <!-- Type-1 -->
                  <div class="form_grp" id="qqdiv-6">
                      <div class="form_title">
                          <span class="number">Q4.</span>最佳公投日期
                      </div>
                      <div class="form_content form_vertical radio_grp">
                          <input type="text" name="q-QS000010" id="q-QS000010" class="calendar" readonly="" value="2019/01/02" aria-invalid="false">
                          <img src="images/icon-calendar.png" class="calendar" id="q-QS000010Pic" border="0" align="absmiddle">
                          <script>
                              Calendar.setup({
                                  inputField: "q-QS000010",
                                  ifFormat: "%Y/%m/%d",
                                  button: "q-QS000010Pic"
                              });
                          </script>
                          <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                      </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp" id="qqdiv-6">
                      <div class="form_title">
                          <span class="number">Q4.<span class="necessary">*</span></span>最佳公投日期
                      </div>
                      <div class="form_content form_vertical radio_grp form-control-danger">
                          <input type="text" name="q-QS000010" id="q-QS000010" class="calendar" readonly="" value="2019/01/02" aria-invalid="false">
                          <img src="images/icon-calendar.png" class="calendar" id="q-QS000010Pic" border="0" align="absmiddle">
                          <script>
                              Calendar.setup({
                                  inputField: "q-QS000010",
                                  ifFormat: "%Y/%m/%d",
                                  button: "q-QS000010Pic"
                              });
                          </script>
                          <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                      </div>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-3 -->
                  <div class="form_grp has-danger" id="qqdiv-6">
                      <div class="form_title">
                          <span class="number">Q4.<span class="necessary">*</span></span>最佳公投日期
                      </div>
                      <div class="form_content form_vertical radio_grp form-control-danger">
                          <input type="text" name="q-QS000010" id="q-QS000010" class="calendar" readonly="" value="2019/01/02" aria-invalid="false">
                          <img src="images/icon-calendar.png" class="calendar" id="q-QS000010Pic" border="0" align="absmiddle">
                          <script>
                              Calendar.setup({
                                  inputField: "q-QS000010",
                                  ifFormat: "%Y/%m/%d",
                                  button: "q-QS000010Pic"
                              });
                          </script>
                          <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                      </div>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>

                  <!-- 5 -->
                  <div class="form_grp">
                      <div class="form_title"><span class="number">Q5.</span>Interested Products:</div>
                      <div class="form_content form_vertical">
                          <div class="btn_grp">
                              <a href="include/inc_selectCategory.php" class="btn-search iframe">Select Category</a>
                          </div>
                          <h3>You have Selected</h3>
                          <div class="col-6 interestPD">
                              <div class="container">
                                  <div class="col">
                                      <p>
                                          <label class="num">5160</label>
                                          <span>Health Supplement Health Supplement</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col active">
                                      <p>
                                          <label class="num">5161</label>
                                          <span>Makeup Makeup Tools</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col">
                                      <p>
                                          <label class="num">5162</label>
                                          <span>Skin Care</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col">
                                      <p>
                                          <label class="num">5163</label>
                                          <span>Makeup Makeup ToolsMakeup Makeup Tools</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col">
                                      <p>
                                          <label class="num">5164</label>
                                          <span>Makeup Makeup Tools Makeup Makeup Tools Makeup Makeup Tools</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col">
                                      <p>
                                          <label class="num">5165</label>
                                          <span>Skin Care Makeup Makeup Tools</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                                  <div class="col">
                                      <p>
                                          <label class="num">5166</label>
                                          <span>Skin Care</span>
                                          <a class="btn-close icon-cancel-1"></a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

                <!-- 按鈕 -->
                <div class="btn_grp">
                  <button type="submit" class="login-button">Next</button>
                </div>
              </form>

              <!-- Type-1 -->
              <!-- Type-2 -->
              <!-- Type-3 -->
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
    var typeAhead = (function($, window, undefined) {
      var $container = $('.dropdown-menu'),
        $list = $('.dropdown-menu ul'),
        $listItems = $list.find('li'),
        $title = $('.title'),
        $typeahead = $('#js-typeAhead');

      return {
        clearSelectedListItem: function() {
          $('.is-selected').removeClass('is-selected');
        },
        closeMenu: function(el) {
          $(el).closest('.dropdown').toggleClass('closed');
          $container.css('height', 0);
          $list.css('top', 30);
        },
        filterList: function(filterString) {
          var val = new RegExp(filterString, 'gi');

          for (var i = 0; i < $listItems.length; i++) {
            var $item = $($listItems[i]);

            if (filterString.length > 0) {
              var name = $item.data('name');

              if (name && !name.match(val)) {
                $item.addClass('is-hidden');
              } else {
                $item.removeClass('is-hidden');
              }
              this.selectFirstListItem();
            } else {
              $item.removeClass('is-hidden');
              this.clearSelectedListItem();
            }
          }
        },
        hideListItem: function($item) {
          $item.addClass('is-hidden');
        },
        openMenu: function(el) {
          $(el).parent().toggleClass('closed');
          $container.css({
            height: 200
          });
          $('#js-typeAhead').focus();
        },
        selectFirstListItem: function() {
          this.clearSelectedListItem();
          $listItems.not('.is-hidden').eq(0).addClass('is-selected');
        },
        selectListItem: function() {
          $title.html($listItems.filter('.is-selected').html());
          this.closeMenu($list);
        },
        selectListItemAtIndex: function(index) {
          this.clearSelectedListItem();
          $listItems.eq(index).addClass('is-selected');
          this.updateListPosition(index);
        },
        selectNextListItem: function() {
          var index = $listItems.hasClass('is-selected') &&
            $listItems.filter('.is-selected').index() + 1 ||
            0;
          this.selectListItemAtIndex(index);
        },
        selectPreviousListItem: function() {
          var index = $listItems.hasClass('is-selected') &&
            $listItems.filter('.is-selected').index() - 1 ||
            0;
          this.selectListItemAtIndex(index);
        },
        showListItem: function($item) {
          $item.removeClass('is-hidden');
        },
        updateListPosition: function(index) {
          var rel = $container.outerHeight() - $listItems.eq(index).position().top - 50;

          if (rel < 30) {
            $list.css('top', rel);
          } else if ($list.position().top - $listItems.eq(index).position().top < 30) {
            $list.css('top', 30)
          }
        },
        registerEvents: function() {
          var self = this;
          $('.dropdown .title').click(function() {
            if ($container.height() > 0) {
              self.closeMenu(this);
            } else {
              self.openMenu(this);
            }
          });

          $('.dropdown-menu li').click(function() {
            if ($(this).index() > 0) {
              $title.html($(this).html());
              self.closeMenu(this);
            }
          });


          $typeahead.on('keyup', function(e) {
            // 40 = down arrow
            // 38 = up arrow
            // 8 = backspace
            if (e.keyCode === 40) {
              self.selectNextListItem();
            } else if (e.keyCode === 38) {
              self.selectPreviousListItem();
            } else if (e.keyCode === 13) {
              self.selectListItem();
            } else if (e.keyCode >= 65 || e.keyCode === 8) {
              self.filterList(e.target.value);
            }
          });
        }
      }
    }(jQuery, window, undefined));

    typeAhead.registerEvents();
  </script>
</body>

</html>