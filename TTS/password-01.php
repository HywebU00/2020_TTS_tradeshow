<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
<div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_header.php'); ?>
    <!-- header End -->

    <!-- inner-kv -->
    <?php require_once('include/inc_inner-kv.php'); ?>

    <!-- main Start -->
    <div id="center" class="main innerpage tie-2021">
        <div class="container">
            <!-- <h2>主標題</h2> -->
            <!-- steps -->
            <div class="steps">
                <ul>
                    <li class="Now">
                        <span>1</span>
                        <p>輸入電子信箱</p>
                    </li>
                    <li>
                        <span>2</span>
                        <p>重設密碼</p>
                    </li>
                    <li>
                        <span>3</span>
                        <p>設定成功</p>
                    </li>
                </ul>
            </div>
            <!-- login表單 -->
            <form action="" class="form_grid form_vertical">
                <!-- add className：login-type -->
                <div class="Pre-entry form-type2 login-type">
                    <h3 class="title">忘記密碼  /  Are you having trouble signing in?</h3>
                    <div class="inner-wrap">
                        <!-- 1 -->
                        <section>
                            <div class="form_grp">
                                <div class="form_content need-check">
                                    <input type="text">
                                    <span class="title necessary">電子信箱</span>
                                    <button type="submit" class="btn-check">email檢查</button>
                                    <!-- notic -->
                                    <div class="notice_normal">輸入您當初註冊的電子郵件地址</div>
                                    <!-- <div class="notice_warning"> 此電子郵件尚未註冊。請選擇其他電子郵件地址。或是您想<a href="#">立即註冊</a></div> -->
                                </div>
                            </div>
                            <div class="form_grp has-danger">
                                <div class="form_content need-check">
                                    <input type="text" value="server@gmail.com">
                                    <span class="title necessary">電子信箱</span>
                                    <button type="submit" class="btn-check">email檢查</button>
                                    <!-- notic -->
                                    <div class="notice_normal">輸入您當初註冊的電子郵件地址</div>
                                    <div class="notice_warning">此電子郵件尚未註冊。請選擇其他電子郵件地址。或是您想<a href="#">立即註冊</a></div>
                                </div>
                            </div>
                        </section>
                        <!-- 2 -->
                        <section>
                            <div class="QA">
                                <h4>會員常見問題</h4>
                                <ul>
                                    <li><a href="#">登入被鎖住怎麼辨？</a></li>
                                    <li><a href="#">會員註冊流程說明？</a></li>
                                    <li><a href="#">忘記密碼怎麼辦?</a></li>
                                </ul>
                                <div class="btn_grp">
                                    <button type="submit" class="">更多常見問題</button>
                                </div>
                            </div>
                            <div class="contact">
                                <h4>若有任何問題，歡迎隨時與我們連絡</h4>
                                <p>電子郵件：<a href="#">cycle@taitra.org.tw</a></p>
                            </div>  
                        </section>
                    </div>
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
