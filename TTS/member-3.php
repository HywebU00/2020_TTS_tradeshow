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
            <li><a href="#">EN</a>
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
                <li><a href="member-nextshow.php">Visitor</a></li>
                <li><a href="#">Exhibitor</a></li>
                <li class="active"><a href="#">Media</a></li>
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
              <h2>新增產品型錄</h2>
              <section class="clear">
                <form action="" class="form_inline searchFun">
                  <div class="form_grp">
                    <label for="mustSameAsId">公司名稱：</label>凌網科技
                    <!-- <select name="" id="input" required="required">
                      <option value="">A to Z</option>
                      <option value="">Z to A</option>
                    </select> -->
                  </div>
                </form>
                <!-- 按鈕 -->
                <!-- <div class="btn_grp function-right">
                    <input type="button" class="btn" value="新增">
                    <input type="button" class="btn" value="選自產品庫">
                    <input type="button" class="btn" value="刪除">
                    <input type="button" class="btn" value="回廠商專區">
                </div> -->
              </section>
              <form action="" class="form_grid form_vertical">
                <h3>Personal Information</h3>
                <div class="Pre-entry">
                  <!-- 上傳檔案 -->
                  <!-- Type 1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>上傳產品圖片</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline">
                      <button type="button">上傳產品圖片</button>
                      <input type="file" style="display: none;">
                      <!-- 說明 -->
                      <div class="tip">
                        <b>上傳檔案注意事項 :</b> <br>
                        檔案大小限制 : 512 KB&nbsp;/&nbsp;檔案類型限制 : *.jpg *.gif&nbsp;/&nbsp;尺寸大小建議 : 360x360&nbsp;/&nbsp;色彩模式 : RGB 
                      </div>
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
                  </div>
                  <!-- Type 2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.<span class="necessary">*</span></span>上傳產品圖片</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline">
                      <button type="button">上傳產品圖片</button>
                      <input type="file" style="display: none;">
                      <!-- 說明 -->
                      <div class="tip">
                        <b>上傳檔案注意事項 :</b> <br>
                        檔案大小限制 : 512 KB&nbsp;/&nbsp;檔案類型限制 : *.jpg *.gif&nbsp;/&nbsp;尺寸大小建議 : 360x360&nbsp;/&nbsp;色彩模式 : RGB 
                      </div>
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
                    <!-- <div class="form-control-feedback text-sm">請務必上傳資料</div> -->
                  </div>
                  <!-- Type 3 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.<span class="necessary">*</span></span>上傳產品圖片</div>
                    <div class="form_content form_inline">
                      <button type="button">上傳產品圖片</button>
                      <input type="file" style="display: none;">
                      <!-- 說明 -->
                      <div class="tip">
                        <b>上傳檔案注意事項 :</b> <br>
                        檔案大小限制 : 512 KB&nbsp;/&nbsp;檔案類型限制 : *.jpg *.gif&nbsp;/&nbsp;尺寸大小建議 : 360x360&nbsp;/&nbsp;色彩模式 : RGB 
                      </div>
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
                    <!-- <div class="form-control-feedback text-sm">請務必上傳資料</div> -->
                  </div>
                  <!-- Type 4 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">1.<span class="necessary">*</span></span>上傳產品圖片</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline form-control-danger">
                      <button type="button">上傳產品圖片</button>
                      <input type="file" style="display: none;">
                      <!-- 說明 -->
                      <div class="tip">
                        <b>上傳檔案注意事項 :</b> <br>
                        檔案大小限制 : 512 KB&nbsp;/&nbsp;檔案類型限制 : *.jpg *.gif&nbsp;/&nbsp;尺寸大小建議 : 360x360&nbsp;/&nbsp;色彩模式 : RGB 
                      </div>
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

                  <!-- -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.<span class="necessary">*</span></span>產品名稱(中文)</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="最多300個字(含空白)">
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">3.<span class="necessary">*</span></span>產品名稱(英文)</div>
                    <div class="form_content form-control-danger">
                      <input type="text" placeholder="最多300個字(含空白)">
                    </div>
                    <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>
                  <!-- -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">4.</span>產品型錄</div>
                    <div class="form_content">
                      <input type="text" placeholder="最多300個字(含空白)">
                    </div>
                  </div>
                  <!--  -->
                  <!-- 4-1 原始 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">4-1.</span><span class="necessary">*</span>選擇參展產品代碼
                          <!-- <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span> -->
                      </div>
                      <div class="form_content">
                          <div class="form_grp">
                              <div class="col-6">
                                  <h4>請輸入產品關鍵字或選擇產品分類碼：</h4>
                                  <div class="container">
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">產品代碼查詢</label>
                                              <div class="search_grp">
                                                  <input class="search_file" type="text">
                                                  <div class="search_btn">
                                                      <button type="button" class="">查詢</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">選擇產品代碼</label>
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
                                      </div>
                                  </div>
                              </div>
                              <!-- 查詢結果 -->
                              <div class="result" style="display: none;">
                                  <label for="" class="form_title">查詢結果：</label>
                                  <div class="form_content form_inline radio_grp form-control-danger">
                                      <div class="col-3">
                                          <div class="container">
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- 已選擇產品 -->
                              <div class="Checked_Item">
                                  <h4>已增加項目：</h4>
                                  <div class="Items">
                                      <h3>目前無選項</h3>
                                      <!-- <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉"> -->
                                  </div>
                                  <!-- <div class="btn_grp">
                                      <button type="button" class="btn">全部清除</button>
                                  </div> -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- 4-2 正常運作沒填 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">4-2.</span><span class="necessary">*</span>選擇參展產品代碼
                          <!-- <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span> -->
                      </div>
                      <div class="form_content">
                          <div class="form_grp">
                              <div class="col-6">
                                  <h4>請輸入產品關鍵字或選擇產品分類碼：</h4>
                                  <div class="container">
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">產品代碼查詢</label>
                                              <div class="search_grp">
                                                  <input class="search_file" type="text">
                                                  <div class="search_btn">
                                                      <button type="button" class="">查詢</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">選擇產品代碼</label>
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
                                      </div>
                                  </div>
                              </div>
                              <!-- 查詢結果 -->
                              <div class="result" style="display: block;">
                                  <label for="" class="form_title">查詢結果：</label>
                                  <div class="form_content form_inline radio_grp form-control-danger">
                                      <div class="col-3">
                                          <div class="container">
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- <div class="btn_grp">
                                          <button type="button" class="btn">刪除</button>
                                          <button type="button" class="btn">加入項目</button>
                                      </div> -->
                                  </div>
                              </div>
                              <!-- 已選擇產品 -->
                              <div class="Checked_Item" style="display: block;">
                                  <h4>已增加項目：</h4>
                                  <div class="Items">
                                      <input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                  </div>
                                  <div class="btn_grp">
                                      <button type="button" class="btn">全部清除</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- 4-3 沒填 -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">4-3.</span><span class="necessary">*</span>選擇參展產品代碼
                          <!-- <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span> -->
                      </div>
                      <div class="form_content">
                          <div class="form_grp">
                              <div class="col-6">
                                  <h4>搜尋代碼：</h4>
                                  <div class="container">
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">請輸入產品關鍵字或選擇產品分類碼：</label>
                                              <div class="search_grp">
                                                  <input class="search_file" type="text">
                                                  <div class="search_btn">
                                                      <button type="button" class="">查詢</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col">
                                          <div class="form_grp">
                                              <label for="" class="form_title">選擇產品代碼</label>
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
                                      </div>
                                  </div>
                              </div>
                              <!-- 查詢結果 -->
                              <div class="result" style="display: none;">
                                  <label for="" class="form_title">查詢結果：</label>
                                  <div class="form_content form_inline radio_grp form-control-danger">
                                      <div class="col-3">
                                          <div class="container">
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                              <div class="col">
                                                  <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- 已選擇產品 -->
                              <div class="Checked_Item has-danger">
                                  <h4>已增加項目：</h4>
                                  <div class="Items form-control-danger">
                                      <h3>目前無選項</h3>
                                      <!-- <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉">
                                      <input type="button" class="btn" value="610501 羊肉"> -->
                                  </div>
                                  <div id="name-danger" class="form-control-feedback text-sm">請使用上方『搜尋代碼』或『自行新增』，來增加項目。</div>
                                  <!-- <div class="btn_grp">
                                      <button type="button" class="btn">全部清除</button>
                                  </div> -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--  -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.<span class="necessary">*</span></span>產品特色(中文)
                      </div>
                      <div class="form_content form-control-danger">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多4000個字(含空白)"></textarea>
                      </div>
                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <div class="form_grp has-danger">
                      <div class="form_title">
                          <span class="number">Q2.<span class="necessary">*</span></span>產品特色(英文)
                      </div>
                      <div class="form_content form-control-danger">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多4000個字(含空白)"></textarea>
                      </div>
                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>
                  <!--  -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>產品規格(中文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>產品規格(英文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <!--  -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">1.</span>開發年度
                      </div>
                      <div class="form_content">
                          <input type="text" placeholder="輸入文字">
                          <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                      </div>
                  </div>
                  <!--  -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>認證(中文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>認證(英文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>得獎項目(中文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>得獎項目(英文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>產品優惠訊息(中文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">Q2.</span>產品優惠訊息(英文)
                      </div>
                      <div class="form_content">
                          <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="最多2000個字(含空白)"></textarea>
                      </div>
                  </div>
                  <!--  -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>型錄PDF檔</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <div class="file_name">
                            <span id="fileName_1560484037960-0">TTSUAT-194-1.pdf</span>&nbsp;<font color="#777777">(17 KB)</font>
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
                  </div>
                  <!--  -->
                  <div class="form_grp">
                      <div class="form_title">
                          <span class="number">1.</span>產品影片連結
                      </div>
                      <div class="form_content">
                          <input type="text" placeholder="http://">
                          <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                      </div>
                  </div>
                </div>
                <!-- 按鈕 -->
                <div class="btn_grp">
                  <button type="submit" class="login-button">確定</button>
                  <button type="submit" class="login-button">暫存</button>
                  <button type="submit" class="login-button">取消</button>
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
    $("document").ready(function() {
      $(".toggle").off().on('click', function(e) {
        $(".listmenu").stop().slideToggle("slow");
      });
    });
  </script>
</body>

</html>