<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) daysangtranglogin(); ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <h4 class="header-title "><a href="index.php?com=newsletter&act=man" title="Email đăng ký">Email đăng ký</a></h4>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>
            </div>
          </div>-->


  <!-- Inline Form Start -->
  <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="inner">

      <!-- Title Bar Start -->
      <!-- <div class="title-bar">
        <h4>Thêm email đăng ký</h4>
      </div> -->
      <!-- Title Bar End -->

      <form method="post" name="frm" action="index.php?com=newsletter&act=save<?= $chuoi_noi_curpage ?>" enctype="multipart/form-data" class="basic-form inline-form">

        <!-- <div class="col-md-2 pt-10"><label>Họ tên </label></div>
        <div class="col-md-10"><input type="text" name="hoten" value="<?= $item['hoten'] ?>" placeholder="Họ tên" /></div>
        <div class="clearfix"></div>
        <br>

        <div class="col-md-2 pt-10"><label>Danh xưng </label></div>
        <div class="col-md-10"><input type="text" name="danhxung" class="w-full txt-area" value="<?= $item['danhxung'] ?>" placeholder="Danh xưng" /></div>
        <div class="clearfix"></div>
        <br>

        <div class="col-md-2 pt-10"><label>Chức vụ </label></div>
        <div class="col-md-10"><input type="text" name="chucvu" class="w-full txt-area" value="<?= $item['chucvu'] ?>" placeholder="Chức vụ" /></div>
        <div class="clearfix"></div>
        <br>

        <div class="col-md-2 pt-10"><label>Tên doanh nghiệp </label></div>
        <div class="col-md-10"><input type="text" name="tencty" class="w-full txt-area" value="<?= $item['tencty'] ?>" placeholder="Tên doanh nghiệp" /></div>
        <div class="clearfix"></div>
        <br> -->

        <div class="col-md-2 pt-10"><label>Email </label></div>
        <div class="col-md-10"><input type="text" name="email" class="w-full txt-area" value="<?= $item['email'] ?>" placeholder="Email" /></div>
        <div class="clearfix"></div>
        <br>

        <div class="col-md-2 pt-10"><label>Số thứ tự</label></div>
        <div class="col-md-10"><input type="text" name="stt" id="stt" class="w-full txt-area" value="<?= isset($item['stt']) ? $item['stt'] : 1 ?>" placeholder="Số thứ tự" /></div>
        <div class="clearfix"></div>
        <br>

        <!-- <div class="col-md-2 pt-10"><label>Điện thoại </label></div>
        <div class="col-md-10"><input type="text" name="dienthoai" class="w-full txt-area" value="<?= $item['dienthoai'] ?>" placeholder="Điện thoại" /></div>
        <div class="clearfix"></div>
        <br> -->

        <div class="col-md-2 pt-10"></div>
        <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">Hiển thị</span></div>
        <div class="clearfix"></div>
        <br>


        <input type="hidden" name="id" id="id" value="<?= @$item['id'] ?>" />

        <div class="col-md-10 col-md-offset-2">
          <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
          <button type="button" onclick="javascript:window.location='index.php?com=newsletter&act=man<?= $chuoi_noi_curpage ?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
        </div>

        <div class="clearfix"></div>

      </form>

    </div>
  </div>
  <!-- Inline Form End -->
</div>