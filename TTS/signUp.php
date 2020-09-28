<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
    <div class="wrapper">
        <!-- header Start -->
        <?php require_once('include/inc_header.php'); ?>
        <!-- header End -->
        <!-- inner-kv -->
        <div class="inner-kv">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay="0.2s">Sign Up 會員登入預設圖</h1>
                <div class="img-container">
                    <div class="decoration">
                      <div class="line wow rollIn" data-wow-delay="0.2s"></div>
                      <div class="line wow rollIn" data-wow-delay="0.4s"></div>
                  </div>
                  <img src="images/banner/SignUpBg.jpg" alt="" class="cover">
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
            <div class="signupBox">
                <form action="" class="form_grid form_vertical">
                    <div class="form_grp has-danger">
                        <label for="mustSameAsId" class="form_title">E-MAIL Address<span class="necessary">*</span></label>
                        <div class="form_content form-control-danger">
                            <input type="text" placeholder="tim@hyweb.com.tw">
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            <div class="col">
                                <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">First Name<span class="necessary">*</span></label>
                                    <div class="form_content">
                                        <input type="text" placeholder="tim@hyweb.com.tw">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">Last Name<span class="necessary">*</span></label>
                                    <div class="form_content">
                                        <input type="text" placeholder="tim@hyweb.com.tw">
                                    </div>
                                </div>
                            </div>
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
                    <div class="help-block form_grp">
                        <div class="form_content text-center">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">I haver read and agree to the </label>
                            <span>
                                <a href="javascript:void(0)" id="to-recover">Terms of Service</a> 
                            </span>
                        </div>
                    </div>
                    <!-- Google reCAPTCHA 放置區/Start-->
                    <div class="form_grp">
                        <input type="hidden" id="recaptchaToken" name="recaptchaToken" value="">
                        <div id="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc-vj8UAAAAAPw1oI6x-n1rGgD_6K-4LDASQUpd&amp;co=aHR0cHM6Ly93d3cudGFpd2FuZmlzaGVyeS5jb206NDQz&amp;hl=en&amp;v=v1541614764654&amp;theme=light&amp;size=normal&amp;cb=canp0ubk3mya" width="304" height="78" role="presentation" name="a-okx7m3ybsesr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                    </div>
                    <!-- Google reCAPTCHA 放置區/End-->
                    <div class="btn_grp">
                        <button type="submit" class="login-button">Create Account</button>
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
