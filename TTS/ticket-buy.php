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
                            <div class="form_content">Taiwan International Fisheries & Seafood Show</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" class="form_grid form_vertical">
                <h3 class="icon-ticket">請選擇購買數量</h3>
                <form action="ticket-buy_submit" method="get">
                    <table summary="" class="table_list table_hover table_sprite">
                        <!-- <caption>功能資訊</caption> -->
                        <thead>
                            <tr>
                                <th width="12%">內容</th>
                                <th>說明</th>
                                <th width="12%">價格(NT$)</th>
                                <th width="12%">購買數量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="內容" class="text-center">票種1</td>
                                <td data-title="說明">入場時需出示QR Code，限單人單次使用。入場掃描後即失效，如需重複進出場，請於進場時蓋手章。</td>
                                <td data-title="價格(NT$)" class="text-center">250</td>
                                <td data-title="購買數量">
                                    <select name="" id="input" required="required">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="內容" class="text-center">票種2</td>
                                <td data-title="說明">後台讓管理人員自行輸入票種名稱跟說明，預設五組票種可進行設定</td>
                                <td data-title="價格(NT$)" class="text-center">100</td>
                                <td data-title="購買數量">
                                    <select name="" id="input"  required="required">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="內容" class="text-center">票種3</td>
                                <td data-title="說明">後台讓管理人員自行輸入票種名稱跟說明，預設五組票種可進行設定</td>
                                <td data-title="價格(NT$)" class="text-center">230</td>
                                <td data-title="購買數量">
                                    <select name="" id="input"  required="required">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <!-- Google reCAPTCHA 放置區/Start-->
                <div class="center-block">
                    <input type="hidden" id="recaptchaToken" name="recaptchaToken" value="">
                    <div id="g-recaptcha">
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
