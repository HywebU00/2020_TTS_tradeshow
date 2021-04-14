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
            <h2>Visitor Pre-Registration</h2>
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
                <h2>Personal Information</h2>
                <div class="Pre-entry">
                    <!-- 1 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">1.</span>What's you name<span class="necessary">*</span>
                        </div>
                        <div class="form_content">
                            <div class="col-6">
                                <div class="container">
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title">First Name</label>
                                            <div class="form_content form-control-danger">
                                                <input type="text" placeholder="tim@hyweb.com.tw">
                                                <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_grp">
                                            <label for="mustSameAsId" class="form_title">Last Name</label>
                                            <div class="form_content">
                                                <input type="text" placeholder="tim@hyweb.com.tw"  readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">2.</span>And  your prefix<span class="necessary">*</span>
                        </div>
                        <div class="form_content form_inline check_grp">
                            <div class="col-4">
                                <div class="container">
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox" checked="">Mr.</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Ms.</label>
                                    </div>
                                    <div class="col">
                                       <label for="mustSameAsId"><input id="" type="checkbox">Dr.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">3.</span>Email<span class="necessary">*</span>
                        </div>
                        <div class="form_content">tim@hyweb.com.tw</div>
                    </div>
                    <!-- 4 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">4.</span>Preferred language  <span class="necessary">*</span>
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form_inline radio_grp form-control-danger">
                            <div class="col-3">
                                <div class="container">
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">正體中文</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">English</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">日本語</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">简体中文</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                    <!-- 5 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">5.</span>Would you like to receive eDM<span class="necessary">*</span>
                        </div>
                        <div class="form_content form_inline radio_grp form-control-danger">
                            <div class="col-6">
                                <div class="container">
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="sampleRadio5" value="">Yes
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="sampleRadio5" value="">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                    <!-- 6 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">6.</span>Would you like to receive In-box  message Email notice
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form_inline radio_grp">
                            <div class="col-6">
                                <div class="container">
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="sampleRadio6" value="" checked="">Yes
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="sampleRadio6" value="">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 7 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">7.</span>Purpose of your visit<span class="necessary">*</span>
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form-control-danger">
                            <select name="" id="input" required="required">
                                <option value="" selected="">please selected</option>
                                <option value="">Abyssinian</option>
                                <option value="">Abyssinian</option>
                                <option value="">Abyssinian</option>
                                <option value="">Abyssinian</option>
                            </select>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                </div>

                <h2>Company Information</h2>
                <div class="Pre-entry">
                    <!-- 1 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">1.</span>What's your company name
                        </div>
                        <div class="form_content">
                            <div class="form_grp ">
                                <label for="mustSameAsId" class="form_title">
                                    Company name<span class="necessary">*</span>
                                </label>
                                <div class="form_content">
                                    <input type="text" placeholder="tim@hyweb.com.tw">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">2.</span>And  your prefix
                        </div>
                        <div class="form_content">
                            <div class="form_grp">
                                <label for="mustSameAsId" class="form_title">Company name<span class="necessary">*</span></label>
                                <div class="form_content">
                                    <input type="text" placeholder="tim@hyweb.com.tw">
                                </div>
                            </div>
                            <div class="form_grp">
                                <div class="col-6">
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="mustSameAsId" class="form_title">City</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="mustSameAsId" class="form_title">Zip</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="mustSameAsId" class="form_title">Select Country</label>
                                                <div class="form_content">
                                                    <select name="" id="input" required="required">
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="mustSameAsId" class="form_title">Select a job function</label>
                                                <div class="form_content">
                                                    <select name="" id="input" required="required">
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                        <option value="">Abyssinian</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_grp has-danger">
                                <label for="username" class="form_title">
                                    Phone
                                    <span class="necessary">*</span>
                                    <span class="help-inline">ex: 02-12345678</span>
                                </label>
                                <div class="form_content form_inline form-control-danger">
                                    <div class="phoneCol">
                                        <div class="container">
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                            </div>
                            <div class="form_grp has-danger">
                                <label for="username" class="form_title">Fax<span class="necessary">*</span><span class="help-inline">ex: 02-12345678</span></label>
                                <div class="form_content form_inline form-control-danger">
                                    <div class="phoneCol">
                                        <div class="container">
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_grp">
                                <label for="username" class="form_title">Mobile<span class="necessary">*</span><span class="help-inline">ex: 02-12345678</span></label>
                                <div class="form_content">
                                    <div class="phoneCol">
                                        <div class="container">
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                            <div class="col">
                                                <input name="" id="" value="" type="text" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">3.</span>Media type
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form_inline check_grp">
                            <div class="col-3">
                                <div class="container">
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox" checked="">Online Media</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Print Media</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">TV</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Broadcast</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">4.</span>Website
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content">
                            <input type="text" placeholder="http://www.123.com">
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">5.</span>File
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form_inline radio_grp">
                            <!-- old -->
                            <!-- <div class="upload_grp">
                                <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                                <div class="upload_btn">
                                    <span class="icon-upload">上傳檔案</span>
                                    <input type="button" class="check_file" />
                                </div>
                            </div> -->
                            <!-- now -->
                            <div class="upload_grp">
                                <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                                <div class="upload_btn">
                                    <span class="icon-upload">上傳檔案</span>
                                    <input type="file" class="check_file" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5-2 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">5-2.<span class="necessary">*</span></span>File
                        </div>
                            <!-- <label for="mustSameAsId" class="form_title"></label> -->
                            <div class="form_content form_inline form-control-danger">
                                <div class="upload_grp">
                                    <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly="">
                                    <div class="upload_btn">
                                        <span class="icon-upload">上傳檔案</span>
                                        <input type="file" class="check_file">
                                    </div>
                                </div>
                            </div>
                            <div class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                <div class="btn_grp">
                    <button type="submit" class="login-button">Next</button>
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
