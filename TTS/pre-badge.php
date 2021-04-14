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
          <h2>Badge Preview</h2>
          <form action="" class="form_grid form_vertical">
            <div class="Pre-entry badge-preview">
              <!-- sample1 -->
              <div class="box_grp has-danger">
                <img src="images/sample1-banner.png" alt="">
                <div class="box_title">Please enter visitor name：</div>
                <div class="box_content form-control-danger">
                  <input type="text" placeholder="Tim Lin">
                  <div class="form-control-feedback text-sm">Cannot be blank.</div>
                </div>
                <div class="box_title">Please enter the company name：</div>
                <div class="box_content">
                  <p>Hyweb Technology Col., Ltd.</p>
                  <div class="text-sm">Max 20 characters or 10 Chinese characters.</div>
                </div>
                <div class="unchangeable">
                  <div class="box_title">國家 / Country：</div>
                  <div class="box_content">
                    <p>Taiwan</p>
                    <!-- <div class="text-sm">Max 20 characters or 10 Chinese characters.</div> -->
                  </div>
                </div>
                <!-- barcode -->
                <div class="barcode">
                  <div class="country">Taiwan</div>
                  <img src="images/barcode.png" alt="">
                </div>
                <!-- 浮水印 -->
                <img src="images/watermarking.png" alt="" class="watermarking">
              </div>
            </div>
            <div class="btn_grp">
              <button type="submit" class="login-button">Back</button>
              <button type="submit" class="login-button">Next</button>
            </div>
          </form>
        </div>

      </div>



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
