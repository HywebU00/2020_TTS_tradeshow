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
                <h1 class="wow fadeInDown" data-wow-delay="0.2s">Sign Up</h1>
                <div class="img-container">
                    <div class="decoration">
                        <div class="line wow rollIn" data-wow-delay="0.2s"></div>
                        <div class="line wow rollIn" data-wow-delay="0.4s"></div>
                    </div><img src="images/banner/SignUpBg.jpg" alt="" class="cover">
                </div>
                <!-- breadcrumb路徑 -->
                <?php require_once('include/inc_breadcrumb.php'); ?>
            </div>
        </div>

        <!-- main Start -->
        <div id="center" class="main innerpage">
            <div class="container">
                <form action="" class="form_grid form_vertical">
                    <h2>Questionnaire</h2>
                    <div class="Pre-entry formQuest">
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q1.</span>
                                Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                            </div>
                            <div class="form_content form_vertical radio_grp form-control-danger">
                                <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q2.</span>
                                The Beauty Show you have been to this year are:
                            </div>
                            <div class="form_content">
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..."></textarea>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q2.</span><span class="necessary">*</span>
                                The Beauty Show you have been to this year are:
                            </div>
                            <div class="form_content form-control-danger">
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..."></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q3.</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content form_vertical">
                                <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(4)First time</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(5)Two</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(6)Three (and more)</label>
                            </div>
                        </div>
                        <!-- mix -->
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q4.</span><span class="necessary">*</span>
                                Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                            </div>
                            <div class="form_content form_vertical radio_grp">
                                <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q4.</span><span class="necessary">*</span>
                                Besides TAIWAN Beauty 2018, how many times have you visited overseas bauty shows this year so far?(Single Choice.)
                            </div>
                            <div class="form_content form_vertical radio_grp form-control-danger">
                                <label for="mustSameAsId"><input id="" type="checkbox">(1)First time</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(2)Two</label>
                                <label for="mustSameAsId"><input id="" type="checkbox">(3)Three (and more)</label>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q5.</span>
                                <span class="necessary">*</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical">
                                <label><input name="radioSample" type="radio" value="" checked="">選項一</label>
                                <label><input name="radioSample" type="radio" value="">選項二</label>
                                <label><input name="radioSample" type="radio" value="">選項三</label>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q5.</span>
                                <span class="necessary">*</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical form-control-danger">
                                <label><input name="radioSample1" type="radio" value="" checked="">選項一</label>
                                <label><input name="radioSample1" type="radio" value="">選項二</label>
                                <label><input name="radioSample1" type="radio" value="">選項三</label>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q5.</span>
                                <span class="necessary">*</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical">
                                <label><input name="radioSample" type="radio" value="" checked="">選項一</label>
                                <label><input name="radioSample" type="radio" value="">選項二</label>
                                <label><input name="radioSample" type="radio" value="">選項三</label>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q5.</span>
                                <span class="necessary">*</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical form-control-danger">
                                <label><input name="radioSample" type="radio" value="" checked="">選項一</label>
                                <label><input name="radioSample" type="radio" value="">選項二</label>
                                <label><input name="radioSample" type="radio" value="">選項三</label>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q7.</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical">
                                <div class="upload_grp">
                                    <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                                    <div class="upload_btn">
                                        <span class="icon-upload">上傳檔案</span>
                                        <input type="file" class="check_file" />
                                    </div>
                                </div>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q7.</span>
                                Please indicate the purpose of your visit (Please select at least 1 Answer)
                            </div>
                            <div class="form_content radio_grp form_vertical form-control-danger">
                                <div class="upload_grp">
                                    <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                                    <div class="upload_btn">
                                        <span class="icon-upload">上傳檔案</span>
                                        <input type="file" class="check_file" />
                                    </div>
                                </div>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q8.</span>
                                <span class="necessary">*</span>
                                上傳
                            </div>
                            <div class="form_content my-upload form-control-danger">
                                <button type="button">上傳檔案</button>
                                <input type="file" style="display: none;">
                                <!-- 客製上傳 -->
                                <div id="file-QS000025" class="upload_customize">
                                    <div id="fileBlock_1560484037960-0" class="inner">
                                        <div class="file_name">
                                            <span id="fileName_1560484037960-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti illo repudiandae aut, dolores, ipsa esse distinctio rem assumenda aspernatur odio recusandae ad eum reprehenderit quam praesentium voluptatum enim dignissimos..jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                                            <div id="removeBlock_1560484037960-0" class="delete">
                                                <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                                            </div>
                                        </div>
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
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <!-- <div class="form_content radio_grp form_vertical">
                                <div class="upload_grp">
                                    <input class="upload_file" type="text" placeholder="請上傳一篇您所撰寫的新聞報導或是提供文章連結" readonly>
                                    <div class="upload_btn">
                                        <span class="icon-upload">上傳檔案</span>
                                        <input type="file" class="check_file" />
                                    </div>
                                </div>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div> -->
                        </div>
                        <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q8.</span>
                                <span class="necessary">*</span>
                                上傳
                            </div>
                            <div class="form_content my-upload form-control-danger">
                                <button type="button">上傳檔案</button>
                                <input type="file" style="display: none;">
                                <!-- 客製上傳 -->
                                <div id="file-QS000025" class="upload_customize">
                                    <div id="fileBlock_1560484037960-0" class="inner">
                                        <div class="file_name">
                                            <span id="fileName_1560484037960-0">TTSUAT-194-1.jpg</span>&nbsp;<font color="#777777">(17 KB)</font>
                                            <div id="removeBlock_1560484037960-0" class="delete">
                                                <a href="#" id="removeBtn_1560484037960-0">刪除</a>
                                            </div>
                                        </div>
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
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <div class="form_grp">
                            <div class="form_title">
                                <span class="number">Q91.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content radio_grp form-control-danger">
                                <div class="inner-wrap">
                                    <input type="text" class="short" name="q-QS000010" id="q-QS000010" readonly="" value="2019/01/02" aria-invalid="false">
                                    <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                    <script>
                                        Calendar.setup({
                                            inputField: "q-QS000010",
                                            ifFormat: "%Y/%m/%d",
                                            button: "q-QS000010Pic"
                                        });
                                    </script>
                                    <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                                </div>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="form_grp has-danger" id="">
                            <div class="form_title">
                                <span class="number">Q92.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content form_vertical radio_grp form-control-danger">
                                <div class="inner-wrap">
                                    <input type="text" class="short" name="q-QS000010" id="q-QS000010" readonly="" value="2019/01/02" aria-invalid="false">
                                    <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                    <script>
                                        Calendar.setup({
                                            inputField: "q-QS000010",
                                            ifFormat: "%Y/%m/%d",
                                            button: "q-QS000010Pic"
                                        });
                                    </script>
                                    <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                                </div>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <!-- <div class="form_grp has-danger">
                            <div class="form_title">
                                <span class="number">Q9.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content form_vertical radio_grp">
                                <input type="text" class="short" name="q-QS000010" id="q-QS000010" readonly="" value="2019/01/02" aria-invalid="false">
                                <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                <script>
                                    Calendar.setup({
                                        inputField: "q-QS000010",
                                        ifFormat: "%Y/%m/%d",
                                        button: "q-QS000010Pic"
                                    });
                                </script>
                                <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                                <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="請輸入文字..." autocomplete="off"></textarea>
                            </div>
                        </div> -->


                        <!-- mix end -->
                        <div class="form_grp" id="qqdiv-6">
                            <div class="form_title">
                                <span class="number">6.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content form_vertical radio_grp">
                                <div class="inner-wrap">
                                    <input type="text" class="short" name="q-QS000010" id="q-QS000010" readonly="" value="2019/01/02" aria-invalid="false">
                                    <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                    <script>
                                        Calendar.setup({
                                            inputField: "q-QS000010",
                                            ifFormat: "%Y/%m/%d",
                                            button: "q-QS000010Pic"
                                        });
                                    </script>
                                    <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                                </div>
                            </div>
                        </div>
                        <div class="form_grp has-danger" id="qqdiv-6">
                            <div class="form_title">
                                <span class="number">6.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content form_vertical radio_grp form-control-danger">
                                <div class="inner-wrap">
                                    <input type="text" class="short" name="q-QS000010" id="q-QS000010" readonly="" value="2019/01/02"aria-invalid="false">
                                    <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                    <script>
                                        Calendar.setup({
                                            inputField: "q-QS000010",
                                            ifFormat: "%Y/%m/%d",
                                            button: "q-QS000010Pic"
                                        });
                                    </script>
                                    <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                                </div>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                        <!-- <div class="form_grp has-danger" id="qqdiv-6">
                            <div class="form_title">
                                <span class="number">6.</span><span class="necessary">*</span>
                                最佳公投日期
                            </div>
                            <div class="form_content form_vertical radio_grp form-control-danger">
                                <input type="text" name="q-QS000010" id="q-QS000010" value="2019/01/02" style="" aria-invalid="false">
                                <img src="images/icon-calendar.png" id="q-QS000010Pic" border="0" align="absmiddle" style="cursor:hand;">
                                <script>
                                    Calendar.setup({
                                        inputField: "q-QS000010",
                                        ifFormat: "%Y/%m/%d",
                                        button: "q-QS000010Pic"
                                    });
                                </script>
                                <button type="button" class="check_file" onclick="clearCal('q-QS000010')">Clear</button>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div> -->
                        <div class="form_grp">
                            <div class="form_title"><span class="number">10.</span>Interested Products:</div>
                            <div class="form_content form_vertical">
                                <div class="btn_grp">
                                    <a href="include/inc_selectCategory.php" class="btn-search iframe">Select Category</a>
                                </div>
                                <h3>You have Selected</h3>
                                <div class="col-6 interestPD">
                                    <div class="container">
                                        <div class="col">
                                            <p>
                                                <label class="num">5160</label>
                                                <span>Health Supplement Health Supplement</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col active">
                                            <p>
                                                <label class="num">5161</label>
                                                <span>Makeup Makeup Tools</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <label class="num">5162</label>
                                                <span>Skin Care</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <label class="num">5163</label>
                                                <span>Makeup Makeup ToolsMakeup Makeup Tools</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <label class="num">5164</label>
                                                <span>Makeup Makeup Tools Makeup Makeup Tools Makeup Makeup Tools</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <label class="num">5165</label>
                                                <span>Skin Care Makeup Makeup Tools</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <label class="num">5166</label>
                                                <span>Skin Care</span>
                                                <a class="btn-close icon-cancel-1"></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_grp">
                        <button type="submit" class="login-button">Back</button> &nbsp;
                        <button type="submit" class="login-button">Next</button>
                    </div>
                </form>
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