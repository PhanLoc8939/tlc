<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) daysangtranglogin(); ?>



<h4 class="header-title"><a href="index.php?com=product&act=add_cat">Thêm danh mục cấp 1</a></h4>

<!-- Breadcrumbs End -->



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


  <!-- Inline Form Start -->

  <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="inner">

      <!-- Title Bar Start -->
      <div class="title-bar">
        <h4> <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>
      </div>
      <!-- Title Bar End -->

      <form method="post" name="frm" action="index.php?com=product&act=save_cat<?= $chuoi_noi_curpage1 ?>" enctype="multipart/form-data" class="basic-form inline-form">

        <!-- <?php if ($_REQUEST['act'] == 'edit_cat') { ?>
          <div class="col-md-2 mt-10"><label>Hình ảnh hiện tại</label></div>
          <div class="col-md-10"><img src="<?= _upload_sanpham . $item['photo'] ?>" width="370px" height="280px" /><br /><br /></div>
        <?php } ?>
        <div class="clearfix"></div>
        <div class="col-md-2 mt-10"><label>Hình ảnh</label></div>
        <div class="col-md-10">
          <input type="file" name="file" />
          <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:300px - Height:300px.</span>
          <br /><br />
        </div>

        <?php if ($_REQUEST['act'] == 'edit_cat') { ?>
          <div class="col-md-2 mt-10"><label>Banner hiện tại</label></div>
          <div class="col-md-10"><img src="<?= _upload_sanpham . $item['hinhnho'] ?>" width="600px" /><br /><br /></div>
        <?php } ?>
        <div class="clearfix"></div>
        <br />


        <div class="col-md-2 mt-10"><label>Banner danh mục</label></div>
        <div class="col-md-10">
          <input type="file" name="file1" />
          <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:476px - Height:329px.</span>
        </div>
        <div class="clearfix"></div>
        <br />

        <div class="col-md-2 mt-10"></div>
        <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">Hiển thị</span></div>
        <div class="clearfix"></div>
        <br />

        <div class="col-md-2 mt-10"><label>Chọn màu cho tên</label></div>
        <div class="col-md-10"><input type="color" style="-webkit-appearance: square-button;padding: 0;width: 44px; height: 23px;background-color: buttonface;border-width: 1px;border-style: solid;border-color: rgb(169, 169, 169);border-image: initial;" name="mausac" id="mausac" value="<?= $item['mausac'] ?>" placeholder="Màu" /></div>
        <div class="clearfix"></div>
        <br /> -->


        <!-- PHẦN DƯỚI LÀ DÀNH CHO NỘI DUNG ĐA NGÔN NGỮ-->

        <!-- <ul class="nav nav-tabs">

          <?php foreach ($config["lang"] as $key => $value) {
            $active = '';
            if ($key == 0) {
              $active = "active";
            }
            echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';
          }
          ?>

        </ul> -->

        <!-- Tabs Navigation End -->

        <!-- Tab panes -->

        <div class="tab-content">

          <?php foreach ($config["lang"] as $key => $value) {
            $active = '';
            $active_block = '';
            if ($key == 0) {
              $active = "active";
              $active_block = "style='display:block;'";
            }
          ?>
            <div class="tab-pane <?= $active ?>" id="tab<?= $value ?>">

              <div class="col-md-2 mt-10"><label>Tên <?= $config["langs"][$value] ?></label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area" name=ten_<?= $value ?> id="ten_<?= $value ?>" value="<?= $item['ten_' . $value] ?>" placeholder="Tên" /></div>
              <div class="clearfix"></div>
              <br />

              <div class="col-md-2 mt-10"><label>Số thứ tự</label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area" name="stt" id="stt" value="<?= isset($item['stt']) ? $item['stt'] : 1 ?>" placeholder="Số thứ tự" /></div>
              <div class="clearfix"></div>
              <br />
              <div class="col-md-2"></div>
              <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">Hiển thị</span></div>
              <div class="clearfix"></div>
              <br>
              <!-- <div class="col-md-2 mt-10"><label>Mô tả</label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area name=" mota_<?= $value ?>" id="mota_<?= $value ?>" value="<?= $item['mota_' . $value] ?>" placeholder="Class" /></div>
              <div class="clearfix"></div>
              <br /> -->

              <div class="col-md-2 mt-10"><label>h1 <?= $value ?></label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area" name="h1_<?= $value ?>" id="h1_<?= $value ?>" value="<?= $item['h1_' . $value] ?>" placeholder="thẻ h1" /></div>
              <div class="clearfix"></div>
              <br />

              <div class="col-md-2 mt-10"><label>h2 <?= $value ?></label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area name=" h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?= $item['h2_' . $value] ?>" placeholder="thẻ h2" /></div>
              <div class="clearfix"></div>
              <br />

              <div class="col-md-2 mt-10"><label>h3 <?= $value ?></label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?= $item['h3_' . $value] ?>" placeholder="thẻ h3" /></div>
              <div class="clearfix"></div>
              <br />

              <div class="col-md-2 mt-10"><label>Title <?= $config["langs"][$value] ?></label></div>
              <div class="col-md-10"><input type="text" class="w-full txt-area" name=" title_<?= $value ?>" id="title_<?= $value ?>" value="<?= $item['title_' . $value] ?>" placeholder="Title" /></div>
              <div class="clearfix"></div>
              <br />

              <div class="col-md-2 mt-10"><label>Keywords <?= $config["langs"][$value] ?></label></div>
              <div class="col-md-10"><textarea class="w-full txt-area" name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?= $item['keywords_' . $value] ?></textarea></div>
              <div class="clearfix"></div>
              <br />
              <div class="col-md-2 mt-10"><label>Description <?= $config["langs"][$value] ?></label></div>
              <div class="col-md-10"><textarea class="w-full txt-area name=" description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?= $item['description_' . $value] ?></textarea></div>
            </div>
            <div class="clearfix"></div>
            <br />

          <?php } ?>
        </div>



        <!--END NỘI DUNG ĐA NGÔN NGỮ -->
        <input type="hidden" name="id" id="id" value="<?= @$item['id'] ?>" />
        <div class="col-md-10 col-md-offset-2">
          <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
          <button type="button" onclick="javascript:window.location='index.php?com=product&act=man_cat<?= $chuoi_noi_curpage1 ?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
        </div>
        <div class="clearfix"></div>
        <br />
      </form>
    </div>
  </div>

  <!-- Inline Form End -->

</div>

<script type="text/javascript" src="colors.js"></script>

<script type="text/javascript" src="jqColorPicker.js"></script>

<script type="text/javascript" src="index.js"></script>