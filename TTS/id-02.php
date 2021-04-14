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
                <h2>上傳臉部相片</h2>
                <div class="Pre-entry">
                    <form action="" class="form_grid form_vertical">
                        <!-- 第一次上傳 -->
                        <div class="form_grp">
                            <div class="col-4-8 face_id">
                                <div class="container">
                                    <div class="col">
                                        <div class="Foto">
                                            <img src="images/id-default.jpg" alt="">
                                        </div>  
                                    </div>
                                    <div class="col">
                                        <div class="form_content my-upload">
                                            <button type="button">選取相片</button>
                                            <p>請提供五官清晰可辨，無遮蔽的相片</p>
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
                                </div>
                            </div>
                        </div>
                        <!-- 已上傳 -->
                        <div class="form_grp">
                            <div class="col-4-8 face_id">
                                <div class="container">
                                    <div class="col">
                                        <div class="Foto">
                                            <img src="http://tts.member.hyweb.com.tw/s/img/22BB73FC73BA001F466E00C3C36C3525657D0BD0DA9FA5EC9DC9B33BAED534502ED4108422C196CC007FCE2889CD4803A1659B3810EEAB03" alt="">
                                        </div>  
                                    </div>
                                    <div class="col">
                                        <div class="form_content my-upload">
                                            <button type="button">更換相片</button>
                                            <p>請提供五官清晰可辨，無遮蔽的相片</p>
                                            <!-- 客製上傳 -->
                                            <div id="file-QS000025" class="upload_customize">
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
                                            </div>
                                            <!-- 客製上傳 END-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="btn_grp">
                            <button type="submit" class="login-button">回上頁</button>
                            <button type="submit" class="login-button">下一步</button>
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
