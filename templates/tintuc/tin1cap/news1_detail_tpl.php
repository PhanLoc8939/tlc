<?php

  $d->reset();

  $sql = "select photo,mota_vi,ten_vi,link from #_photo where com='hotline' and hienthi=1 order by stt asc,id desc";

  $d->query($sql);

  $slide_show1 = $d->result_array(); 

?>




<section class="width_100">
  

            <div id="owl-giaiphap" class="owl-carousel owl-theme">





                             <?php foreach ($slide_show1 as $v) {?>



                                     <div class="item">

                                                <img style="width: 100%"  src="thumb/1366x500/1/<?=_upload_hinhanh_l.$v['photo']?>"  alt=""/>









                                                

                                                

                                     </div>

                                        

                                      <?php } ?>

              </div>




</section>

<section class="width_100 mucslidecongp">
      <div class="container">
            <div class="width_100 showslidegp">
                  <div id="owl-gp1" class="owl-carousel owl-theme">

                           <div class="owl-itemgp width_100">

                               <div class="link-page current">
                                     <div class="number">1</div>
                                     <div class="pic-thumb" style="background-image: url(<?=_upload_tin3cap_l.$news['photo']?>);"><img data-src="<?=_upload_tin3cap_l.$news['photo']?>" alt="<?=$news['ten_vi']?>" class="load-done" src="<?=_upload_tin3cap_l.$news['photo']?>" data-was-processed="true"></div>
                                     <div class="link-text">
                                        <h3><?=$news['ten_vi']?></h3>
                                     </div>
                                     <a href="<?=$news['tenkhongdau']?>-<?=$news['id']?>.htm" data-details="solution-11" data-title="<?=$news['ten_vi']?>" data-description="" data-keyword=""></a>
                               </div>


                              </div>
                           <?php 

                            $key1=2;

                            foreach ($newskhac as $key => $v) {?>
                              <div class="owl-itemgp width_100">


                         
                       

                                <div class="link-page">
                                     <div class="number"><?=$key1?></div>
                                     <div class="pic-thumb" style="background-image: url(<?=_upload_tin3cap_l.$v['photo']?>);"><img data-src="<?=_upload_tin3cap_l.$v['photo']?>" alt="<?=$v['ten_vi']?>" class="load-done" src="<?=_upload_tin3cap_l.$v['photo']?>" data-was-processed="true"></div>
                                     <div class="link-text">
                                        <h3><?=$v['ten_vi']?></h3>
                                     </div>
                                     <a href="<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm" data-details="solution-11" data-title="<?=$v['ten_vi']?>" data-description="" data-keyword=""></a>
                               </div>
                           
                            </div>

                       <?php $key1++; }  ?>

          </div>
            </div>

     </div>
</section>

  <section class="content_trong width_100">
    
    <div class="container">

        
          
         
         <div class="title_detail width_100">
            <h1><?=$news['ten_vi']?></h1>
         </div>
        <div class="content_detail width_100 margintop10" >
                <?=$news['noidung_vi']?>
         </div>
         <div class="othernews width_100 margintop10">
           <h2 class="t11">Giải pháp khác</h2>
           <ul style="margin: 0px; padding: 0px;">
              <div class="box_newskhac" style="padding: 5px 10px 0px 10px;border: none;">
                <?php foreach ($newskhac as $key => $v) {?>
                 <h2> <a href="<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm" title="">+ <?=$v['ten_vi']?></a></h2>
                <?php } ?>
              </div>
           
           </ul>
        </div>
          

          
  </div>
  </section>

