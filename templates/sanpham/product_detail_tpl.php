<link href="media/fancybox3/jquery.fancybox.css" rel="stylesheet"/>
<script src="media/fancybox3/jquery.fancybox.js"></script>
<script src="media/bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" href="media/bxslider/jquery.bxslider.css" />
<section class="width_100 content_trong">
  <div class="margin1200">
    <div class="width_100 ngaytao-bv nav-bredcrum "> 
      <a href="" title="Trang chủ"> Trang chủ </a> <i class="fa fa-angle-double-right"></i>   <a href="" title="Sản phẩm"> Sản phẩm </a> <i class="fa fa-angle-double-right"> </i><span> <?=$product_detail['ten_vi']?> </span> 
    </div>

    <div class="title_detail width_100">
      <h1><?=$product_detail['ten_vi']?></h1>
    </div>
    <div class="content_detail width_100 margintop20" >

      <div class="row">
        <!-- chi tiết left-->

        <div class="image-detail-pr col-md-5 col-sm-5 col-xs-12 padding15">
          <div class="f-pr-image-zoom">
           <ul class="bxslider">
            <li class="image-gallery">
             <a class="fancybox" data-fancybox-group="gallery" href="<?=_upload_sanpham_l.$product_detail['photo']?>" title="Hinh 1">
               <img src="thumb/500x500/2/<?=_upload_sanpham_l.$product_detail['photo']?>" class="img-responsive"/>
             </a>
           </li>
           <?php foreach ($photo_sp as $key => $v) {?>
             <li class="image-gallery">
               <a class="fancybox" data-fancybox-group="gallery" href="<?=_upload_sanpham_l.$v['photo']?>" title="Hinh 1">
                 <img src="thumb/500x500/2/<?=_upload_sanpham_l.$v['photo']?>" class="img-responsive"/>
               </a>
             </li>
           <?php } ?>
         </ul>
         <div id="bx-pager">
          <ul class="owl-carousel">
           <li>
            <a data-slide-index="0" title="Hinh 1">
              <img src="thumb/50x50/2/<?=_upload_sanpham_l.$product_detail['photo']?>" class="img-responsive"/>
            </a>
          </li>

          <?php foreach ($photo_sp as $key => $v) {?>   
           <li>
            <a data-slide-index="<?=$key+1?>" title="Hinh 2">
              <img src="thumb/50x50/2/<?=_upload_sanpham_l.$v['photo']?>" class="img-responsive"/>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</div>

<!-- end chi tiết left -->

<!-- chi tiết right -->


<div class="col-md-7 col-sm-7 col-xs-12">
  <ul class="product_info">
    <li class="ten"><?=$product_detail['ten_vi']?></li>
    <li><b>Mã sản phẩm:</b> <?=$product_detail['masp']?></li>                 

    <li class="gia ">Giá:  <?=($product_detail['gia']!=0)?(number_format($product_detail['gia'],0, ',', ',')." ₫"):'Liên hệ' ?></li>





    <li><b>Lượt xem:</b> <span><?=$product_detail['luotxem']?></span></li>
    <li>

      <?=$product_detail['mota_vi']?>

    </li>  
    <li><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5334650e2c63c3"></script>
      <div class="addthis_inline_share_toolbox_nm4c"></div> 

    </li>  

  </ul>

</div>


<!-- end chi tiết right -->

</div>
</div>

<div class="info_deals width_100 usual">

 <div class="title_page_load_id">
  <ul>
    <h2>Thông tin chi tiết</h2>
  </ul>
</div>

<div class="content_tab width_100" style="height: auto; padding: 10px 0px; overflow: hidden;">
  <?=$product_detail['noidung_vi']?>

</div>

</div>

<div class="title_page_load_id">
  <ul>
    <h2>Sản phẩm khác</h2>
  </ul>
</div>
<div class="content_detail width_100 " >
  <div class="khungsp width_100">

    <?php foreach ($product_khac as $key => $v) {?>
     <div class="item_sp width_100">

      <figure>
        <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img src="thumb/330x465/2/<?=_upload_sanpham_l.$v['photo']?>"></a>
      </figure>
      <figcaption>
        <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a></h3>
      </figcaption>
    </div>
  <?php } ?>
</div>
</div>


</div>

</section>

<script type="text/javascript">
  $(document).ready(function() {

    $('.fancybox').fancybox();

  });
</script>  

<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider({ 
      pagerCustom: '#bx-pager', 
      auto: true, 
      autoControls: true
    });
  });

</script>

<script type="text/javascript">

  $(document).ready(function() {  

    var carouselProTab = $("#bx-pager ul");

    carouselProTab.owlCarousel({

     items :5,



     loop:false,

     slideSpeed : 2000,

     nav: false,

     autoplay: true,

     dots:false,

     margin:15,



     responsive:{

       0:{

        items:3,

        nav:false,

        loop:false

      },

      600:{

       items:3,

       nav:false,

       loop:false

     },

     1000:{

      items:5,

      nav:true,

      loop:false



    }

  }



});

  });





</script>
<script type="text/javascript">

    //SO LUONG

    $('.quantity').on('click', '.minus', function () {

      var input_sl = $('#quantity');

      var soluong = parseInt($('#quantity').val());

      if (input_sl.attr('min') < soluong && !isNaN(soluong))

        input_sl.val(soluong - 1).change();

    });

    $('.quantity').on('click', '.plus', function () {

      var input_sl = $('#quantity');

      var soluong = parseInt($('#quantity').val());

      if (input_sl.attr('max') > soluong && !isNaN(soluong))

        input_sl.val(soluong + 1).change();

    });


    $(document).ready(function() {

      $('.addcart').click(function(event) {


       var id = $('#product_id').val();

       var sl = $('#quantity').val();



       $.ajax({

        type: "POST",

        url: "ajax/addcart.php",

        data: {'id':id,'sl':sl},

        dataType: 'json',



        success: function(result){

                           // $.growl({ title: "Thông báo", message: "Sản phẩm đã được thêm vào giỏ hàng!" });


                           if(result){

                            alert('Đặt hàng thành công !');
                              // $('#count-cart').html('('+result.count+')');

                              window.location.href = 'gio-hang.html';
                            }


                          }

                        });



     });



    });
  </script>
