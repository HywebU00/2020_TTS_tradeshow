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
        <a href="mp.php" class="logo"><img src="images/logo-en.png" alt="網站標題"/></a>

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
              Profile Setting
              <ul>
                <li class="active"><a href="member-nextshow.php">Visitor</a></li>
                <li ><a href="#">Exhibitor</a></li>
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
            <h2>History</h2>
            <div class="box_content">
              <div class="col-3-9 showlist">
                <div class="container">
                  <div class="col">
                    <div class="img-container">
                      <a href="#"><img src="images/icon-logo2.png" alt="" class="contain"></a>
                    </div>
                  </div>
                  <div class="col">
                    <h3><a href="http://google.com" title="" target="_blank">
                    COMPUTEX TAPEI 2018</a></h3>
                    <time>2018/10/10~2018/12/20</time>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Type：</label>
                      <div class="form_content">Pre-Registration</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Quantity：</label>
                      <div class="form_content">1</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Status：</label>
                      <div class="form_content"><span class="label label-default">In Review</span><span class="label label-OK">OK</span><span class="label label-reject">Reject</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-3-9 showlist">
                <div class="container">
                  <div class="col">
                    <div class="img-container">
                      <a href="#"><img src="images/icon-logo.png" alt="" class="contain"></a>
                    </div>
                  </div>
                  <div class="col">
                    <h3><a href="http://google.com" title="" target="_blank">
                    COMPUTEX TAPEI 2018</a></h3>
                    <time>2018/10/10~2018/12/20</time>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Type：</label>
                      <div class="form_content">Pre-Registration</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Quantity：</label>
                      <div class="form_content">1</div>
                    </div>
                    <div class="form_grp">
                      <label for="mustSameAsId" class="form_title">Status：</label>
                      <div class="form_content"><span class="label label-default">In Review</span>
                        <span class="label label-reject">Reject</span></div>
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
                      COMPUTEX TAPEI 2018</a></h3>
                      <time>2018/10/10~2018/12/20</time>
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Type：</label>
                        <div class="form_content">Pre-Registration</div>
                      </div>
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Quantity：</label>
                        <div class="form_content">1</div>
                      </div>
                      <div class="form_grp">
                        <label for="mustSameAsId" class="form_title">Status：</label>
                        <div class="form_content">
                          <span class="label label-OK">OK</span></div>
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
          $list.css( 'top', 30 );
        },
        filterList: function(filterString) {
          var val = new RegExp(filterString, 'gi');

          for(var i=0; i<$listItems.length; i++) {
            var $item = $($listItems[i]);

            if( filterString.length > 0 ) {
              var name = $item.data('name');

              if( name && !name.match(val)) {
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

          if( rel < 30 ) {
            $list.css('top', rel);
          } else if( $list.position().top - $listItems.eq(index).position().top < 30) {
            $list.css('top', 30)
          }
        },
        registerEvents: function() {
          var self = this;
          $('.dropdown .title').click(function () {
            if( $container.height() > 0) {
              self.closeMenu(this);
            } else {
              self.openMenu(this);
            }
          });

          $('.dropdown-menu li').click(function () {
            if($(this).index() > 0) {
              $title.html($(this).html());
              self.closeMenu(this);
            }
          });


          $typeahead.on('keyup', function(e) {
                    // 40 = down arrow
                    // 38 = up arrow
                    // 8 = backspace
                    if( e.keyCode === 40 ) {
                      self.selectNextListItem();
                    } else if( e.keyCode === 38) {
                      self.selectPreviousListItem();
                    } else if( e.keyCode === 13 ) {
                      self.selectListItem();
                    } else if( e.keyCode >= 65 || e.keyCode === 8 ) {
                      self.filterList( e.target.value );
                    }
                  });
        }
      }
    }(jQuery, window, undefined));

typeAhead.registerEvents();
</script>
</body>

</html>
