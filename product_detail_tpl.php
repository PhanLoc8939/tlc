


<!-- Begin ImageZoom  -->
<?php

$d->reset();
$sql_detail = "select * from #_product_cat where hienthi=1 and id=".$product_detail['id_cat']." and com='cat' order by id asc";         
$d->query($sql_detail);
$tencap1 = $d->fetch_array();
$d->reset();
$sql_detail = "select * from #_product_cat where hienthi=1 and id=".$product_detail['id_cat1']." and com='cat1' order by id asc";         
$d->query($sql_detail);
$tencap2 = $d->fetch_array();


$d->reset();
$sql_detail = "select * from #_product_cat where hienthi=1 and id=".$product_detail['id_cat2']." and com='cat2' order by id asc";         
$d->query($sql_detail);
$tencap3 = $d->fetch_array();

?>

<div class="noidungtrong">

  <div class="container">



    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs" style="margin-top: 30px;">
      <a href="" title="Back to the frontpage"><?=_trangchu?></a>




      <span aria-hidden="true">›</span>
      

      <a href="san-pham/<?=$tencap1['tenkhongdau_'.$lang]?>-<?=$tencap1['id']?>.html" title=""><?=$tencap1['ten_'.$lang]?></a>
      <span aria-hidden="true">›</span>
      

      <a href="san-pham//<?=$tencap1['tenkhongdau_'.$lang]?>/<?=$tencap2['tenkhongdau_'.$lang]?>-<?=$tencap2['id']?>.html" title=""><?=$tencap2['ten_'.$lang]?></a>
      

      <span aria-hidden="true">›</span>
      <span><?=$product_detail['ten_'.$lang]?></span>


    </nav>


    <link href="magic/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
    <script src="magic/magiczoomplus.js" type="text/javascript"></script>

    <style>
      /*CHI TIẾT SẢN PHẨM*/




      ul#sanpham_chitiet_ul{
        list-style:none;  
        width:100%;float:left;  
      } 
      ul#sanpham_chitiet_ul li{
        background:url(media/images/chidan.png) left 8px no-repeat !important;
        padding-left:2%;
        line-height:23px;
        display:block;
        width:98%;

      }
      .sp_p_left{
        float:left;
        width:90px;                    
      }



      .noidung_sp_ct, .noidung_sp_ct img, .noidung_sp_ct table,.noidung_sp_ct iframe{
        max-width:420px !important;
      }


      div.images_galley {
        width: 100%;
        float: left;
        text-align: center;
        background: #FFF
      }
      div.images_galley img {
        max-width: 100%
      }
      div.images_list {
        width: 260px;
        float: left;
        margin-top: 10px;
      }   
      .images_list .item_img{
        width: 18%;
        padding-bottom: 10px;
        float: left;
        margin-right: 15px;

        margin-top:10px;

      }
      .item_img img
      {
        width: 50px;
        height: 50px;
      }    
      .listalbum{width: 100%;float: left;}
     
    </style>
    <!-- Begin ImageZoom  -->

    <?php 

    $d->reset();
    $sql2 = "select * from #_product_cat where com='cat' order by id desc";
    $d->query($sql2);
    $dm = $d->result_array();
    $d->reset();
    $sql2 = "select * from #_photo where com='slideshow2' ";
    $d->query($sql2);
    $qc = $d->result_array();
    if($product_detail['idhangsanxuat'])

    {
      $d->reset();
      $sql_tintuc = "select * from #_tinnho where hienthi=1 and id=".$product_detail['idhangsanxuat']." and com=6";
      $d->query($sql_tintuc);
      $brand = $d->fetch_array();
    } 

    if($product_detail['idtheloai'])
    {
     $d->reset();
     $sql_tintuc = "select * from #_tinnho where hienthi=1 and id=".$product_detail['idtheloai']." and com=7";
     $d->query($sql_tintuc);
     $loai = $d->fetch_array();
   }
   ?>
   <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0"> 
    <div id='sanpham_chitiet'>
      <div class="col-md-12 col-sm-12 col-xs-12"> 
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="nd-album" style="width: 100%;float: left;"> 
            <script src="media/fotorama/fotorama.js"></script>
            <link rel="stylesheet" href="media/fotorama/fotorama.css">
            <link rel="stylesheet" href="media/fotorama/fotorama-style.css">
            <div class="listalbum fotorama"
            data-allowfullscreen="true" data-nav="thumbs" data-thumbwidth="91" data-thumbheight="56">
            <img src="thumb/900x570/1/<?=_upload_sanpham_l.$product_detail['photo']?>">
            <?php for($i=0;$i<count($photo_sp);$i++) { ?>
              <img src="thumb/900x570/1/<?=_upload_sanpham_l.$photo_sp[$i]['photo']?>" alt="<?=$news['ten_'.$lang]?>">
            <?php } ?>
          </div>
        </div>


      </div> 
      <!--Product detail-->  
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="tenchitiet">
          <h2><?=$product_detail['ten_vi']?></h2>
        </div>
        <div class="motachitiet">
          <p><?=catchuoi($product_detail['mota_vi'],500)?></p>
        </div>
       <!--  <div class="giachitiet">
          <span><?=($product_detail['gia']!=0)?(number_format($product_detail['gia'],0, ',', '.')." đ"):'<?=_lienhe?>' ?></span>
        </div> -->
  <!--       <form action="index.php" method="post" id="form-add_to_cart" >
          <div class="nhapsoluong" style="margin-top:10px;text-align:center">
           <div style="padding-top: 5px;width: 100%;text-align: center;font-size: 18px;font-family: Caviar;margin-bottom: 20px;" >
             <?=_soluong?> :
           </div>
                            <div style="float:left;width:60px;margin-left:5px">
                                <input type="number" style="height:30px" class="pro_quantity form-control"  name="num" id="soluong" value="1" min="1" placeholder="1">
                              </div><br><br>
                               number
                              <a href="javascript:" id="sub">
                                <label class="btn1 sub">
                                  <span style="border: 1px solid #ccc;padding: 5px 10px;border-radius: 5px;">-</span>
                                </label></a>
                                <label>
                                 <input type="number" style="text-align: center;padding: 5px 10px;color: #000;border-radius: 5px;border: none;border: 1px solid #ccc;" readonly="" value="1" size="1" min="1" max="10" name="num" class="pro_quantity fab-input-text" id="soluong">
                               </label>

                               <a href="javascript:" id="plus">
                                <label class="btn1 plus">
                                  <span style="border: 1px solid #ccc;padding: 5px 10px;border-radius: 5px;">+</span>
                                </label>
                              </a>
                               number
                            </div>
                            <div class="themcart">
                             <input type="hidden" class="productid" name="productid" value="<?=$id?>" />
                             <input type="hidden" name="command" value="add" />
                             <button type="button"  class="addCard  ">
                              <span>ADD TO CART</span>
                            </button>
                          </div>
                         
                        </form> --> 
                      </div>
                    </div>
                  </div>  
                  <div class="tieudelienquan col-md-12 col-sm-12 col-xs-12" > 
                    <div class="row">
                      <div class="noidungkhac">
                        <div class="dong1">
                          <h3 style="border-top:none" class="transition"><?=_noidungsanpham?></h3>
                          <div class="motachitiet1 transition">
                            <?=$product_detail['noidung_vi']?>
                          </div>
                        </div>
                      </div>
                      <div class="noidungkhac">
                        <div class="tenchitiet">
                          <h2><?=_sanphamlienquan?></h2>
                        </div>
                        <div class="noidunglienquan">
                          <div class="grid-4">
                            <?php if(count($product_khac)>0) {?>
                              <?php foreach ($product_khac as $v) {?>
                               <div class="itemsp">
                                <div class="item-imgsp hover1">
                                 <a href="san-pham/<?=$v['tenkhongdau_'.$lang]?>-<?=$v['id']?>.htm"><img src="thumb/379x280/1/<?=_upload_sanpham_l.$v['photo']?>"></a>
                               </div>
                               <div class="item-tensp hover2">
                                <a href="san-pham/<?=$v['tenkhongdau_'.$lang]?>-<?=$v['id']?>.htm"><?=$v['ten_'.$lang]?></a>
                              </div>
                            <!-- <div class="item-mota">
                              <?=$v['mota_'.$lang]?>
                            </div> -->
                          </div>
                        <?php } ?>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <script type="text/javascript">
             $(document).ready(function(){
              $(".dong1 h3").click(function(){
               $('.dong1 h3').removeClass('activecong');
               $('.motachitiet1').removeClass('active1');
               $(this).closest('.dong1').find('.motachitiet1').addClass('active1');
               $(this).addClass('activecong');
             });
            });
          </script>
          <script type="text/javascript">
           $(document).ready(function() {
            $('.addCard').click(function(event) {
              var cart = $('.shopping-cart1');
              var imgtodrag = $('.image-product-detail');
              if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                .offset({
                  top: imgtodrag.offset().top,
                  left: imgtodrag.offset().left
                })
                .css({
                  'opacity': '0.5',
                  'position': 'absolute',
                  'height': '150px',
                  'width': '150px',
                  'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                  'top': cart.offset().top + 10,
                  'left': cart.offset().left + 10,
                  'width': 75,
                  'height': 75
                }, 1000, 'easeInOutExpo');

                setTimeout(function () {
                  cart.effect("shake", {
                    times: 2
                  }, 200);
                }, 1500);

                imgclone.animate({
                  'width': 0,
                  'height': 0
                }, function () {
                  $(this).detach()
                });
              }
              var id = $('.productid').val();
              var sl = $('.pro_quantity').val();

              $.ajax({
                type: "POST",
                url: "ajax/addcart.php",
                data: {'id':id,'sl':sl},
                dataType: 'json',
                success: function(result){
                           // $.growl({ title: "Thông báo", message: "Sản phẩm đã được thêm vào giỏ hàng!" });
                           $('#count-cart1').html('('+result.count+' Sản phẩm)');
                           $('#count-cart').html('('+result.count+')');
                           $('#count-cart2').html('('+result.count+')');
                           $('.sub-total').html(result.thanhtien);
                         }
                       });
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){

            $('ul.tabs li').click(function(){
              var tab_id = $(this).attr('data-tab');

              $('ul.tabs li').removeClass('current');
              $('.tab-content').removeClass('current');

              $(this).addClass('current');
              $("#"+tab_id).addClass('current');
            })
    //SO LUONG
    $('.nhapsoluong').on('click', '#sub', function () {
      var input_sl = $('#soluong');
      var soluong = parseInt($('#soluong').val());
      if (input_sl.attr('min') < soluong && !isNaN(soluong))
        input_sl.val(soluong - 1).change();
    });
    $('.nhapsoluong').on('click', '#plus', function () {
      var input_sl = $('#soluong');
      var soluong = parseInt($('#soluong').val());
      if (input_sl.attr('max') > soluong && !isNaN(soluong))
        input_sl.val(soluong + 1).change();
    });
  })
</script>
</div>
</div>


