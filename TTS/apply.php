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
            <!-- <h2>參展報名</h2> -->
            <form action="" class="form_grid form_vertical">
                <h2>廠商資料</h2>
                <div class="Pre-entry">
                    <!-- 1 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">1.</span><span class="necessary">*</span>國別
                        </div>
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
                    <!-- 2 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">2.</span>統一編號
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">3.</span><span class="necessary">*</span>公司名稱(中) 
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">4.</span><span class="necessary">*</span>公司名稱(英)
                        </div>
                        <!-- <label for="mustSameAsId" class="form_title"></label> -->
                        <div class="form_content form-control-danger">
                            <input type="text" placeholder="輸入文字">
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">5.</span><span class="necessary">*</span>公司電話<span class="help-inline">ex: 02-12345678</span>
                        </div>
                        <div class="form_content">
                            <div class="phoneCol">
                                <div class="container">
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:02">
                                    </div>
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:12345678">
                                    </div>
                                </div>
                            </div>
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">6.</span><span class="necessary">*</span>公司傳真<span class="help-inline">ex: 02-12345678</span>
                        </div>
                        <div class="form_content form-control-danger">
                            <div class="phoneCol">
                                <div class="container">
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:02">
                                    </div>
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:12345678">
                                    </div>
                                </div>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <!-- 7-1 部分必填-三欄 -->
                    <div class="form_grp">
                        <div class="form_title"><span class="number">7-1.</span>公司地址（部分必填-三欄）</div>
                        <div class="form_content">
                          <div class="form_grp has-danger">
                            <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>詳細地址</label>
                            <div class="form_content form-control-danger">
                              <input type="text" placeholder="請填入">
                              <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                            </div>
                          </div>
                          <div class="form_grp">
                            <div class="col-4">
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
                                  <div class="form_grp has-danger">
                                    <label for="mustSameAsId" class="form_title"><span class="necessary">*</span>Zip</label>
                                    <div class="form_content form-control-danger">
                                      <input type="text" placeholder="...">
                                      <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">Select Country</label>
                                    <div class="form_content">
                                      <select name="" id="input" required="required">
                                        <option value="">請選擇</option>
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
                        </div>
                    </div>
                    <!-- 7-2 全部必填-三欄 -->
                    <div class="form_grp has-danger">
                        <div class="form_title"><span class="number">7-2.</span><span class="necessary">*</span>公司地址（全部必填-三欄）</div>
                        <div class="form_content">
                          <div class="form_grp">
                            <label for="mustSameAsId" class="form_title">詳細地址</label>
                            <div class="form_content form-control-danger">
                              <input type="text" placeholder="請填入">
                            </div>
                          </div> 
                          <div class="form_grp">
                            <div class="col-4">
                              <div class="container">
                                <div class="col">
                                  <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">City</label>
                                    <div class="form_content form-control-danger">
                                      <input type="text" placeholder="...">
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">Zip</label>
                                    <div class="form_content form-control-danger">
                                      <input type="text" placeholder="...">
                                      <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form_grp">
                                    <label for="mustSameAsId" class="form_title">Select Country</label>
                                    <div class="form_content form-control-danger">
                                      <select name="" id="input" required="required">
                                        <option value="">請選擇</option>
                                        <option value="">Abyssinian</option>
                                        <option value="">Abyssinian</option>
                                        <option value="">Abyssinian</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                          </div>
                        </div>
                    </div>
                    <!-- 8 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">8.</span>公司網址
                        </div>
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                        </div>
                    </div>
                    <!-- 9 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">9.</span>公司E-mail
                        </div>
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                        </div>
                    </div>
                    <!-- 10 -->
                    <!-- Type-1 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.</span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <!-- <div id="file-QS000025" class="upload_customize">
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
                      </div> -->
                      <!-- 客製上傳 END-->
                    </div>
                  </div>
                  <!-- Type-2 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.</span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
                      <!-- 客製上傳 -->
                      <div id="file-QS000025" class="upload_customize">
                        <div id="fileBlock_1560484037960-0" class="inner">
                          <!-- 多筆上傳 -->
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
                          <!-- 進度條 -->
                          <div id="progressBlock_1560484037960-0" class="progress_bar">
                            <div id="progressRatio_1560484037960-0" class="bar">&nbsp;</div>
                          </div>
                          <!-- 狀態 -->
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
                  <!-- Type-3 -->
                  <div class="form_grp">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>要抓什麼挖歌的上傳</div>
                    <div class="form_content form_inline form-control-danger">
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
                    </div>
                    <!-- <div class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                  </div>
                  <!-- Type-4 -->
                  <div class="form_grp has-danger">
                    <div class="form_title"><span class="number">6.<span class="necessary">*</span></span>要抓什麼挖歌的上傳</div>
                    <!-- <label for="mustSameAsId" class="form_title"></label> -->
                    <div class="form_content form_inline form-control-danger">
                      <button type="button">上傳檔案</button>
                      <input type="file" style="display: none;">
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
                    <div class="form-control-feedback text-sm">請務必上傳資料</div>
                  </div>
                </div>

                <h2>業務聯絡人資料</h2>
                <div class="Pre-entry">
                    <!-- 1 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">1.</span><span class="necessary">*</span>姓名
                        </div>
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
                    <!-- 2 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">2.</span><span class="necessary">*</span>稱謂
                        </div>
                        <div class="form_content form_inline radio_grp form-control-danger">
                            <div class="col-3">
                                <div class="container">
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Mr.</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Miss</label>
                                    </div>
                                    <div class="col">
                                        <label for="mustSameAsId"><input id="" type="checkbox">Dr.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">3.</span><span class="necessary">*</span>連絡電話<span class="help-inline">ex: 02-12345678</span>
                        </div>
                        <div class="form_content">
                            <div class="phoneCol">
                                <div class="container">
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:02">
                                    </div>
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:12345678">
                                    </div>
                                </div>
                            </div>
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">4.</span><span class="necessary">*</span>行動電話<span class="help-inline">ex: 886-912345678</span>
                        </div>
                        <div class="form_content form-control-danger">
                            <div class="phoneCol">
                                <div class="container">
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:886">
                                    </div>
                                    <div class="col">
                                        <input name="" id="" value="" type="text" placeholder="ex:912345678">
                                    </div>
                                </div>
                            </div>
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">5.</span>公司傳真<span class="help-inline">ex: 886-912345678</span>
                        </div>
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
                    <!-- 6 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">6.</span>E-mail
                        </div>
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

                <h2>參展聯絡人資料(會員)</h2>
                <div class="Pre-entry">
                    <div class="form_grp">
                        <div class="form_title">
                            <label for="mustSameAsId"><input id="" type="checkbox">是否由參展聯絡人代繳</label>
                        </div>
                    </div>
                    <!-- 1 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">1.</span><span class="necessary">*</span>公司名稱
                        </div>
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">2.</span><span class="necessary">*</span>公司統編
                        </div>
                        <div class="form_content form-control-danger">
                            <input type="text" placeholder="輸入文字">
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">3.</span><span class="necessary">*</span>聯絡人姓名
                        </div>
                        <div class="form_content form-control-danger">
                            <input type="text" placeholder="輸入文字">
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">4.</span><span class="necessary">*</span>聯絡人電話
                        </div>
                        <div class="form_content form-control-danger">
                            <input type="text" placeholder="輸入文字">
                            <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                    </div>
                </div>

                <h2>報名攤位資料</h2>
                <div class="Pre-entry">
                    <!-- 1 -->
                    <div class="form_grp has-danger">
                        <div class="form_title">
                            <span class="number">1.</span><span class="necessary">*</span>展示區域
                        </div>
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
                    <!-- 2 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">2.</span><span class="necessary">*</span>攤位數量 
                        </div>
                        <div class="form_content">
                            <input type="text" placeholder="輸入文字">
                            <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="form_grp has-danger">
                        <div class="form_title"><span class="number">3.</span><span class="necessary">*</span>選擇參展產品代碼</div>
                        <div class="form_content form_inline radio_grp form-control-danger">
                            <div class="col-6">
                                <div class="container">
                                    <div class="col">
                                        <label><input type="radio" name="sampleRadio53" value="" checked="">Yes</label>
                                    </div>
                                    <div class="col">
                                        <label><input type="radio" name="sampleRadio53" value="">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div>
                    </div>
                    <!-- 4-1 原始 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">4-1.</span><span class="necessary">*</span>選擇參展產品代碼
                            <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span>
                        </div>
                        <div class="form_content">
                            <div class="form_grp">
                                <div class="col-6">
                                    <h4>搜尋代碼：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">產品代碼查詢</label>
                                                <div class="search_grp">
                                                    <input class="search_file" type="text">
                                                    <div class="search_btn">
                                                        <button type="button" class="">查詢</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">選擇產品代碼</label>
                                                <div class="form_content">
                                                    <select name="" id="input" required="required">
                                                        <option value="" selected="">please selected</option>
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
                                <!-- 查詢結果 -->
                                <div class="result" style="display: none;">
                                    <label for="" class="form_title">查詢結果：</label>
                                    <div class="form_content form_inline radio_grp form-control-danger">
                                        <div class="col-3">
                                            <div class="container">
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 查無產品代碼 -->
                                <div class="col-6 add_new">
                                    <!-- <button type="button" class="btn switch">沒有合適的項目嗎？您可以自行新增！</button> -->
                                    <h4>自行新增中英文產品名稱：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">中文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">英文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_grp">
                                            <!-- <button type="button" class="btn">刪除</button> -->
                                            <button type="button" class="btn">加入項目</button>
                                        </div>
                                    </div>
                                    <!-- <div class="btn_grp">
                                        <button type="button" class="btn">新增欄位</button>
                                        <button type="button" class="btn">刪除欄位</button>
                                    </div> -->
                                </div>
                                <!-- 已選擇產品 -->
                                <div class="Checked_Item">
                                    <h4>已增加項目：</h4>
                                    <div class="Items">
                                        <h3>目前無選項</h3>
                                        <!-- <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉"> -->
                                    </div>
                                    <!-- <div class="btn_grp">
                                        <button type="button" class="btn">全部清除</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4-2 正常運作沒填 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">4-2.</span><span class="necessary">*</span>選擇參展產品代碼
                            <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span>
                        </div>
                        <div class="form_content">
                            <div class="form_grp">
                                <div class="col-6">
                                    <h4>搜尋代碼：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">產品代碼查詢</label>
                                                <div class="search_grp">
                                                    <input class="search_file" type="text">
                                                    <div class="search_btn">
                                                        <button type="button" class="">查詢</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">選擇產品代碼</label>
                                                <div class="form_content">
                                                    <select name="" id="input" required="required">
                                                        <option value="" selected="">please selected</option>
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
                                <!-- 查詢結果 -->
                                <div class="result" style="display: block;">
                                    <label for="" class="form_title">查詢結果：</label>
                                    <div class="form_content form_inline radio_grp form-control-danger">
                                        <div class="col-3">
                                            <div class="container">
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_grp">
                                            <!-- <button type="button" class="btn">刪除</button> -->
                                            <button type="button" class="btn">加入項目</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- 查無產品代碼 -->
                                <div class="col-6 add_new">
                                    <!-- <button type="button" class="btn switch">沒有合適的項目嗎？您可以自行新增！</button> -->
                                    <h4>自行新增中英文產品名稱：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">中文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">英文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_grp">
                                        <!-- <button type="button" class="btn">刪除</button> -->
                                        <button type="button" class="btn">加入項目</button>
                                    </div>
                                </div>
                                <!-- 已選擇產品 -->
                                <div class="Checked_Item" style="display: block;">
                                    <h4>已增加項目：</h4>
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
                            </div>
                        </div>
                    </div>

                    <!-- 4-3 沒填 -->
                    <div class="form_grp">
                        <div class="form_title">
                            <span class="number">4-3.</span><span class="necessary">*</span>選擇參展產品代碼
                            <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span>
                        </div>
                        <div class="form_content">
                            <div class="form_grp">
                                <div class="col-6">
                                    <h4>搜尋代碼：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">產品代碼查詢</label>
                                                <div class="search_grp">
                                                    <input class="search_file" type="text">
                                                    <div class="search_btn">
                                                        <button type="button" class="">查詢</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">選擇產品代碼</label>
                                                <div class="form_content">
                                                    <select name="" id="input" required="required">
                                                        <option value="" selected="">please selected</option>
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
                                <!-- 查詢結果 -->
                                <div class="result" style="display: none;">
                                    <label for="" class="form_title">查詢結果：</label>
                                    <div class="form_content form_inline radio_grp form-control-danger">
                                        <div class="col-3">
                                            <div class="container">
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                                <div class="col">
                                                    <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 查無產品代碼 -->
                                <div class="col-6 add_new">
                                    <!-- <button type="button" class="btn switch">沒有合適的項目嗎？您可以自行新增！</button> -->
                                    <h4>自行新增中英文產品名稱：</h4>
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">中文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <label for="" class="form_title">英文</label>
                                                <div class="form_content">
                                                    <input type="text" placeholder="輸入文字" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_grp">
                                            <!-- <button type="button" class="btn">刪除</button> -->
                                            <button type="button" class="btn">加入項目</button>
                                        </div>
                                    </div>
                                    <!-- <div class="btn_grp">
                                        <button type="button" class="btn">新增欄位</button>
                                        <button type="button" class="btn">刪除欄位</button>
                                    </div> -->
                                </div>
                                <!-- 已選擇產品 -->
                                <div class="Checked_Item has-danger">
                                    <h4>已增加項目：</h4>
                                    <div class="Items form-control-danger">
                                        <h3>目前無選項</h3>
                                        <!-- <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉">
                                        <input type="button" class="btn" value="610501 羊肉"> -->
                                    </div>
                                    <div id="name-danger" class="form-control-feedback text-sm">請使用上方『搜尋代碼』或『自行新增』，來增加項目。</div>
                                    <!-- <div class="btn_grp">
                                        <button type="button" class="btn">全部清除</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
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
