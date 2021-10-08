<!-- <script src="media/bxslider/jquery.bxslider.js"></script>
  <link rel="stylesheet" href="media/bxslider/jquery.bxslider.css" /> -->
  <link href="media/magic/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
  <script src="media/magic/magiczoomplus.js" type="text/javascript"></script>
  <div class="content_trong width_100" >
    <div class="margin1200">
     <div class="width_100 ngaytao-bv nav-bredcrum "> 
      <li class="breadcrumb-item"><a href="" title="Trang chủ">Trang chủ</a></li>
      <li><i class="fa fa-angle-double-right"></i></li>
      <li class="breadcrumb-item"><a href="san-pham.html" title="Sản phẩm">Sản phẩm</a></li>
      <li><i class="fa fa-angle-double-right"></i></li>
      <li class="breadcrumb-item active" aria-current="page">
       <?=$title_ttt?>
     </li>
   </div>
   <div class="block-content width_100">
    <!-- noidung chitiet -->
    <div class="ftn-body-ctn">
      <div class="col-xs-12" style="padding: 0;">
       <div class="margin1200">
        <div class="image-detail-pr col-md-5 col-sm-5 col-xs-12 padding15">
          <div class="f-pr-image-zoom">

            <li class="image-gallery">
             <a data-options="selectorTrigger: hover" href="thumb/350x350/2/<?=_upload_sanpham_l.$product_detail['photo']?>" class="MagicZoom" id="Zoom-1" >
              <img class="image-product-detail" src="thumb/350x350/2/<?=_upload_sanpham_l.$product_detail['photo']?>"/>
            </a>
          </li>

          <ul class="owl-imagess owl-carousel">

            <div class="item_img">
             <a class="mz-thumb" data-zoom-id="Zoom-1" href="thumb/350x350/2/<?=_upload_sanpham_l.$product_detail['photo']?>?>"  data-image="thumb/350x350/2/<?=_upload_sanpham_l.$product_detail['thumbchitiet']?>">
              <img src="thumb/350x350/2/<?=_upload_sanpham_l.$product_detail['photo']?>" >
            </a>
          </div>
          <?php for($i=0;$i<count($photo_sp);$i++) { ?>
           <div class="item_img">
            <a class="mz-thumb" data-zoom-id="Zoom-1" href="thumb/350x350/2/<?=_upload_sanpham_l.$photo_sp[$i]['photo']?>"  data-image="thumb/350x350/2/<?=_upload_sanpham_l.$photo_sp[$i]['photo']?>">
              <img width="70" height="80" src="thumb/350x350/2/<?=_upload_sanpham_l.$photo_sp[$i]['photo']?>" alt="<?=$product_detail['ten_'.$lang]?>" alt="<?=$product_detail['ten_'.$lang]?>" >
            </a>
          </div>
        <?php } ?>

      </ul>
    </div>
  </div>
  <div class="pr-detail-info col-md-5 col-sm-7 col-xs-12 padding15">
    <div class="title-prdt width_100">
      <h3><?=$product_detail['ten_vi']?></h3>
    </div>
    <div class="code-prdt width_100">
     <?php if($product_detail['masp']!='') { ?>
      <div class="maspx">
        <span>Mã sản phẩm: <b><?=$product_detail['masp']?></b></span>
      </div>
    <?php }?>
    <?php if($product_detail['id_xuatxu']!='') { ?>
      <div class="thuonghieusp">
       <span>Thương hiệu:
        <?php
        $idxuatxu=$product_detail['id_xuatxu'];
        $idxuatxu=explode(',',$idxuatxu);
        ?>
        <?php 
        $d->reset();
        $sql= "select id,ten_vi from #_tinnho where hienthi=1 and com='7' order by stt asc";
        $d->query($sql);
        $thmain = $d->result_array();
        ?>
        <?php foreach ($thmain as $v1) {
          if(in_array($v1['id'], $idxuatxu)) {?>
           <b> <?=$v1['ten_vi']?></b>
         <?php } }?>
       </span>
     </div>
   <?php }?>
 </div>
 <div class="price-prdt width_100">
  <div class="new-price">
    <b>Giá: </b>
    <span><?=($product_detail['gia'] != 0)?(number_format($product_detail['gia'],0, ',', '.')." đ"):'' ?></span>
  </div>
  <div class="old-price">
    <span><?=($product_detail['giacu'] != 0)?(number_format($product_detail['giacu'],0, ',', '.')." đ"):'' ?></span>
  </div>
</div>
<div class="content-prdt width_100">
  <span class="mota-prdt width_100">Mô tả chi tiết: </span>
  <?=$product_detail['mota_vi']?>
</div>
<div class="share-mxh">
       <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d6878459d925cfa"></script>
                <div class="addthis_inline_share_toolbox_6pog"></div>
                
 <!--  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5334650e2c63c3"></script>
  <div class="addthis_inline_share_toolbox_nm4c"></div>  -->
</div> 
<div class="buy-prdt width_100">
  <a id="themgiohang" class="nutdathangdeal" data-toggle="modal" data-target="#myModalchitiet"  data-name="<?=$product_detail['ten_'.$lang]?>" data-masp="<?=$product_detail['masp']?>" data-giasp="<?=($product_detail['gia'] != 0)?(number_format($product_detail['gia'],0, ',', '.')." đ"):'Liên hệ' ?>" data-src="<?=_upload_sanpham_l.$product_detail['photo']?>" data-id="<?=$product_detail['id']?>" data-thuonghieu="  <?php if($product_detail['id_xuatxu']!='') { ?>
    <?php
    $idxuatxu=$product_detail['id_xuatxu'];
    $idxuatxu=explode(',',$idxuatxu);
    ?>
    <?php foreach ($thmain as $v1) {
      if(in_array($v1['id'], $idxuatxu)) {?>
       <?=$v1['ten_vi']?>
     <?php } }?>
     <?php }?>">Thêm vào giỏ hàng</a>
   </div>
 </div>
 <div class="infor-prdt col-md-2 col-sm-5 col-xs-12 padding15">
  <div class="policy width_100">
    <div class="title-policy width_100">
      <h4><a>Chính sách</a></h4>
    </div>
    <div class="content-policy width_100">
      <?php foreach ($chinhsachbh as $v) {?>
        <li><a href=""><?=$v['ten_vi']?></a></li>
      <?php }?>
      <span>Hồ Chí Minh : <b><?=$company['dienthoai']?></b></span>
    </div>

  </div>
</div>
<!-- popup sanpham -->
<div class="modal fade" id="myModalchitiet" role="dialog">
  <div class="modal-dialog" style="width: 60%;">
   <div class="modal-content">
    <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><img src="media/images/close_popup.png"></button>
      <!-- gio hang popup -->
      <div id="lg_giohang">
       <div class="tieudepop">
        <h4>Sản phẩm: <span><?=$product_detail['ten_vi']?></span> Đã được thêm vào giỏ hàng</h4>
      </div>
      <div class="main_giohang">
        <div class="info_giohangpop">
         <form action="san-pham/<?=$product_detail['tenkhongdau_vi']?>-<?=$product_detail['id']?>.htm" method="post" id="myForm">
          <div class="thumb_item_giohang col-md-5 col-xs-5 col-sm-12">
            <div class="top-infor width_100">
              <div class="images-popup">
               <img alt="" class="imgpop" src="">
             </div>
             <div class="infor-popup">
              <div class="left-infor">
               <p class="tensppop width_100"></p>
               <p class="masppop">Mã sản phẩm: <span></span></p>
               <p class="thuonghieupop ">Thương hiệu: <span></span></p>
               <p class="giasppop w100">Giá: <span></span></p>
             </div>

           </div>
           <div class="count-giohangprdt">
             <div class="countgiohang">
               <span>Bạn đang có <b><?=get_total()?></b> trong giỏ hàng</span>
             </div>
             <div class="countprice">
              <span>Tổng giỏ hàng: <b><?=number_format(get_order_total1(),0, ',', ',')?></b> <i>₫</i></span>
            </div>
          </div>
        </div>
        <div class="bottom-infor width_100">
         <div class="xemgiohang"><a href="gio-hang.html">Xem giỏ hàng</a></div>
         <div class="thanhtoangiohang"><a href="thanh-toan.html">Thanh toán</a></div>

       </div>
     </div>
   </form>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end popup sanpham -->



<div class="bottom-dt">
  <div class="noidungchitiet width_100">
   <ul class="tabs">
    <li class="tab-link current tab-1" data-tab="tab-1"><a>Chi tiết sản phẩm</a>
    </li>
    <!-- <li class="tab-link tab-2" data-tab="tab-2"><a>Hướng dẫn sử dụng</a></li> -->
  </ul>
  <div id="tab-1" class="tab-content current">
    <?php if ($product_detail['noidung_vi'] != '') {?>
      <?=$product_detail['noidung_vi']?>
    <?php }else{?>
      <span class="dangcapnhat">Đang cập nhật. Quý khách vui lòng quay lại sau.</span>
    <?php }?>

  </div>
  <!-- <div id="tab-2" class="tab-content"></div> -->
</div>
</div>

<!-- sanpham lienquan-->

<div class="sanphamlienquan width_100">
  <div class="pr-related width_100">
    <div class="pr-title-block">
      <span>Sản phẩm liên quan</span>
    </div>
  </div>
  <div class="khungsp width_100">
    <div id="owl-splienquan" class="owl-carousel owl-theme">
      <?php foreach ($product_khac as $v) {?>
       <div class="items-prd">
         <div class="images-prd">
          <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" title="<?=$v['ten_vi']?>"><img src="thumb/223x225/1/<?=_upload_sanpham_l.$v['photo']?>"></a>
          <?php if ($v['phantramgia'] != '0' && $v['phantramgia'] != '100' && $v['phantramgia'] != '' ) {?>
            <div class="tagpt">
              - <?=$v['phantramgia']?>%
            </div>
          <?php }?>
        </div>
        <div class="title-prd width_100">
          <div class="name-prd width_100">
           <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a>
         </div>
         <div class="price-prd width_100">
           <span class="price-new width_100"><?=($v['gia'] != 0)?(number_format($v['gia'],0, ',', '.')." đ"):'' ?></span>
           <span class="price-old width_100"><?=($v['giacu'] != 0)?(number_format($v['giacu'],0, ',', '.')." đ"):'' ?></span>
         </div>
       </div>
     </div>
   <?php } ?>
 </div>
</div>
<div class="clearfix"></div>
</div>
<!-- end sp lien quan -->

</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');
    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })
});
</script>
<script type="text/javascript">
 $(".nutdathangdeal").click(function(){
  var img=$(this).attr('data-src');
  var idsp=$(this).attr('data-id');
  var ten1=$(this).attr('data-name');
  var masp=$(this).attr('data-masp');
  var giasp=$(this).attr('data-giasp');
  var thuonghieu=$(this).attr('data-thuonghieu');
  $('.imgpop').attr('src',img);
  $('.tensppop').html(ten1);
  $('.masppop span').html(masp);
  $('.giasppop span').html(giasp);
  $('.thuonghieupop span').html(thuonghieu);
  $('#tenxsp').val(ten1);
  $('#maxsp').val(masp);
  $('#giaxsp').val(giasp);
  $('#thuonghieuxsp').val(thuonghieu);
  $.ajax({
    type: "POST",
    url: "ajax/addcart.php",
    data: {'id':idsp},
    dataType: 'json',
    cache: false,
    success: function(result){
      if(result)
      {
       $('.icongh span').html(result.count);
       $('.countgiohang b').html(result.count);
       $('.countprice b').html(result.tongtien);
       $('#myModalchitiet').modal('show');
     }
   }
 });

});

</script>

<script type="text/javascript">
 $("#owl-splienquan").owlCarousel({
    items : 5,
    margin:0,
    loop:false,
    slideSpeed : 2000,
    margin:10,
    dots:false,
    nav: false,
    autoplay: true,
    navText: ["<img src='img/prev.png'>","<img src='img/next.png'>"],
    responsive:{
      0:{items:1,nav:false,loop:false},
      375:{items:2,nav:false,loop:false},
      600:{items:3,nav:false,loop:false},
      768:{items:3,nav:false,loop:false},
      1000:{items:5,nav:true,loop:false}
    }
  });


  $(".owl-imagess").owlCarousel({
    items : 4,
    margin:0,
    loop:false,
    slideSpeed : 2000,
    margin:10,
    dots:false,
    nav: false,
    autoplay: true,
    navText: ["<img src='img/prev.png'>","<img src='img/next.png'>"],
    responsive:{
      0:{items:1,nav:false,loop:false},
      375:{items:2,nav:false,loop:false},
      600:{items:3,nav:false,loop:false},
      1000:{items:4,nav:true,loop:false}
    }
  });
</script>
