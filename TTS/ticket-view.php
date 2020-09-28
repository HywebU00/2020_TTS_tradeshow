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
            <h1 class="wow fadeInDown" data-wow-delay="0.2s">檢視訂單</h1>
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
            <!-- 中文版 -->
            <table summary="" class="table_list table_hover table_sprite">
                <thead>
                    <tr>
                        <th>活動名稱</th>
                        <th>活動時間</th>
                        <th>地點</th>
                        <th>票別</th>
                        <th>數量</th>
                        <th>價格(NT$)</th>
                        <th>動作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="活動名稱">Computex Taipei 2018</td>
                        <td data-title="活動時間">2018/09/24－2018/09/27</td>
                        <td data-title="活動地點" class="text-center">台北世貿一館</td>
                        <td data-title="票別" class="text-center">票種1</td>
                        <td data-title="數量" class="text-center">1</td>
                        <td data-title="價格(NT$)" class="text-center">200</td>
                        <td data-title="動作" class="text-center">
                            <button type="button" class="btn btn-icon icon-trash-empty"></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="活動名稱">Computex Taipei 2018</td>
                        <td data-title="活動時間">2018/09/24－2018/09/27</td>
                        <td data-title="活動地點" class="text-center">台北世貿一館</td>
                        <td data-title="票別" class="text-center">票種2</td>
                        <td data-title="數量" class="text-center">1</td>
                        <td data-title="價格(NT$)" class="text-center">300</td>
                        <td data-title="動作" class="text-center">
                            <button type="button" class="btn btn-icon icon-trash-empty"></button>
                        </td>
                    </tr>
                    <tr class="borderNone">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td data-title="合計(NT$)" class="text-center">合計(NT$)</td>
                        <td data-title="數量" class="text-center">2</td>
                        <td data-title="價格(NT$)" class="text-center">500</td>
                        <td data-title="動作" class="text-center">
                            <button type="button" class="btn btn-icon icon-trash-empty"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 英文版 -->
            <table summary="" class="table_list table_hover table_sprite">
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Ticket Name</th>
                        <th>Ticket Amount</th>
                        <th>Price(NT$)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Event">computextaipei</td>
                        <td data-title="Date">2019/01/09-2019/01/12</td>
                        <td data-title="Venue" class="text-center">TWTC Exhibition Hall 1,TWTC Exhibition Hall 3,NanGang Exhibition Hall 4F,TICC</td>
                        <td data-title="Ticket Name" class="text-center">N ticket</td>
                        <td data-title="Ticket Amount" class="text-center">1</td>
                        <td data-title="Price(NT$)" class="text-center">100</td>
                    </tr>
                    <tr class="borderNone">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td data-title="Sum(NT$)" class="text-center">Sum(NT$)</td>
                        <td data-title="Ticket Amount" class="text-center">1</td>
                        <td data-title="Price(NT$)" class="text-center">100</td>
                    </tr>
                </tbody>
            </table>

            <hr class="hrline"></hr>

            <form action="" method="get" class="form_grid">
                <div class="col-12 ticketViewList">
                    <!-- 1 -->
                    <div class="col form_vertical">
                        <label for="" class="No">1</label>
                        <h3>取票方式</h3>
                        <div class="form_grp">
                            <label for="mustSameAsId" >
                                <input type="radio" name="" id="input" value="" >QR colde 電子票券
                            </label>
                            <div class="form_content">
                                <p>完成線上付款後，系統將產生一組專屬的序號及QR code，入場時請出示您的QR code給驗票人員掃描，每張電子票券僅能掃描一次，請妥善保管您的QR code，並請勿任意提供給他人，或分享張貼至社群網站。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col form_inline">
                        <label for="" class="No">2</label>
                        <h3>訂購人基本資料</h3>
                        <div class="form_grp has-danger">
                            <label for="" class="form_title"><span class="necessary">*</span>聯絡電話：</label>
                            <div class="form_content form-control-danger">
                                <input type="text" placeholder="ex:02-12345678">
                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                            </div>
                        </div>
                        <div class="form_grp">
                            <label for="" class="form_title"><span class="necessary">*</span>電子郵件：</label>
                            <div class="form_content">
                                time@hyweb.com.tw
                            </div>
                        </div>
                    </div>
                    <!-- 2-2 -->
                    <div class="col">
                        <label for="" class="No">2</label>
                        <h3>訂購人基本資料 樣式二</h3>
                        <div class="col-6">
                            <div class="container">
                                <div class="col">
                                    <div class="form_grp has-danger">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>聯絡電話：</label>
                                        <div class="form_content form-control-danger">
                                            <input type="text" placeholder="Please enter Taiwan Tax ID Number">
                                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>電子郵件：</label>
                                        <div class="form_content">
                                            time@hyweb.com.tw
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="col">
                        <label for="" class="No">3</label>
                        <h3>發票資訊</h3>
                        <label for="mustSameAsId-1" class="block">
                            <input type="radio" name="" id="mustSameAsId-1" value="" >個人發票
                        </label>
                        <label for="mustSameAsId-2" class="block">
                            <input type="radio" name="" id="mustSameAsId-2" value="" checked="checked">三聯式發票
                        </label>

                        <!-- <div class="col-6">
                            <div class="container">                                
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>統一發票：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" placeholder="">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>公司名稱：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>郵遞區號：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" placeholder="">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>地  址：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>寄件人：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="companyId" class="form_title"><span class="necessary">*</span>Company No.：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" id="companyId" name="companyId" placeholder="請輸入Company No.">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="companyName" class="form_title"><span class="necessary">*</span>Company Name：</label>
                                            <div class="form_content">
                                                <input type="text" id="companyName" name="companyName" placeholder="請輸入Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="zipCode" class="form_title"><span class="necessary">*</span>Zip Code：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" id="zipCode" name="zipCode" placeholder="請輸入Zip Code">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="address" class="form_title"><span class="necessary">*</span>Address：</label>
                                            <div class="form_content">
                                                <input type="text" id="address" name="address" placeholder="請輸入Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="recipient" class="form_title"><span class="necessary">*</span>Recipient：</label>
                                            <div class="form_content">
                                                <input type="text" id="recipient" name="recipient" placeholder="請輸入Recipient">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-6">
                            <div class="container">
                                <div class="col">
                                    <div class="form_grp has-danger">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>統一發票：</label>
                                        <div class="form_content form-control-danger">
                                            <input type="text" placeholder="">
                                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>公司名稱：</label>
                                        <div class="form_content">
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp has-danger">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>郵遞區號：</label>
                                        <div class="form_content form-control-danger">
                                            <input type="text" placeholder="">
                                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>地  址：</label>
                                        <div class="form_content">
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>寄件人：</label>
                                        <div class="form_content">
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col">
                                    <div class="form_grp has-danger">
                                        <label for="companyId" class="form_title"><span class="necessary">*</span>Company No.：</label>
                                        <div class="form_content form-control-danger">
                                            <input type="text" id="companyId" name="companyId" placeholder="請輸入Company No.">
                                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="companyName" class="form_title"><span class="necessary">*</span>Company Name：</label>
                                        <div class="form_content">
                                            <input type="text" id="companyName" name="companyName" placeholder="請輸入Company Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp has-danger">
                                        <label for="zipCode" class="form_title"><span class="necessary">*</span>Zip Code：</label>
                                        <div class="form_content form-control-danger">
                                            <input type="text" id="zipCode" name="zipCode" placeholder="請輸入Zip Code">
                                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="address" class="form_title"><span class="necessary">*</span>Address：</label>
                                        <div class="form_content">
                                            <input type="text" id="address" name="address" placeholder="請輸入Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_grp">
                                        <label for="recipient" class="form_title"><span class="necessary">*</span>Recipient：</label>
                                        <div class="form_content">
                                            <input type="text" id="recipient" name="recipient" placeholder="請輸入Recipient">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted">[ 發票一率採郵寄方式投遞。   臺灣地區以外不提供郵遞發票服務。 ]</div>
                    </div>
                    <!-- <div class="col">
                        <label for="" class="No">3</label>
                        <h3>發票資訊</h3>
                        <label for="mustSameAsId-1" class="block">
                            <input type="radio" name="" id="mustSameAsId-1" value="" >個人發票
                        </label>
                        <label for="mustSameAsId-2" class="block">
                            <input type="radio" name="" id="mustSameAsId-2" value="" checked="checked">三聯式發票
                        </label>

                        <div class="col-6">
                            <div class="container">
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>統一發票：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" placeholder="">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>公司名稱：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>郵遞區號：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" placeholder="">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>地  址：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>寄件人：</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="companyId" class="form_title"><span class="necessary">*</span>Company No.：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" id="companyId" name="companyId" placeholder="請輸入Company No.">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="companyName" class="form_title"><span class="necessary">*</span>Company Name：</label>
                                            <div class="form_content">
                                                <input type="text" id="companyName" name="companyName" placeholder="請輸入Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <label for="zipCode" class="form_title"><span class="necessary">*</span>Zip Code：</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" id="zipCode" name="zipCode" placeholder="請輸入Zip Code">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="address" class="form_title"><span class="necessary">*</span>Address：</label>
                                            <div class="form_content">
                                                <input type="text" id="address" name="address" placeholder="請輸入Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-pair">
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="recipient" class="form_title"><span class="necessary">*</span>Recipient：</label>
                                            <div class="form_content">
                                                <input type="text" id="recipient" name="recipient" placeholder="請輸入Recipient">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted">[ 發票一率採郵寄方式投遞。   臺灣地區以外不提供郵遞發票服務。 ]</div>
                    </div> -->
                    <!-- 4 -->
                    <div class="col form_vertical">
                        <label for="" class="No">4</label>
                        <h3>付款方式</h3>
                        <div class="form_grp">
                            <label for="mustSameAsId" class="block">
                                <input type="radio" name="" id="input" value="" checked="checked">線上付款
                            </label>
                            <div class="form_content">
                                <p>本系統線上付款採綠界科技ECPay，不論顯示訊息為何，請主動回到Taiwan Trade Shows網頁點選右上角之【LOG IN】，登入會員個人化頁面，查看該筆訂單的“訂單狀態”刷卡交易成功與否，該訂單交易是否成功，依訂單狀態之系統顯示為準。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="col form_vertical">
                        <label for="" class="No">5</label>
                        <h3>買賣契約同意書</h3>
                        <div class="agreeText">
                            <p>Taiwan Trade Shows僅提供代收服務，各票券使用辦法請以主辦單位公告為準(含購票憑證、退票、使用方式...等)請於訂購取票前詳細閱讀「線上購票同意條款」與各商品詳細介紹頁。當您同意線上訂購取票時，即視同您已閱讀、瞭解並合意接受相關條款。</p>
                            <p>線上購票同意條款</p>
                            <p> 一、本系統由Taiwan External Trade Development Council, TAITRA營運（下稱本系統），係經由網際網路銷售票券，提供各種活動節目票務服務，或受主辦單位委託代為提供票券。</p>
                            <p>二、本系統僅依據主辦單位所提供資訊，對外公告活動節目之票價、時間、地點、名稱或其他票券銷售所應公告之事項。關於活動節目本身之內容、品質及相關權益異動的事宜，請洽詢各活動節目主辦單位，並請配合主辦單位所公告之通知內容與相關規定辦理。</p>
                            <p>三、透過本系統訂購票劵者，請依照螢幕上程序操作，一旦付款完成，表示訂購人同意本次交易內容並同意支付費用，本次交易票劵即視同售出，訂購人不得以任何理由要求取消訂單，訂購人僅得依退、換票方式處理。</p>
                            <p>四、個人因素退、換票方式將另行公告於活動網站及主辦方官方網站。</p>
                        </div>
                        <div class="text-center necessary">
                            <label>
                                <input type="checkbox" value="">我已經詳細閱讀同意
                            </label>
                        </div>
                    </div>
                    <!--  -->
                    <div class="text-center">下一步將前往本系統串接的線上支付服務完成付款程序後，將自動導回本系統</div>
                    <div class="btn_grp">
                        <button type="submit" class="login-button">Next</button>
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
