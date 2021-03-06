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
                    <li class="Now">
                        <span>1</span>
                        <p>線上參觀登記</p>
                    </li>
                    <li>
                        <span>2</span>
                        <p>驗證電子郵件</p>
                    </li>
                    <li>
                        <span>3</span>
                        <p>預登完成</p>
                    </li>
                </ul>
            </div>

            <!-- login表單 -->
            <form action="" class="form_grid form_vertical">
                <div class="Pre-entry form-type2">
                    <!-- 人臉辨識 -->
                    <?php require_once('include/inc_faceID.php'); ?>
                    <!--  -->
                    <div class="form_grp has-danger">
                        <div class="form_content">
                            <input type="text">
                            <span class="title necessary">電子信箱</span>
                            <!-- notic -->
                            <div class="notice_normal">此電子信箱將成為您的登入帳號</div>
                            <div class="notice_warning">已有帳號使用此電子郵件地址。請選擇其他電子郵件地址。或是您想進行<a href="#">登入</a></div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <input type="password">
                            <span class="title necessary">密碼</span>
                            <!-- notic -->
                            <div class="notice_normal">密碼必須包含：<span class="pass">至少八個字元</span>、<span>大寫與小寫</span>、<span>至少一個數字</span>、<span>至少一個特殊字元</span>
                            </div>
                        </div>
                    </div>
                    <div class="form_grp has-danger">
                        <div class="form_content">
                            <input type="password" value="1234">
                            <span class="title necessary">驗證密碼</span>
                            <!-- notic -->
                            <div class="notice_error">驗證密碼不符</div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <div class="form_grp">
                                <div class="col-8-4">
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <input type="text">
                                                    <span class="title">姓名</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <span class="title">稱謂</span>
                                                    <select name="" id="input" required="required">
                                                        <option value="" selected="">請選擇項目</option>
                                                        <option value="">項目1</option>
                                                        <option value="">項目2</option>
                                                        <option value="">項目3</option>
                                                        <option value="">項目4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <div class="address type-select">
                                <div class="container">
                                    <div class="col country">
                                        <div class="form_grp">
                                            <div class="form_content">
                                                <span class="title">國家</span>
                                                <select name="" id="input" required="required">
                                                    <option value="" selected="">請選擇項目</option>
                                                    <option value="">項目1</option>
                                                    <option value="">項目2</option>
                                                    <option value="">項目3</option>
                                                    <option value="">項目4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col zone">
                                        <div class="form_grp">
                                            <div class="form_content">
                                                <span class="title">地區</span>
                                                <select name="" id="input" required="required">
                                                    <option value="" selected="">請選擇項目</option>
                                                    <option value="">項目1</option>
                                                    <option value="">項目2</option>
                                                    <option value="">項目3</option>
                                                    <option value="">項目4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <div class="form_content">
                                                <input type="text">
                                                <span class="title">地址</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <div class="phoneCol type-select">
                                <div class="container">
                                    <div class="col">
                                        <div class="form_grp">
                                            <div class="form_content">
                                                <span class="title">國家區碼</span>
                                                <select name="" id="input" required="required">
                                                    <option value="" selected="">請選擇項目</option>
                                                    <option value="">項目1</option>
                                                    <option value="">項目2</option>
                                                    <option value="">項目3</option>
                                                    <option value="">項目4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp has-danger">
                                            <div class="form_content">
                                                <input type="text">
                                                <span class="title">手機號碼</span>
                                                <!-- notic -->
                                                <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                                <div class="notice_success">提示文字</div>
                                                <div class="notice_error">提示文字</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <input type="text">
                            <span class="title necessary">公司名稱</span>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <input type="text">
                            <span class="title">公司統編</span>
                            <!-- notic -->
                            <div class="notice_normal">若沒有統編可不輸入。</div>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <input type="text">
                            <span class="title">職稱</span>
                        </div>
                    </div>
                    <div class="form_grp">
                        <div class="form_content">
                            <span class="title">工作屬性</span>
                            <select name="" id="input" required="required">
                                <option value="" selected="">請選擇項目</option>
                                <option value="">項目1</option>
                                <option value="">項目2</option>
                                <option value="">項目3</option>
                                <option value="">項目4</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <!-- 舊版 混 新版 -->
                    <!-- 1 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">1.</span><span class="necessary">*</span>請問這是您第幾次參觀本展?
                        </div>
                        <div class="form_content">
                            <div class="radio_grp form_inline">
                                <label><input name="radioSample-2" type="radio" value="" checked="">選項一</label>
                                <label><input name="radioSample-2" type="radio" value="">選項二</label>
                                <label><input name="radioSample-2" type="radio" value="">選項三</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- 2 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">2.</span><span class="necessary">*</span>請問您本次參觀的目的為何?
                        </div>
                        <div class="form_content check_grp form_inline">
                            <div class="col-6">
                                <div class="container">
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">(1) 採購</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">(2) 尋找新的供應商</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">(3) 其他，請敘述：</label>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- 3 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">3.</span><span class="necessary">*</span>請上傳名片
                        </div>
                        <div class="form_content">
                            <div class="drag">
                                <p>將圖片拖曳進來或點擊選擇圖片<br>可以上傳jpeg,jpg,gif,png；檔案大小要在5MB以下</p>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIiU-8LCFxDa8FtcQuVi8IzrghcymAgPe-XA&usqp=CAU" alt="">
                            </div>
                            <div class="btn_grp">
                                <button type="button" class="btn">清除，重新上傳</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- 4 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">4.</span><span class="necessary">*</span>請選擇有興趣的項目
                        </div>
                        <div class="form_content">
                            <div class="form_grp">
                                <!-- 已選擇產品 -->
                                <!-- 2.有項目 -->
                                <div class="Checked_Item">
                                    <h4>已增加項目：</h4>
                                    <!-- 1.無項目 -->
                                    <div class="Items">
                                        <h3>目前無選項</h3>
                                    </div>
                                    <!-- 2.有項目 -->
                                    <div class="Items">
                                        <input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                    </div>
                                    <div class="btn_grp">
                                        <button type="button" class="btn">全部清除</button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <h4>搜尋代碼：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content PD-code-search">
                                                    <input type="text">
                                                    <span class="title necessary">產品代碼查詢</span>
                                                    <button type="submit" class="btn-check">查詢</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <span class="title">產業類別</span>
                                                    <select name="" id="input" required="required">
                                                        <option value="" selected="">請選擇項目</option>
                                                        <option value="">項目1</option>
                                                        <option value="">項目2</option>
                                                        <option value="">項目3</option>
                                                        <option value="">項目4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 查詢結果 -->
                                <div class="result">
                                    <label for="" class="form_title">查詢結果：</label>
                                    <!-- 樣式2 -->
                                    <div class="form_content result-type2">
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉豬肉豬肉豬肉豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                        <div class="col">510501 豬肉</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- 買主證 -->
                    <section class="buyer">
                        <div class="form_grp">
                            <div class="form_content">
                                <input type="text" autocomplete="off">
                                <span class="title">買主證姓名</span>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_content">
                                <input type="text" autocomplete="off">
                                <span class="title">買主證公司名稱</span>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_content">
                                <input type="text" autocomplete="off">
                                <span class="title">國家</span>
                            </div>
                        </div>
                    </section>

                    <!-- 驗證碼 -->
                    <div class="captcha">
                        <div class="col code">
                            <img src="images/captcha.png" alt="">
                            <a href="#">更新驗證碼</a>
                        </div>
                        <div class="col">
                            <div class="form_grp">
                                <input type="text">
                            </div>
                        </div>
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
