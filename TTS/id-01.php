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
                <!-- menu Start -->
                <nav class="menu2020">
                    <ul>
                        <li><a href="#">關於我們</a></li>
                        <li><a href="#">最新消息</a></li>
                        <li><a href="#">展覽檔期</a></li>
                        <li><a href="#">展覽影音</a></li>
                    </ul>
                </nav>
                <!--  -->
                <h1 class="wow fadeInDown" data-wow-delay="0.2s">線上參觀登記</h1>
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
                <h2>線上參觀登記</h2>
                <div class="Pre-entry">
                    <form action="" class="form_grid form_vertical">
                        <!-- 1 -->
                        <div class="form_grp">
                            <div class="form_title">服務條款</div>
                            <div class="form_content check_grp" style="background: #f7f7f7; padding: 1em 0;">
                                <label for="">
                                    <input id="" type="checkbox" value="">我已經詳盡閱讀並同意
                                    <a href="javascript:void(0)" id="to-recover">服務條款和隱私權政策</a> 
                                </label>
                                <label for="">
                                    <input id="" type="checkbox" value="">我已經詳盡閱讀並同意
                                    <a href="javascript:void(0)" id="to-recover">網站蒐集用個人資料</a> 
                                </label>
                            </div>
                            <div class="form_content check_grp">
                                <label for="">
                                    <input id="" type="checkbox" value="">同意以上所有聲明項目
                                </label>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">服務條款</div>
                            <div class="form_content check_grp form-control-danger">
                                <label for="">
                                    <input id="" type="checkbox" value="">我已經詳盡閱讀並同意
                                    <a href="javascript:void(0)" id="to-recover">服務條款和隱私權政策</a> 
                                </label>
                                <label for="">
                                    <input id="" type="checkbox" value="">我已經詳盡閱讀並同意
                                    <a href="javascript:void(0)" id="to-recover">網站蒐集用個人資料</a> 
                                </label>
                            </div>
                            <div id="personalDataAgree-error" class="form-control-feedback">必須填寫</div>
                            <div class="form_content check_grp">
                                <label for="">
                                    <input id="" type="checkbox" value="">同意以上所有聲明項目
                                </label>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="form_grp">
                            <div class="form_title">使用人臉辨識服務</div>
                            <div class="form_content form_inline radio_grp">
                                <div class="col-6">
                                    <div class="container">
                                        <div class="col">
                                            <label>
                                                <input type="radio" name="sampleRadio6" value="" checked="">同意
                                                <span><a href="javascript:void(0)" id="to-recover">使用人臉辨識服務</a></span>
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label>
                                                <input type="radio" name="sampleRadio6" value="">不同意
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">使用人臉辨識服務</div>
                            <div class="form_content form_inline radio_grp form-control-danger">
                                <div class="col-6">
                                    <div class="container">
                                        <div class="col">
                                            <label>
                                                <input type="radio" name="sampleRadio5" value="">同意
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label>
                                                <input type="radio" name="sampleRadio5" value="">不同意
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <!-- btn -->
                        <div class="btn_grp">
                            <button type="submit" class="login-button">回上頁</button>
                            <button type="submit" class="login-button">確定</button>
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
