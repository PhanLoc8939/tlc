<section class="content_trong width_100">
  <div class="frame-product width_100">
    <div class="margin1200">
      <div class="content_detail width_100 margintop10" >
        <div class="left-product">
          <div class="menu-product">
           <div class="title-danhmuc">
            <h3>Danh mục sản phẩm</h3>
          </div>
          <?php foreach ($dmcap1 as $v) {?>
            <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
             <?php 
             $d->reset();
             $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat1' and id_cat=".$v['id']." order by stt asc, id desc";
             $d->query($sql);
             $dmcap2 = $d->result_array();
             ?>
             <?php if (count($dmcap2) > 0) {?>
              <ul class="menudrop">
                <?php foreach ($dmcap2 as $v1) {?>
                  <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.html"><?=$v1['ten_vi']?></a>
                          <!-- <?php 
                          $d->reset();
                          $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat2' and id_cat1=".$v1['id']." order by stt asc, id desc";
                          $d->query($sql);
                          $dmcap3 = $d->result_array();
                          ?>
                          <?php if (count($dmcap3) > 0) {?>
                            <ul class="menudrop1">
                              <?php foreach ($dmcap3 as $v2) {?>
                                <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html"><?=$v2['ten_vi']?></a>
                                </li>
                              <?php }?>
                            </ul>
                            <?php }?> -->
                          </li>
                        <?php }?>
                      </ul>
                    <?php }?>
                  </li>
                <?php }?>
              </div>
              <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
              <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
              <div class="product-sale">
                <div class="slick-dmsp">
                  <?php foreach ($dmsph as $v) {?>
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
               <?php }?>
             </div>
           </div>
         </div>
         <div class="right-product slider-main">
          <div class="width_100 ngaytao-bv nav-bredcrum "> 
            <li><a href="" title="Trang chủ"> Trang chủ </a> </li>
            <?php if($id_cat1!=''){?>
              <li><a href="san-pham.html" title="Trang chủ">Sản phẩm </a>         
                <i class="fa fa-angle-double-right"></i></li> 
                <li><a href="" title="Trang chủ"><?=$cap1['ten_vi']?> </a>         
                  <i class="fa fa-angle-double-right"></i></li> 
                  <span><?=$title_ttt?></span> 
                <?php }elseif($id_cat!='') {?>
                  <li><i class="fa fa-angle-double-right"></i></li>
                  <li><a href="san-pham.html" title="Trang chủ">Sản phẩm </a> <i class="fa fa-angle-double-right"></i></li> 

                  <li><span><?=$title_ttt?></span> </li>
                <?php } else {?>
                  <li><i class="fa fa-angle-double-right"></i>
                    <span><?=$title_ttt?></span> </li>
                  <?php } ?>
                </div>
                <div class="title-product width_100">
                  <h1><?=$title_ttt?></h1>
                </div>
                <div class="khungsp width_100">
                  <div class="grid-4product">
                   <?php foreach ($product as $key => $v) {?>
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
           </div>
         </div>
       </div>
     </div>
   </section>
   <script type="text/javascript">
     $('.slick-dmsp').slick({
      slidesToShow: 5,
       slidesToScroll: 1,
       vertical:true,
       arrows: false,
       autoplay: true,
       autoplaySpeed: 2000,
     });
   </script>