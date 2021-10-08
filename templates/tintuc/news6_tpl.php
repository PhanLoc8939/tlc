
<?php if($id!='') {?>
<section class="width_100 content_trong">
  

      <div class="title_detail width_100">
          <h1><?=$news['ten_vi']?></h1>
      </div>
    <div class="content_detail width_100 margintop20" >
          <?=$news['noidung_vi']?>
    </div>

    <div class="othernews width_100 margintop10">

        <h2 class="t11" >Bài viết khác</h2>
        <ul style="margin: 0px; padding: 0px;">

            <?php foreach ($newskhac as $key => $v) {?>
           <div class="box_newskhac" style="padding: 5px 10px 0px 10px;border: none;">
            <!--   <div class="image_boder"><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/120x100/1/<?=_upload_tinnho_l.$v['photo']?>" class="img-responsive" ></a></div> -->
              <h2> <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">+ <?=$v['ten_vi']?></a></h2>
  
             <!--  <p><?=$v['mota_vi']?></p>
              <div class="clear"></div> -->
           </div>
          <?php } ?>
        </ul>
    </div>

      
</section>

<?php } else {?>
      <section class="width_100 content_trong">
      

          <div class="title_detail width_100">
              <h1>giới thiệu</h1>
          </div>
            <div class="content_detail width_100 margintop20" >
                  <!-- showw tin -->
                  <?php foreach ($news as $key => $v) {?>
                    <div class="box_news">
                     <div class="image_boder"><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/190x150/2/<?=_upload_tinnho_l.$v['photo']?>" class="img-responsive"></a></div>
                     <h2> <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h2>
                     <p><?=$v['mota_vi']?></p>
                     <span class="readmore"> <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem chi tiết</a></span>
                     <div class="clear"></div>
                  </div>

                <?php } ?>

                  <!-- end show tin -->
            </div>

          
    </section>

<?php } ?>

