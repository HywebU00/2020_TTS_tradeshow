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
              <h2>Profile Setting</h2>
              <form action="" class="form_grid form_vertical">
                <h3>Personal Information</h3>
                <div class="Pre-entry">
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">1.</span>What's you name<span class="necessary">*</span></div>
                    <div class="form_content">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <div class="form_grp">
                              <label for="mustSameAsId" class="form_title">First Name</label>
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
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.</span>And your prefix<span class="necessary">*</span></div>
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
                  <div class="form_grp">
                    <div class="form_title"><span class="number">3.</span>Email<span class="necessary">*</span></div>
                    <div class="form_content">
                      tim@hyweb.com.tw
                    </div>
                  </div>
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">4.</span>Preferred language <span class="necessary">*</span></div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
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
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">5.</span>Would you like to receive eDM<span class="necessary">*</span></div>
                    <div class="form_content form_inline radio_grp form-control-danger">
                      <div class="col-6">
                        <div class="container">
                          <div class="col">
                            <label>
                              <input type="radio" name="sampleRadio5" value="">Yes</label>
                          </div>
                          <div class="col">
                            <label>
                              <input type="radio" name="sampleRadio5" value="">No</label>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                  </div>
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">6.</span>Would you like to receive In-box message Email notice</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline radio_grp">
                      <div class="col-4">
                        <div class="container">
                          <div class="col">
                            <label>
                              <input type="radio" name="sampleRadio5" value="" checked="">Yes</label>
                          </div>
                          <div class="col">
                            <label>
                              <input type="radio" name="sampleRadio5" value="">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">7.</span>Purpose of your visit</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
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
                  <div class="form_grp">
                    <div class="form_title"><span class="number">1.</span>What's your company name</div>
                    <div class="form_content">
                      <div class="form_grp ">
                        <label for="mustSameAsId" class="form_title">Company name<span class="necessary">*</span></label>
                        <div class="form_content">
                          <input type="text" placeholder="tim@hyweb.com.tw">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form_grp">
                    <div class="form_title"><span class="number">2.</span>And your prefix</div>
                    <div class="form_content">
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Company name<span class="necessary">*</span></label>
                        <div class="form_content">
                          <input type="text" placeholder="tim@hyweb.com.tw">
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
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Zip</label>
                                <div class="form_content">
                                  <input type="text" placeholder="...">
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                <div class="form_content">
                                  <select name="" id="input" required="required">
                                    <option value="">Abyssinian</option>
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
                                <div class="form_content">
                                  <select name="" id="input" required="required">
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
                      </div>
                      <div class="form_grp has-danger">
                        <label for="username" class="form_title">Phone<span class="necessary">*</span><span class="help-inline">ex: 02-12345678</span></label>
                        <div class="form_content form_inline form-control-danger">
                          <div class="phoneCol">
                            <div class="container">
                              <div class="col">
                                <label for=""><input name="" id="" value="" type="text" placeholder=""></label>
                              </div>
                              <div class="col">
                                <label for=""><input name="" id="" value="" type="text" placeholder=""></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                      </div>
                      <div class="form_grp">
                        <label for="username" class="form_title">Fax<span class="necessary">*</span><span class="help-inline">ex: 02-12345678</span></label>
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
                        <label for="username" class="form_title">Mobile<span class="necessary">*</span><span class="help-inline">ex: 02-12345678</span></label>
                        <div class="form_content">
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
                    </div>
                  </div>
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
                  <div class="form_grp">
                    <div class="form_title"><span class="number">4.</span>Website</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content">
                      <input type="text" placeholder="http://www.123.com">
                    </div>
                  </div>
                  <div class="form_grp">
                    <div class="form_title"><span class="number">5.</span>File</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline radio_grp">
                      <div class="upload_grp">
                        <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                        <div class="upload_btn">
                          <span class="icon-upload">上傳檔案</span>
                          <input type="file" class="check_file" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn_grp">
                  <button type="submit" class="login-button">Next</button>
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