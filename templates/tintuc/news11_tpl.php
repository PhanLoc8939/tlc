<?php if($id == '') {?>
  <section class="content_trong width_100">
    <div class="frame-news width_100">
      <div class="margin1200">
        <div class="content_detail width_100 margintop10" >
          <div class="left-product">
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
       </div>
       <div class="right-product slider-main">
         <div class="width_100 ngaytao-bv nav-bredcrum "> 
          <li><a href="" title="Trang chủ"> Trang chủ </a><i class="fa fa-angle-double-right"></i></li>
          <li><a href="tin-tuc.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
          </li> 
        </div>
        <div class="title-product width_100">
          <h1><?=$title_ttt?></h1>
        </div>
        <div class="khungsp width_100">
          <?php foreach ($news as $v) {?>
            <div class="items-tt">
              <div class="img-tt">
                <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/280x210/2/<?=_upload_tinnho_l.$v['photo']?>"></a>
              </div>
              <div class="content-tt">
                <div class="name-tt">
                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
                </div>
                <div class="ngaydang width_100">
                  <span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
                </div>
                <div class="mota-tt">
                  <?=$v['mota_vi']?>
                </div>
                <div class="read-more-news">
                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a>
                </div>
              </div>              
            </div>
          <?php }?>
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
<?php } else {?>
  <section class="content_trong width_100">
    <div class="frame-news width_100">
      <div class="margin1200">
        <div class="content_detail width_100">
         <div class="width_100 ngaytao-bv nav-bredcrum "> 
          <li><a href="" title="Trang chủ"> Trang chủ </a><i class="fa fa-angle-double-right"></i></li>
          <li><a href="tin-tuc.html" title="Tin tức"> Tin tức </a><i class="fa fa-angle-double-right"></i></li>
          <li><a href="tin-tuc.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
          </li> 
        </div>
        <div class="title-product1 width_100">
          <h1 style="text-align: center;"><?=$title_ttt?></h1>
        </div>
        <div class="content-details">
          <?=$news['noidung_vi']?>
        </div>
        <div class="tin-lienquan width_100">
          <div class="title-tinlq">
            <h3><a>Tin tức liên quan</a></h3>
          </div>
          <div class="grid-2tinlq">
            <?php foreach ($newskhac as $v) {?>
             <div class="items-tt">
              <div class="img-tt">
                <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/280x210/2/<?=_upload_tinnho_l.$v['photo']?>"></a>
              </div>
              <div class="content-tt">
                <div class="name-tt">
                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
                </div>
                <div class="date-tt">
                  <span><?=date('d/m/Y',$v['ngaytao'])?></span>
                </div>
                <div class="mota-tt">
                  <?=$v['mota_vi']?>
                </div>
                <div class="read-more-news">
                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a>
                </div>
              </div>              
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php } ?>