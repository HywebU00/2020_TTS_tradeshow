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
              <h2>我要繳費</h2>
              <section class="clear">
                <form action="" class="form_inline searchFun">
                  <div class="form_grp">
                    <label for="mustSameAsId">公司名稱：</label>
                    <select name="" id="input" required="required">
                      <option value="">A to Z</option>
                      <option value="">Z to A</option>
                    </select>
                  </div>
                </form>
                <!-- 按鈕 -->
                <div class="btn_grp function-right">
                    <!-- <input type="button" class="btn act" value="新增">
                    <input type="button" class="btn act" value="選自產品庫">
                    <input type="button" class="btn act" value="刪除"> -->
                    <input type="button" class="btn act" value="回廠商專區">
                </div>
              </section>
              
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
                        <a href="http://google.com" title="" target="_blank">COMPUTEX TAPEI Calendar222</a>
                        <a href="#" class="link-website icon-globe">website</a>
                      </h3>
                      <span class="favorite icon-star-1"></span>
                      <time>2018/10/10~2018/12/20</time>
                      <a href="#" class="icon-addDate">
                        <img src="images/icon/icon-addDate.jpg" alt="Add to Calendar"><span>Add to Calendar</span>
                      </a>
                      <!-- 表格 -->
                      <div class="table_wrapper">
                        <table>
                            <tr>
                                <th>繳費項目</th>
                                <th>繳費金額</th>
                                <th>繳費期限</th>
                                <th>繳費狀態</th>
                                <th>繳費日期</th>
                                <th>動作</th>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>10,000</td>
                                <td>2019/10/10</td>
                                <td><span>已繳</span></td>
                                <td>2019/05/05</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>20,000</td>
                                <td>2019/10/10</td>
                                <td><span class="Un">未繳</span></td>
                                <td>&nbsp;</td>
                                <td><input type="button" value="線上繳費" class="btn act"><input type="button" value="下載繳款單" class="btn act"></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3-9 showlist">
                  <div class="container">
                    <div class="col">
                      <div class="img-container">
                        <a href="#"><img src="images/icon-logo2.jpg" alt="" class="contain"></a>
                      </div>
                    </div>
                    <div class="col">
                      <h3><a href="http://google.com" title="" target="_blank">
                          COMPUTEX TAPEI 2018 COMPUTEX TAPEICOMPUTEX TAPEI 2018</a><a href="#" class="link-website icon-globe">website</a></h3><span class="favorite icon-star-1 active"></span>
                      <time>2018/10/10~2018/12/20</time>
                      <a href="#" class="icon-addDate"><img src="images/icon/icon-addDate.jpg" alt="Add to Calendar"><span>Add to Calendar</span></a>
                      <!-- 表格 -->
                      <div class="table_wrapper">
                        <table>
                            <tr>
                                <th>繳費項目</th>
                                <th>繳費金額</th>
                                <th>繳費期限</th>
                                <th>繳費狀態</th>
                                <th>繳費日期</th>
                                <th>動作</th>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>10,000</td>
                                <td>2019/10/10</td>
                                <td><span>已繳</span></td>
                                <td>2019/05/05</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>20,000</td>
                                <td>2019/10/10</td>
                                <td><span class="Un">未繳</span></td>
                                <td>&nbsp;</td>
                                <td><input type="button" value="線上繳費" class="btn act"><input type="button" value="下載繳款單" class="btn act"></td>
                            </tr>
                        </table>
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
                      <h3><a href="http://google.com" title="" target="_blank">
                          COMPUTEX TAPEI 2018</a><a href="#" class="link-website icon-globe">website</a></h3><span class="favorite icon-star-1"></span>
                      <time>2018/10/10~2018/12/20</time>
                      <a href="#" class="icon-addDate"><img src="images/icon/icon-addDate.jpg" alt="Add to Calendar"><span>Add to Calendar</span></a>
                      <!-- 表格 -->
                      <div class="table_wrapper">
                        <table>
                            <tr>
                                <th>繳費項目</th>
                                <th>繳費金額</th>
                                <th>繳費期限</th>
                                <th>繳費狀態</th>
                                <th>繳費日期</th>
                                <th>動作</th>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>10,000</td>
                                <td>2019/10/10</td>
                                <td><span>已繳</span></td>
                                <td>2019/05/05</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>訂金</td>
                                <td>20,000</td>
                                <td>2019/10/10</td>
                                <td><span class="Un">未繳</span></td>
                                <td>&nbsp;</td>
                                <td><input type="button" value="線上繳費" class="btn act"><input type="button" value="下載繳款單" class="btn act"></td>
                            </tr>
                        </table>
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