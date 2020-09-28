<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
    <div class="wrapper">
        <!-- header Start -->
        <?php require_once('include/inc_header.php'); ?>
        <!-- header End -->
        <!-- inner-kv -->
        <div class="inner-kv variable">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay="0.2s">Sign Up</h1>
                <div class="img-container">
                    <div class="decoration">
                      <div class="line wow rollIn" data-wow-delay="0.2s"></div>
                      <div class="line wow rollIn" data-wow-delay="0.4s"></div>
                  </div>
                  <img src="images/banner/SignUpBg.jpg" alt="" class="cover"></div>
                  <!-- breadcrumb路徑 -->
                  <?php require_once('include/inc_breadcrumb.php'); ?>
              </div>
          </div>


          <!-- main Start -->
          <div id="center" class="main innerpage">
            <div class="container">
                <h2>Reset Password</h2>
                <div class="signupBox">
                    <h3>Please Reset your Password</h3>
                    <form action="" class="form_grid form_vertical">
                        <div class="form_grp has-danger">
                            <label for="mustSameAsId" class="form_title">E-MAIL Address<span class="necessary">*</span></label>
                            <div class="form_content form-control-danger">
                                <input type="text" placeholder="tim@hyweb.com.tw">
                            </div>
                        </div>
                        <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">Password<span class="necessary">*</span></label>
                            <div class="form_content">
                                <input type="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">Password(comfirm)<span class="necessary">*</span></label>
                            <div class="form_content">
                                <input type="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="btn_grp">
                            <button type="submit" class="login-button">Reset Password</button>
                        </div>
                    </form>
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
</body>

</html>
