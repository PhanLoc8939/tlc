<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) daysangtranglogin(); ?>

<br>
<div class="main-content-inner ">
  <div class="row">
    <!-- data table start -->
    <div class="w-full">
      <div class="card">
        <div class="card-body">
          <h4 class="header-title"><a href="index.php?com=company&act=man1">BẢN ĐỒ</a></h4>
          <div class="data-tables w-full">
            <table id="dataTable" class="text-center">
              <thead class="bg-light text-capitalize">
                <tr>
                  <th>STT</th>
                  <th>Tiêu đề bản đồ</th>
                  <th>Tọa độ</th>
                  <th>Hiển thị</th>
                  <th>Sửa</th>
                </tr>
              </thead>
              <tbody>
                <?php if (count($items) != 0) {
                  foreach ($items as $k => $v) { ?>
                    <tr>
                      <td><?= $v['stt'] ?></td>
                      <td><a href="index.php?com=company&act=edit1&id=<?= $v['id'] ?><?= $chuoi_noi_curpage ?>" style="text-decoration:none;"><?= $v['title_vi'] ?></a></td>
                      <td><a href="index.php?com=company&act=edit1&id=<?= $v['id'] ?><?= $chuoi_noi_curpage ?>" style="text-decoration:none;"><?= $v['website'] ?></td>
                      <td><a href="index.php?com=company&act=man1&hienthi=<?= $v['id'] ?><?= $chuoi_noi_curpage ?>"><img src="<?= ($v['hienthi'] == 1) ? 'media/images/active_1.png' : 'media/images/active_0.png' ?>" border="0" /></a></td>
                      <td><a href="index.php?com=company&act=edit1&id=<?= $v['id'] ?><?= $chuoi_noi_curpage ?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>
                    </tr>
                <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- data table end -->

    <!-- Table Holder End -->
    <div class="col-md-12 margin_bottom_10px pt-10">
      <div class="col-md-4 paging_0px">
        <!-- <a href="index.php?com=company&act=add1<?= $chuoi_noi_curpage ?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm tin tức</a> -->
        <a href="index.php?com=company&act=man1<?= $chuoi_noi_curpage ?>" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a>
      </div>
      <div class="col-md-8 paging_0px">
        <div class="paging"><?= $paging['paging'] ?></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>