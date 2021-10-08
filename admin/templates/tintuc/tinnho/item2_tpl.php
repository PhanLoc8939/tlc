<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<br>
<div class="main-content-inner ">
  <div class="row">
    <!-- data table start -->
    <div class="w-full">
      <div class="card">
        <div class="card-body">
          <h4 class="header-title"><a href="index.php?com=tinnho&act=man2">PROJECTS</a></h4>
          <div class="data-tables w-full">
            <table id="dataTable" class="text-center">
              <thead class="bg-light text-capitalize">
                <tr>
                  <th>STT</th>
                  <th>Hình ảnh</th>
                  <th>Tên</th>
                  <th>Nổi bật</th>
                  <th>Hiển thị</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($items)!=0){
                  foreach($items as $k=>$v){?>
                <tr>
                <td><?=$v['stt']?></td>   
                <td><a href="index.php?com=tinnho&act=edit2&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_tinnho.$v['photo']?>" width="150px"/></a></td>
                <td><a href="index.php?com=tinnho&act=edit2&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><?=$v['ten_vi']?></a></td>
                <!-- <td><a class="clickchange" thaydoiloai="tinmoi"   thaydoitable="table_tinnho"  thaydoiid="<?=$v['id']?>" id="idcsstinmoi<?=$v['id']?>"><img src="<?=($v['tinmoi']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>  -->
                <td><a class="clickchange" thaydoiloai="noibat"   thaydoitable="table_tinnho"  thaydoiid="<?=$v['id']?>" id="idcssnoibat<?=$v['id']?>"><img src="<?=($v['noibat']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>
                <td><a class="clickhienthi" thaydoiloai="hienthi"   thaydoitable="table_tinnho" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>"><img src="<?=($v['hienthi']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>
                <td><a href="index.php?com=tinnho&act=edit2&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>
                <td><a href="index.php?com=tinnho&act=delete2&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td> 
                </tr>
                <?php }}?>
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

        <a href="index.php?com=tinnho&act=add2<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm</a> 

        <a href="index.php?com=tinnho&act=man2" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 

      </div>

      <div class="col-md-8 paging_0px">    

        <div class="paging"><?=$paging['paging']?></div>

      </div>



      <div class="clearfix"></div>

    </div>

  </div>
</div>