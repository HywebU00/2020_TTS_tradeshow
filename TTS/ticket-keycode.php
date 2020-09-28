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
            <h1 class="wow fadeInDown" data-wow-delay="0.2s">輸入邀請碼</h1>
            <div class="img-container">
                <div class="decoration">
                    <div class="line wow rollIn" data-wow-delay="0.2s"></div>
                    <div class="line wow rollIn" data-wow-delay="0.4s"></div>
                </div>
                <img src="images/banner/SignUpBg.jpg" alt="" class="cover">
            </div>
            <!-- breadcrumb路徑 -->
            <?php require_once('include/inc_breadcrumb.php'); ?>
        </div>
    </div>

    <!-- main Start -->
    <div id="center" class="main innerpage">
        <div class="container">
            <h2>Visitor Presale Tickets</h2>
            <!-- 展覽內容header -->
            <div class="col-4 ticketInfo">
                <div class="container">
                    <div class="col">
                        <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">活動名稱：</label>
                            <div class="form_content">COMPUTEX TAPEI 2018</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">活動時間：</label>
                            <div class="form_content">2018/09/24－2018/09/27</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">活動地點：</label>
                            <div class="form_content">台北世貿一館</div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="" class="form_grid form_vertical">
                <div class="col-12 form_inline keyCode">
                    <div class="container">
                        <div class="col">
                            <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">
                                    <span class="necessary">*</span>請輸入邀請碼：
                                </label>
                                <div class="form_content">
                                    <input type="text" placeholder="請輸入廠商給您的活動邀請碼">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google reCAPTCHA 放置區/Start-->
                <div class="center-block">
                    <input type="hidden" id="recaptchaToken" name="recaptchaToken" value="">
                    <div id="g-recaptcha1">
                        <div style="text-align: center"><div>
                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc-vj8UAAAAAPw1oI6x-n1rGgD_6K-4LDASQUpd&amp;co=aHR0cHM6Ly93d3cudGFpd2FuZmlzaGVyeS5jb206NDQz&amp;hl=en&amp;v=v1541614764654&amp;theme=light&amp;size=normal&amp;cb=canp0ubk3mya" width="304" height="78" role="presentation" name="a-okx7m3ybsesr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                    </div>
                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                    </textarea>
                </div>
                <!-- Google reCAPTCHA 放置區/End-->
                <div class="btn_grp">
                    <button type="submit" class="login-button">Next</button>
                </div>
            </form>
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
</body>
</html>
