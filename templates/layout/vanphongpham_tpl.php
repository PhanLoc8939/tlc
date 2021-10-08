
  <?php 
  $d->reset();
  $sql= "select id,link,photo from #_photo where hienthi=1 and com='banner'";
  $d->query($sql);
  $bannersp = $d->fetch_array();

  ?>
  <div class="vpp-main">
  	<div class="margin1200">
  		<div class="slidershow-main width_100">
  			<div class="left-menu">
          <!--   				<div class="owl-menu"> -->
           <?php foreach ($menu_cat as $v) {?>
            <li>
             <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
             <?php 
             $d->reset();
             $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat1' and id_cat=".$v['id']." order by stt asc, id desc";
             $d->query($sql);
             $dmcap2 = $d->result_array();
             ?>
             <?php if (count($dmcap2) > 0) {?>
              <ul class="submenu">
                <?php foreach ($dmcap2 as $v1) {?>
                  <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.html"><?=$v1['ten_vi']?></a>
                    <?php 
                    $d->reset();
                    $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat2' and id_cat1=".$v1['id']." order by stt asc, id desc";
                    $d->query($sql);
                    $dmcap3 = $d->result_array();
                    ?>
                    <?php if (count($dmcap3) > 0) {?>
                      <ul class="submenu1">
                        <?php foreach ($dmcap3 as $v2) {?>
                          <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html"><?=$v2['ten_vi']?></a>
                          </li>
                        <?php }?>
                      </ul>
                    <?php }?>
                  </li>
                <?php }?>
              </ul>
            <?php }?>
          </li>
        <?php }?>
        <!--  </div> -->
      </div>
      <div class="slider-main width_100">
        <?php include_once _template."layout/slider/nivoslider.php"; ?>
      </div>
    </div>
    <div class="content-product width_100">
     <div class="banner-xnk">
      <a href="<?=$bannersp['link']?>"><img src="<?=_upload_hinhanh_l.$bannersp['photo']?>"></a>
    </div>
    <div class="frame-product width_100">
      <?php foreach ($product_cat as $v){
       $d->reset();
       $sql= "select id,tenkhongdau_vi,ten_vi,photo,gia,giacu,phantramgia from #_product where hienthi=1 and noibat='1' and id_cat=".$v['id']." order by stt asc, id desc";
       $d->query($sql);
       $prd_n = $d->result_array();
       ?>
       <div class="dmsp-main width_100">
        <div class="title-dmsp">
         <div class="titledmc1"><h3><a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h3></div>
         <div class="xemtatca"><a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem tất cả </a></div>
       </div>
       <?php if (count($prd_n) > 0) {?>
        <div class="dmc-sp width_100">
          <div class="owl-spnb owl-carousel width_100">
           <?php foreach ($prd_n as $v1) {?>
            <div class="items-prd">
             <div class="images-prd">
              <a href="san-pham/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.htm" title="<?=$v1['ten_vi']?>"><img src="thumb/223x225/1/<?=_upload_sanpham_l.$v1['photo']?>"></a>
              <?php if ($v1['phantramgia'] != '0' && $v1['phantramgia'] != '100' && $v1['phantramgia'] != '' ) {?>
                <div class="tagpt">
                 - <?=$v1['phantramgia']?>%
               </div>
             <?php }?>
           </div>
           <div class="title-prd width_100">
            <div class="name-prd width_100">
             <a href="san-pham/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.htm"><?=$v1['ten_vi']?></a>
           </div>
           <div class="price-prd width_100">
             <span class="price-new width_100"><?=($v1['gia'] != 0)?(number_format($v1['gia'],0, ',', '.')." đ"):'' ?></span>
             <span class="price-old width_100"><?=($v1['giacu'] != 0)?(number_format($v1['giacu'],0, ',', '.')." đ"):'' ?></span>
           </div>
         </div>
       </div>
     <?php }?>
   </div>
 </div>        
<?php }?>
</div>
<?php }?>
</div>
</div>
<div class="news-videos width_100">
  <div class="news-main col-md-8 col-sm-8 col-xs-12">
    <div class="title-news">
      <h3><a href="tin-tuc.html">Tin tức</a></h3>
    </div>
    <div class="fame-news">
      <div class="news-left col-md-6 col-sm-6 col-xs-12">

        <div class="items-new width_100">
          <div class="images-new width_100">
            <a href=""><img src="thumb/361x270/2/<?=_upload_tinnho_l.$newsnb['photo']?>"></a>
            <!--   <div class="date-new width_100"><a href=""><?=$newsnb['ten_vi']?></a></div> -->
          </div>
          <div class="title-new width_100"><a href=""><?=$newsnb['ten_vi']?></a></div>
          <div class="content-new width_100"><?=$newsnb['mota_vi']?></div>
          <div class="read-new width_100"><a href="">Xem thêm</a></div>
        </div>

      </div>
      <div class="news-right col-md-6 col-sm-6 col-xs-12">
        <?php foreach ($newsnbs as $v) {?>
         <div class="items-news width_100">
          <div class="left-new">
           <div class="images-new">
             <a href=""><img src="<?=_upload_tinnho_l.$v['photo']?>"></a>
           </div>
         </div>
         <div class="right-new">
           <div class="title-new width_100"><a href=""><?=$v['ten_vi']?></a></div>
           <div class="content-new width_100"><?=$newsnb['mota_vi']?></div>
           <div class="read-new width_100"><a href="">Đọc tiếp</a></div>
         </div>
       </div>
     <?php }?>
   </div>
 </div>
</div>
<div class="video-main col-md-4 col-sm-4 col-xs-12">
  <div class="title-news">
    <h3><a href="">Videos</a></h3>
  </div>
  <div class="fame-news">
    <div class="videos-top col-md-12 col-sm-12 col-xs-12">
      <div class="items-video">
        <iframe src="https://www.youtube.com/embed/<?=$videomain['mota_vi']?>"></iframe>
      </div>
    </div>
    <div class="video-bottom col-md-12 col-sm-12 col-xs-12">
      <!-- <div class="owl-video owl-carousel width_100"> -->
        <div class="grid-3-video width_100">
          <?php foreach ($videos as $v) {?>
            <div class="items-videos width_100">
              <a class="video-link" data-video-id="<?=$v['mota_vi']?>"><img src="thumb/122x96/2/<?=_upload_tinnho_l.$v['photo']?>">
                <img class="play_icon" src="media/images/iconplay.png" /></a>
              </div>
            <?php }?>
          </div>


          <!--    </div> -->

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(".owl-spnb").owlCarousel({
   items : 5,
   margin:0,
   loop:false,
   slideSpeed : 2000,
   margin:10,
   dots:true,
   nav: false,
   autoplay: true,
   navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],
   responsive:{
    0:{items:1,nav:false,loop:false},
    375:{items:2,nav:false,loop:false},
    650:{items:3,nav:false,loop:false},
    1000:{items:4,nav:true,loop:false},
    1200:{items:5,nav:true,loop:false}

  }
});

//     $(".owl-video").owlCarousel({
//    items : 3,
//    margin:0,
//    loop:false,
//    slideSpeed : 2000,
//    margin:10,
//    dots:true,
//    nav: false,
//    autoplay: true,
//    navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],
//    responsive:{
//     0:{items:1,nav:false,loop:false},
//     600:{items:2,nav:false,loop:false},
//     1000:{items:3,nav:true,loop:false}
//   }
// });
</script>
<!-- <script type="text/javascript">
 $('.owl-menu').slick({
  slidesToShow: 12,
  slidesToScroll: 1,
  vertical:true,
  rtl: true,
  arrows: false,
});
</script> -->