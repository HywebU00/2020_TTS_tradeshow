<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>
<body>
<div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_header.php'); ?>
    <!-- header End -->

    <!-- inner-kv -->
    <?php require_once('include/inc_inner-kv-banner.php'); ?>

    <!-- main Start -->
    <div id="center" class="main innerpage tie-2021">
        <div class="container">
            <!-- <h2>主標題/h2> -->
            <!-- 後台編輯：展覽資訊 -->
            <?php require_once('include/inc_show-info.php'); ?>

            <div class="steps">
                <ul>
                    <li class="Pass">
                        <span>1</span>
                        <p>線上參觀登記</p>
                    </li>
                    <li class="Pass">
                        <span>2</span>
                        <p>驗證電子郵件</p>
                    </li>
                    <li class="Now">
                        <span>3</span>
                        <p>預登完成</p>
                    </li>
                </ul>
            </div>

            <!-- <h2>項目標題</h2> -->
            <div class="Pre-entry fin">
                <h3>預登完成</h3>
                <p>親愛的方小明<br>謝謝支持2021台北國際汽機車零配件展&台北國際車用電子展 (含線上展),20210414~20210506。</p>
                <div class="info">
                    <p>您的參展報名已完成，以下是您的登錄資訊：</p>
                    <ul>
                        <li>展覽證姓名: 方小明</li>
                        <li>展覽證公司名稱: 凌網科技股份有限公司</li>
                        <li class="QRcode">預登編號及QRCode: <br><img src="images/QRcord.jpg" alt=""></li>
                    </ul>
                    <p>為了節省您的時間，加快換證流程，請自行列印本確認函，並於展出期間持本函連同您的兩張名片，到展場的「國內業者已線上登錄櫃台」辦理換證參若事宜</p>
                    <ol>
                        <li>此確認函並不代表入場憑證，主辦單位保留現場發證權利。</li>
                        <li>本展禁止穿拖鞋入場 (如：人字拖、藍白拖等)。</li>
                        <li>每日閉展前30分鐘將停止換證服務。</li>
                        <li>為確保您順利入場，詳細的入場須知，請至本展官網查詢。</li>
                    </ol>
                    <p>台北國際汽機車零配件展&台北國際車用電子展 (含線上展)工作團隊敬上<br>
                        電子郵件： ampa@taitra.org.tw<br>電話： 886-2-2725-5200</p>
                    <p>實體展-<br>分機 : 2694林小姐、2651吳小姐、2626張小姐</p>
                    <p>線上展-<br>分機: 2640吳小姐、2671樓小姐</p>
                    <p>Taiwan International Tradeshows</p>   
                </div>  
                <button type="submit" class="btn btn-primary">AMAP汽車零配件展</button>
                <button type="submit" class="btn btn-primary">AMAP汽車零配件展線上展</button>
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
